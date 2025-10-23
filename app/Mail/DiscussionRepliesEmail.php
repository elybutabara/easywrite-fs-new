<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class DiscussionRepliesEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $receiver;

    public $sender;

    public $type;

    public $discussion_url;

    public $discussion_title;

    public $group_url;

    public $group_title;

    public $email_message;

    public function __construct($email_data)
    {
        $this->receiver = $email_data['receiver'];
        $this->sender = $email_data['sender'];
        $this->type = $email_data['type'];
        $this->discussion_url = $email_data['discussion_url'];
        $this->discussion_title = $email_data['discussion_title'];
        $this->group_url = $email_data['group_url'];
        $this->group_title = $email_data['group_title'];
        $this->email_message = $email_data['email_message'];
    }

    public function build()
    {
        return $this->from('post@easywrite.se', 'Easywrite')
            ->subject('Discussion')
            ->view('emails.discussion_replies');
    }
}
