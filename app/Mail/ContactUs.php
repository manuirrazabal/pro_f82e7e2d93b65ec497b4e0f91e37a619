<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ContactUs extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Public Variables
     *
     * @var
     */
    public $title;
    public $subtitle;
    public $contactName;
    public $contactEmail;
    public $contactPhone;
    public $contactMessage;
    public $contactOption;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($info)
    {
        $this->contactName = $info['contactName'];
        $this->contactEmail = $info['contactEmail'];
        $this->contactPhone = $info['contactPhone'];
        $this->contactMessage = $info['contactMessage'];
        $this->contactOption = $info['contactOption'];

        switch ($this->contactOption) {
            //Estimate
            case '1':
                $this->title = "You are receiving this email because of a new possible client filled up the contact form from your website. This is all information that your new client gave us.";
                $this->subtitle = "Procor Notifications - Someone wants an estimate";
                break;

            //General Question
            case '2':
                $this->title = "You are receiving this email because your client is asking a question. Here is their question.";
                $this->subtitle = "Procor Notifications - We have Question";
                break;

            //Feedback
            case '3':
            default:
                $this->title = "You are receiving this email because you have a new feedback.";
                $this->subtitle = "Procor Notifications - You have a new feedfack";
                break;
        }        
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.contact')
                    ->text('emails.contact_plain')
                    ->to(env('MAIL_USERNAME'))
                    ->from($this->contactEmail, $this->contactName)
                    ->subject($this->subtitle);
    }
}
