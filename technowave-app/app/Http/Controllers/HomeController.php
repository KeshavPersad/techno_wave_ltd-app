<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(){

        //$this->middleware('auth');

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request){

        $product_details = Product::all();
        $random = $this->randomProducts();
        $recent = $this->recentProducts();
        $bestSellingProducts = $this->bestSellingProducts();
        //dd($best_selling_products);


        return view('template0_pages.homepage', [
                        
            'product_details' => $product_details, 
            'random' => $random,
            'recent' => $recent,
            'bestSellingProducts' => $bestSellingProducts,
        
        ]);

    }

    public function randomProducts(){

        return DB::table('products')->inRandomOrder()->limit(10)->get();

    }

    public function recentProducts(){

        return DB::table('products')->orderBy('created_at', 'desc')->limit(10)->get();

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
