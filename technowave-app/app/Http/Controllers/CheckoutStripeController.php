<?php

namespace App\Http\Controllers;

use App\Helpers\CheckoutHelper;
use App\Helpers\StripeClient;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckoutStripeController extends Controller
{
    public function __invoke(Request $request)
    {
        // Get user info
        $user = User::find(Auth::id());

        // Get user products in acrt
        $cart = $user->products;

        // Create a checkout object
        $checkout = new CheckoutHelper($cart);
        $checkout->calculateTotal();
        $stripe = StripeClient::getClient();

        $YOUR_DOMAIN = url('');

        header('Content-Type: application/json');

        // Source: https://stripe.com/docs/payments/accept-a-payment

        $checkout_session = $stripe->checkout->sessions->create([
            'line_items' => [[
                'price_data' => [
                    'currency' => 'TTD',
                    'product_data' => [
                        'name' => 'checkout',
                        'description' => 'Stripe checkout process',
                        'images' => ['https://cdn.pixabay.com/photo/2017/01/05/19/10/cart-1956097_960_720.png'],
                    ],
                    'unit_amount' => $checkout->getTotal() * 100,
                ],
                'quantity' => 1,
            ]],
            'mode' => 'payment',
            'success_url' => $YOUR_DOMAIN.'/checkout/success/stripe/{CHECKOUT_SESSION_ID}',
            'cancel_url' => $YOUR_DOMAIN.'/checkout',
        ]);

        header('HTTP/1.1 303 See Other');

        return redirect($checkout_session->url);
    }
}