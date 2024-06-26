<?php

namespace App\Http\Controllers;

use App\Helpers\CheckoutHelper;
use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CheckoutController extends Controller{
    
    public function index(Request $request){

        $cart_details = Auth::user()->products;
        $user = Auth::user();
        
        //  dd($cart_details);
        $checkout = new CheckoutHelper($cart_details);
        $checkout->calculateTotal();
        $bestSellingProducts = $this->bestSellingProducts();

        return view('template0_pages.checkoutpage', [
            
            'cart_details' => $cart_details,
            'checkout' => $checkout,
            'bestSellingProducts' => $bestSellingProducts,
            'user' => $user,

        ]);

    }

    public function bestSellingProducts(){

        return DB::table('order_product')
        ->select(DB::raw('*, SUM(order_product_quantity) as quantity_sold'))
        ->join('products', 'order_product.product_id', '=', 'products.id')
        ->groupBy('product_id')
        ->orderByRaw('quantity_sold DESC')
        ->limit(10)
        ->get();

    }
}
