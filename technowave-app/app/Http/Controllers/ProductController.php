<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller{

    public function index(){

        $product_details = Product::all();
        // dd($product_details);

        return view('template0.store', [
                        
            'product_details' => $product_details

        ]);

        

    }


}
