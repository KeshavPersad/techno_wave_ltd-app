<?php

namespace App\Helpers;

use Exception;

// use Exception;

class StripeHelper{
    
    private $stripe;

    public function __construct(){

        try{
            
            $this->stripe = StripeClient::getClient();

        }

        catch (\Throwable $th){

            echo 'Invalid API key';
            exit;

        }

    }

    public function getCheckoutOrder($id){

        return $this->stripe->checkout->sessions->retrieve(

            $id,
            []

        );

    }

    public function isCheckoutCompleted($checkout_session){

        return $checkout_session->status = 'complete' && $checkout_session->payment_status ='paid';

    }

    public function getPaymentDetails($checkout_session){

        return [

            'subtotal' => $checkout_session->amount_subtotal / 100,
            'total' => $checkout_session->amount_total / 100,
            'payment' => 'stripe',
            'payment_id' => $checkout_session->id,

        ];

    }
    
}