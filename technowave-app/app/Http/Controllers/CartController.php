<?php

namespace App\Http\Controllers;

use App\Helpers\CheckoutHelper;
use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CartController extends Controller
{
    public function index(){

        $cart_details = Auth::user()->products;
        // dd($cart_details);
        
        $checkout = new CheckoutHelper($cart_details);
        $checkout->calculateTotal();

        return view('template0_pages.cartpage', [
            
            'cart_details' => $cart_details,
            'checkout' => $checkout,

        ]);

    }


    public function store(Request $request){

        $product = Cart::updateOrCreate(
            ['user_id' => Auth::id(), 'product_id' => $request->product_id],
            ['cart_quantity' => DB::raw('cart_quantity + ' . $request->cart_quantity), 'update' => now()]

        );

        return redirect('/cartpage')->with('message', 'Product Updated');
        
    }

    public function update(Request $request){

        $product = Cart::find($request->cart_id);
 
        $product->cart_quantity = $request->cart_quantity;
 
        $product->save();

        return redirect('/cartpage')->with('message', 'Product');
        
    }

    public function destroy(Request $request){

        $product = Cart::where('id', $request->id)->where('user_id', Auth::id())->delete();      

        return redirect('/cartpage')->with('message', 'Product Deleted');
        
    }


}
