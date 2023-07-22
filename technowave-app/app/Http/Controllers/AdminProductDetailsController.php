<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class AdminProductDetailsController extends Controller
{
    public function index($id){

        $product_details = Product::findorFail($id);

        // dd($recommendedProducts);

        return view('template0_pages.admin.adminproductdetails', [
            'data' => $product_details,

        ]);

    }
}
