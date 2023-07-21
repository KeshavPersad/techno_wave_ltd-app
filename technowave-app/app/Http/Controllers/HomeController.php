<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

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
        // dd($product_details);


        return view('template0_pages.homepage', [
                        
            'product_details' => $product_details, 
        
        ]);

    }

    public function randomProducts(){

        return true;

    }

    public function recentProducts(){

        return true;

    }

    public function bestSellingProducts(){

        return true;

    }

}
