<?php

namespace App\Mail;

use App\Models\Reservation;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class EmailReservation extends Mailable
{
    use Queueable, SerializesModels;

    public $reservation;
    public $statusMessage;
    public $greetingMessage;

    public function __construct(Reservation $reservation, $statusMessage, $greetingMessage)
    {
        $this->reservation     = $reservation;
        $this->statusMessage   = $statusMessage;
        $this->greetingMessage = $greetingMessage;
    }

    public function build()
    {
        return $this->subject('Reservation Status Update')
                    ->view('emails.emailReservation');
    }
}
