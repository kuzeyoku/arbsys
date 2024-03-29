<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class WelcomeMail extends Mailable
{
    use Queueable, SerializesModels;

    protected $user;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($user)
    {
        $this->user = $user;
    }

    /**
     * 
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $user = $this->user;
        $this->subject("ARBSYS'e Hoşgeldiniz!");
        $this->from("uyelik@arbsys.com.tr", "ARBSYS");
        return $this->view("email.welcome", compact("user"));
    }
}
