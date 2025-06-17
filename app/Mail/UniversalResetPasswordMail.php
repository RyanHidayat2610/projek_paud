<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class UniversalResetPasswordMail extends Mailable
{
    use Queueable, SerializesModels;

    public $token;
    public $role;

    public function __construct($token, $role)
    {
        $this->token = $token;
        $this->role = $role;
    }

    public function build()
    {
        return $this->subject('Reset Kata Sandi')
                    ->view('emails.reset') // nama view untuk isi email
                    ->with([
                        'token' => $this->token,
                        'role' => $this->role,
                    ]);
    }
}
