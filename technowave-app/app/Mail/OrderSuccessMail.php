<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class OrderSuccessMail extends Mailable{

    use Queueable, SerializesModels;


    public function __construct( 

        protected $name, 
        protected $messagebody,
        protected $greetings,
        protected $user_products,
        ){

    }

    public function envelope(): Envelope{

        return new Envelope(

            subject: 'Order Success Mail',
            from: new Address('techno_wave.sales@mail.com', 'Techno Wave'),

        );

    }

    public function content(){

        return new Content(

            view: 'mail.order-success-mail',
            text: 'mail.order-success-mail-text',
            with: [

                'name' => $this->name,
                'messagebody' => $this->messagebody,
                'greetings' => $this->greetings,
                'user_products' => $this->user_products,

            ]

        );

    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */

    public function attachments(): array{

        return [];
        
    }

}
