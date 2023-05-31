<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class MonEmailMailable extends Mailable
{
    use Queueable, SerializesModels;


    public $sujet;
    public $contenu;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($sujet, $contenu)
    {
        $this->sujet = $sujet;
        $this->contenu = $contenu;
    }

    /**
     * Get the message envelope.
     *
     * @return \Illuminate\Mail\Mailables\Envelope
     */
    public function envelope()
    {
        return new Envelope(
            subject: 'Mon Email Mailable',
        );
    }

    /**
     * Get the message content definition.
     *
     * @return \Illuminate\Mail\Mailables\Content
     */
    public function content()
    {
        return new Content(
            view: 'emails_template',
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array
     */
    public function attachments()
    {
        return [];
    }

    public function build()
    {
        return $this->subject($this->sujet)
                    ->view('emails.mon_email_template')
                    ->with([
                        'contenu' => $this->contenu,
                    ]);
    }
}
