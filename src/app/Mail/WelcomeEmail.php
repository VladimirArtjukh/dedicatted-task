<?php
declare(strict_types=1);

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class WelcomeEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $user;

    public function __construct($user)
    {
        $this->user = $user;
    }

    public function build(): WelcomeEmail
    {
        return $this->subject('Welcome to Our Platform!')
            ->view('emails.welcome')
            ->with([
                'name' => $this->user->name,
            ]);
    }
}

