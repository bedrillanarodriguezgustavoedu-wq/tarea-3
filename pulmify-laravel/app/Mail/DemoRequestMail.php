<?php

namespace App\Mail;

use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;

class DemoRequestMail extends Mailable
{
    public function __construct(
        public readonly string $name,
        public readonly string $email,
        public readonly string $organization,
        public readonly string $message,
    ) {}

    public function envelope(): Envelope
    {
        return new Envelope(
            replyTo: [new Address($this->email, $this->name)],
            subject: 'Pulmify demo request',
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'emails.demo-request',
        );
    }
}
