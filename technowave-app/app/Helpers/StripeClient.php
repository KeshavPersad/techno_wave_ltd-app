<?php

namespace App\Helpers;
use Exception;

class StripeClient{

    // TODO: Let all stripe objects call this file
    public static function getClient(){

        try {
            return new \Stripe\StripeClient(env('STRIPE_SECRET', false));
        } catch (\Exception $e) {
            echo 'Invalid API key';
            exit;
        }
    }

}