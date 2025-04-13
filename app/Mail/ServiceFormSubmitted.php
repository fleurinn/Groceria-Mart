<?php

namespace App\Mail;

use App\Models\Service;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ServiceFormSubmitted extends Mailable
{
    use Queueable, SerializesModels;

    public Service $service;
    public ?string $replyMessage;

    /**
     * Create a new message instance.
     */
    public function __construct(Service $service, string $replyMessage = null)
    {
        $this->service = $service;
        $this->replyMessage = $replyMessage;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: $this->replyMessage
                ? 'Balasan untuk Layanan Anda'
                : 'Layanan Baru Telah Diterima'
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'admin.pages.services.service-submitted',
            with: [
                'service' => $this->service,
                'replyMessage' => $this->replyMessage
            ],
        );
    }

    /**
     * Get the attachments for the message.
     */
    public function attachments(): array
    {
        return [];
    }
}
