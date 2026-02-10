<?php

namespace ShvetsGroup\LaravelEmailDatabaseLog\Tests\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Attachment;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class TestMailWithAttachment extends Mailable
{
    use Queueable, SerializesModels;

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'The e-mail subject',
        );
    }

    public function content(): Content
    {
        return new Content(
            htmlString: '<p>Some random string.</p>',
        );
    }

    public function attachments(): array
    {
        return [
            Attachment::fromPath(__DIR__ . '/../stubs/demo.txt'),
        ];
    }
}
