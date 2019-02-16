<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class NoreplyMail extends Mailable
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
        $this->subtitle = "Procor Notifications";

        switch ($this->contactOption) {
            //Estimate, General Question
            case '1':
            case '2':
            default:
                $this->title = "We received your email and are happy to help.";
                break;

            //Feedback
            case '3':
               $this->title = "Thank you for your feedback, we are happy to receive this email. this is the best way that we can know if we are doing a good job.";
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
        return $this->view('emails.noreply_contact')
                    ->text('emails.noreply_contact_plain')
                    ->to($this->contactEmail, $this->contactName)
                    ->subject($this->subtitle);
    }
}
