<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class UserRegistered extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $user;
    public function __construct($user)
    {
        $this->user = $user;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        if (!empty(env("MAIL_CC", ""))) {
            $this->cc(env("MAIL_CC", ""));
        }
        if (!empty(env("MAIL_BCC", ""))) {
            $this->bcc(explode(",", env("MAIL_BCC", "")));
        }
        return $this->from('admin@infomasjid.com')
            ->subject("InfoMasjid - User Registered")
            ->view('emails.user_registered');
    }
}
