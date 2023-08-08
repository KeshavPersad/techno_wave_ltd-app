<?php

namespace App\Http\Controllers;

use App\Helpers\CheckoutHelper;
use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CartController extends Controller{
    
    public function index(){

        $cart_details = Auth::user()->products;
        // dd($cart_details);

        $cart_count = $cart_details->count();
        //dd($cart_count);

        $user = Auth::user();
        $checkout = new CheckoutHelper($cart_details);
        
        $checkout->calculateTotal();
        $bestSellingProducts = $this->bestSellingProducts();

        return view('template0_pages.cartpage', [
            
            'cart_details' => $cart_details,
            'checkout' => $checkout,
            'bestSellingProducts' => $bestSellingProducts,
            'user' => $user,
            'cart_count' => $cart_count,

        ]);

    }

    public function store(Request $request){

        $product = Cart::updateOrCreate(
            ['user_id' => Auth::id(), 'product_id' => $request->product_id],
            ['cart_quantity' => DB::raw('cart_quantity + ' . $request->cart_quantity), 'update' => now()]

        );

        return redirect()->back()->with('status', "Product Added to Cart");
        
    }

    public function update(Request $request){

        $product = Cart::find($request->cart_id);
 
        $product->cart_quantity = $request->cart_quantity;
 
        $product->save();

        return redirect('/cartpage')->with('status', "Product Updated");
        
    }

    public function destroy(Request $request){

        $product = Cart::where('id', $request->id)
        ->where('user_id', Auth::id())
        ->delete();      

        return redirect('/cartpage')->with('status', "Product Removed Successfully");
        
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
