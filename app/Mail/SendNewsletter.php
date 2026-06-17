<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Model\Newsletter;

class SendNewsletter extends Mailable
{
    use Queueable, SerializesModels;

    public $newsletter;

    public function __construct(Newsletter $newsletter)
    {
        $this->newsletter = $newsletter;
    }

    public function build()
    {
        return $this->replyTo(
                'lhakpatrekking@gmail.com',
                'Lhakpa Trekking'
            )
            ->subject($this->newsletter->title)
            ->view('emails.Test_mail')
            ->with([
                'title'   => $this->newsletter->title,
                'content' => $this->newsletter->content,
            ]);
    }
}
