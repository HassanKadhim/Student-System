<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendPassword extends Mailable
{
    use Queueable, SerializesModels;

    public $title;
    public $password;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct( $password , $title = 'Student System')
    {
        $this->password = $password;
        $this->title = $title;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('Email.sendPassword')->subject($this->title)->with(['password' => $this->password]);
    }
}
