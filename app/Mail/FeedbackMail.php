<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\Settings\SettingModel;

class FeedbackMail extends Mailable
{
    use Queueable, SerializesModels;

    public $booking;
    public $feedbackUrl;
    public $settings;

    /**
     * Create a new message instance.
     */
    public function __construct($booking)
    {
        $this->booking = $booking;
        $this->feedbackUrl = route('feedback');
        $this->settings = SettingModel::where('id', 1)->first();
    }

    /**
     * Build the message.
     */
    public function build()
    {
        return $this->view('emails.feedback-mail')
            ->with([
                'booking' => $this->booking,
                'feedbackUrl' => $this->feedbackUrl,
                'settings' => $this->settings,
            ])
            ->replyTo('lhakpatrekking@gmail.com')
            ->subject('Thank You for Trekking With Us – We’d Love Your Feedback');
    }
}
