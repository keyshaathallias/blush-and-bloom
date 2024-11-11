<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class EmailPromotion extends Mailable
{
    use Queueable, SerializesModels;

    public $customer;
    public $emailContent;

    public function __construct($customer, $emailContent)
    {
        $this->customer = $customer;
        $this->emailContent = $emailContent;
    }

    public function build()
    {
        return $this->subject($this->emailContent->subject)
                    ->with([
                        'subject'    => $this->emailContent->subject,
                        'body'       => $this->emailContent->body,
                        'first_name' => $this->customer->first_name,
                        'last_name'  => $this->customer->last_name])
                    ->view('emails.promotion');
    }

}
