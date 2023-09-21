<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
class ForgottenPassword extends Mailable
{
    use Queueable, SerializesModels;

   /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(private $mailData)
    {
        //
    }

    /**
     * Get the message envelope.
     *
     * @return \Illuminate\Mail\Mailables\Envelope
     */
    public function envelope()
    {
        return new Envelope(
            subject: 'Forgotten Password Request',
            
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
            view: 'Emails.Forgottenpasword',
            with: [
                    'mailData' => $this->mailData,
                    'signature' => view('Emails.emailicon')->render(),      
                ],
            
        );
    }

    // public function from($address, $name = null){
    //     return $this->withSwiftMessage(function ($message) use ($address, $name) {
    //         $message->from($address, 'StreamLode'.new \Illuminate\Support\HtmlString('<img src="https://fonts.gstatic.com/s/e/notoemoji/15.0/1f49c/32.png" alt="Icon" width="20" height="20" style="vertical-align: middle;">'));
    //     });
    // }

    /**
     * Get the attachments for the message.
     *
     * @return array
     */
    public function attachments()
    {
        return [];
    }
}
