<?php

namespace App\Mail;

use App\Models\ClientOffer;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class AdminMail extends Mailable
{
    use Queueable, SerializesModels;

    protected $offer;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(ClientOffer $offer)
    {
        $this->offer = $offer;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mails.toAdmin', ['offer' => $this->offer]);
    }
}
