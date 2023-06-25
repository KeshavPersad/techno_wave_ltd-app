<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class DetailsController extends Controller
{
    public function index($id){

        $product_details = Product::findorFail($id);
        // dd($product_details);

        return view('template0_pages.detailspage', [
            'data' => $product_details,
        ]);

    }



}
