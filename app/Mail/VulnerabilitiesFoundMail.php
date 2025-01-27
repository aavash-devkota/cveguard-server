<?php

namespace App\Mail;

use App\Models\Project;
use App\Models\Scan;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class VulnerabilitiesFoundMail extends Mailable
{
    use Queueable, SerializesModels;

    public function __construct(
        public Project $project,
        public Scan $scan,
    ) {}

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Vulnerabilities Found',
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'emails.vulnerabilities-found',
        );
    }

    public function attachments(): array
    {
        return [];
    }
}
