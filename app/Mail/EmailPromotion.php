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

    public function __construct($customer) {
        $this->customer = $customer;
    }

    public function build()
    {
        return $this->subject('Exclusive Promotion for You!')
                    ->view('emails.promotion')
                    ->with([
                        'firstName' => $this->customer->first_name,
                        'lastName'  => $this->customer->last_name,
                    ]);
    }

}
