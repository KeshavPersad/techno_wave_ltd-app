<?php

namespace App\Http\Controllers;

use App\Helpers\CheckoutHelper;
use App\Helpers\StripeHelper;
use App\Mail\OrderSuccessMail;
use App\Models\Order;
use App\Models\Order_product;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class CheckoutSuccessController extends Controller
{

    public function __invoke(Request $request, $payment, $id){

        // Get User
        $user = Auth::user();

        // Get products in cart
        $user_products = $user->products;
        $checkout = new CheckoutHelper($user_products);

        // Check if cart if empty
        if ($checkout->isEmpty()){

            echo "Cart is Empty";
            exit;
        }

        // calculate subtotal
        $checkout->calculateTotal();

        // determine payment used
        switch ($payment) {
            case 'debug':

                $data = [
                    
                    'subtotal' => $checkout->getSubtotal(),
                    'total' => $checkout->getTotal(),
                    'payment' => 'none',
                    'payment_id' => 'none'

                ];

                $completed = true;

            break;


            case 'stripe':

                $payment_object = new StripeHelper;
                $checkout_order = $payment_object->getCheckoutOrder($id);

                // dd($checkout_order);

                $completed = $payment_object->isCheckoutCompleted($checkout_order);
                $data = $payment_object->getPaymentDetails($checkout_order);
                $completed = true;

            break;
            
            default:
                
            break;
        }

        // check if payment was completed
        if (empty($completed) || empty($data)){

            echo 'Payment Process not Completed';
            exit;

        }

        // merge all data
        $data["user_id"] = Auth::id();
        $data["user_lot_number"] = User::where('id', Auth::user())->get('user_lot_number');
        $data["user_street"] = User::where('id', Auth::user())->get('user_street');
        $data["user_city"] = User::where('id', Auth::user())->get('user_city');

        // Insert order
        $order = Order::create([

            'user_id' => $data['user_id'],
            'subtotal' => $data['subtotal'],
            'total' => $data['total'],
            'payment' => $data['payment'],
            'payment_id' => $data['payment_id'],
            'user_lot_number' => $data['user_lot_number'],
            'user_street' => $data['user_street'],
            'user_city' => $data['user_city'],

        ]);

        //dd($order);

        // Create array containing order_product models
        $order_id = $order->order_id;
        $records = [];
        $user_products->each(function($data) use (&$records, $order_id){

            array_push(

                $records,
                new order_product([

                    'product_id' => $data->id,
                    'order_product_price' => $data->product_price,
                    'order_product_quantity' => $data->pivot->cart_quantity, 

                ])

            );

        });

        // insert all records for order_products
        $order->order_product()->saveMany($records);

        // Remove all user cart products
        $user->products()->detach();


        $name = $user->name;
        $messagebody = 'Thank You For Your Order!';
        $greetings = 'Hello, ';

        Mail::to(Auth::user())->send(new OrderSuccessMail($name, $messagebody, $greetings, $user_products));

    }



}
