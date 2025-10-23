<?php

namespace App\Mail;

use App\User;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class RegistrationEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $actionText;

    public $actionUrl;

    public $user;

    public function __construct(User $user)
    {
        $this->user = $user;
        $this->actionText = 'Se Alle Kurs';
        $this->actionUrl = 'http://www.easywrite.se/course';
    }

    public function build()
    {
        return $this->from('post@easywrite.se', 'Easywrite')
            ->subject('Welcome to Easywrite')
            ->view('emails.registration');
    }
}
