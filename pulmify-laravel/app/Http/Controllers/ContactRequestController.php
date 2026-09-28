<?php

namespace App\Http\Controllers;

use App\Mail\DemoRequestMail;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class ContactRequestController extends Controller
{
    public function __invoke(Request $request): RedirectResponse
    {
        $validator = Validator::make($request->all(), [
            'name' => ['required', 'string', 'max:100'],
            'email' => ['required', 'email:rfc', 'max:254'],
            'organization' => ['required', 'string', 'max:120'],
            'message' => ['required', 'string', 'max:1000'],
            'company_website' => ['nullable', 'prohibited'],
        ]);

        if ($validator->fails()) {
            return back()
                ->withErrors($validator)
                ->with('contact_error', 'Please review the highlighted fields and try again.');
        }

        $smtpHost = (string) config('mail.mailers.smtp.host');
        $contactAddress = (string) config('services.pulmify.contact_email');

        if (
            config('mail.default') !== 'smtp'
            || $smtpHost === ''
            || $smtpHost === 'smtp.example.com'
            || ! filter_var($contactAddress, FILTER_VALIDATE_EMAIL)
        ) {
            return back()->with(
                'contact_error',
                'The contact form is not connected to an email service yet. Please configure SMTP in the Laravel .env file.',
            );
        }

        $data = $validator->validated();

        Mail::to($contactAddress)->send(new DemoRequestMail(
            name: $data['name'],
            email: $data['email'],
            organization: $data['organization'],
            message: $data['message'],
        ));

        return back()->with('contact_success', 'Your request was sent. Our team will follow up soon.');
    }
}
