<?php

namespace App\Http\Controllers;

use App\Helpers\CheckoutHelper;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller{

    public function index(){

        $orders = Auth::user()->orders;

        return view('custom.order-historypage', [
            
            'orders' => $orders,
        
        ]);  

    }

    public function thnakyou(){

        $orders = Auth::user()->orders;

        return view('template0_pages.add_on.thankyou', [
            
            'orders' => $orders,
        
        ]);  

    }

    public function show($id){

        $user = Auth::user();
        $order = Order::find($id);

        if(empty($order)){

            return redirect('order-history');

        }

        $order_products = $order->products;

        return view('custom.order-detailspage', [

            'user' => $user,
            'order' => $order,
            'order_products' => $order_products,

        ]);  

    }

    
    
}
