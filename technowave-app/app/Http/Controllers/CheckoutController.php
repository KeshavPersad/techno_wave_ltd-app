<?php

namespace App\Http\Controllers;

use App\Helpers\CheckoutHelper;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{
    public function index(){

        $cart_details = Auth::user()->products;
        
        $checkout = new CheckoutHelper($cart_details);
        $checkout->calculateTotal();

        return view('template0_pages.checkoutpage', [
            
            'cart_details' => $cart_details,
            'checkout' => $checkout,

        ]);

    }
}
