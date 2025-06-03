<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use LaravelLang\Publisher\Console\Add;
use Illuminate\Mail\Mailables\Address;

class PostCreateMail extends Mailable
{
    use Queueable, SerializesModels;
    public $post; // Property to hold the post data
    /**
     * Create a new message instance.
     */
    public function __construct($post)
    {
        $this->post = $post; // Assign the post data to the property
    }

    /**
     * Get the message envelope. ASUNTO
     */
    public function envelope(): Envelope 
    {
        return new Envelope(
            from: new Address('admin@skibidy.com','Skibidy Admin'), // Sender's email and name
            subject: 'Post waiting for approval and publication', // Subject of the email
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'emails.post-create', // Assuming you have a view for the email
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
