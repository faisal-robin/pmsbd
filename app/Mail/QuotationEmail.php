<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class QuotationEmail extends Mailable
{

    public $data;
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {

        return $this->from($this->data->email, $this->data->last_name)
        ->subject('Quotation Request')
        ->markdown('front.email.quotation_email')
        ->with([
            'data' => $this->data,
        ]);
    }
}
