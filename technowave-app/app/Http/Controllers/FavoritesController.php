<?php

namespace App\Http\Controllers;

use App\Helpers\FavoritesHelper;
use App\Models\Favorite;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class FavoritesController extends Controller
{
    public function index(){

        $favorites_details = Auth::user()->favoriteproducts;
        // dd($favorites_details);

        $favorites = new FavoritesHelper($favorites_details);
        $favorites->calculateTotal();
        $bestSellingProducts = $this->bestSellingProducts();

        return view('template0_pages.favoritespage', [
            
            'favorites_details' => $favorites_details,
            'favorites' => $favorites,
            'bestSellingProducts' => $bestSellingProducts,

        ]);

    }

    public function store(Request $request){

        $product = Favorite::updateOrCreate(
            ['user_id' => Auth::id(), 'product_id' => $request->product_id],
            ['favorites_quantity' => DB::raw('favorites_quantity + ' . $request->favorites_quantity), 'update' => now()]

        );

        return redirect('/favoritespage')->with('message', 'Product Added Successfully');
        
    }
    public function update(Request $request){

        $product = Favorite::find($request->favorites_id);
 
        $product->favorites_quantity = $request->favorites_quantity;
 
        $product->save();

        return redirect('/favoritespage')->with('message', 'Product Updated');
        
    }

    public function destroy(Request $request){

        $product = Favorite::where('id', $request->id)->where('user_id', Auth::id())->delete();      

        return redirect('/favoritespage')->with('message', 'Product Removed Successfully');
        
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
