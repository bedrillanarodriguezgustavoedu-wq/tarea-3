<?php

namespace Tests\Feature;

use App\Mail\DemoRequestMail;
use Illuminate\Support\Facades\Mail;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    public function test_public_pages_render_without_a_database(): void
    {
        $this->get('/')->assertOk()->assertSee('Your Clinical')->assertSee('Deep Dive Analytics');
        $this->get('/about')->assertOk()->assertSee('Clinical context');
        $this->get('/privacy')->assertOk()->assertSee('Privacy notice');
    }

    public function test_contact_request_is_emailed_when_smtp_is_configured(): void
    {
        Mail::fake();
        config([
            'mail.default' => 'smtp',
            'mail.mailers.smtp.host' => 'smtp.test.local',
            'services.pulmify.contact_email' => 'team@pulmify.test',
        ]);

        $response = $this->from('/#request-demo')->post('/contact', [
            'name' => 'Alex Rivera',
            'email' => 'alex@example.test',
            'organization' => 'North Clinic',
            'message' => 'We would like a product tour.',
        ]);

        $response->assertRedirect('/#request-demo')
            ->assertSessionHas('contact_success')
            ->assertSessionMissing('_old_input');
        Mail::assertSent(DemoRequestMail::class, fn (DemoRequestMail $mail): bool => (
            $mail->name === 'Alex Rivera'
            && $mail->email === 'alex@example.test'
            && $mail->organization === 'North Clinic'
        ));
    }

    public function test_contact_request_is_not_reported_as_sent_without_smtp(): void
    {
        Mail::fake();

        $this->from('/#request-demo')->post('/contact', [
            'name' => 'Alex Rivera',
            'email' => 'alex@example.test',
            'organization' => 'North Clinic',
            'message' => 'We would like a product tour.',
        ])->assertRedirect('/#request-demo')
            ->assertSessionHas('contact_error')
            ->assertSessionMissing('_old_input');

        Mail::assertNothingSent();
    }

    public function test_contact_request_validates_fields_without_flashing_submitted_data(): void
    {
        $this->from('/#request-demo')->post('/contact', [
            'name' => 'Alex Rivera',
            'email' => 'not-an-email',
            'organization' => 'North Clinic',
            'message' => 'We would like a product tour.',
        ])->assertRedirect('/#request-demo')
            ->assertSessionHasErrors('email')
            ->assertSessionMissing('_old_input');
    }

    public function test_contact_honeypot_rejects_automated_submissions(): void
    {
        $this->from('/#request-demo')->post('/contact', [
            'name' => 'Alex Rivera',
            'email' => 'alex@example.test',
            'organization' => 'North Clinic',
            'message' => 'We would like a product tour.',
            'company_website' => 'spam.example',
        ])->assertRedirect('/#request-demo')
            ->assertSessionHasErrors('company_website');
    }
}
