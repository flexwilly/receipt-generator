<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Attachment;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class MailExample extends Mailable
{
    use Queueable, SerializesModels;


    public $body;
    public $subject;
    public $pdf;
    /**
     * Create a new message instance.
     */
    public function __construct($body,$subject,$pdf)
    {
        //
        $this->subject = $subject;
        $this->pdf =$pdf;
        $this->body = $body;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: $this->subject,
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'ticket_body',
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [
            Attachment::fromData(fn ()=>$this->pdf->output(), 'Ticket.pdf')->withMime('application/pdf')
        ];
    }
}
