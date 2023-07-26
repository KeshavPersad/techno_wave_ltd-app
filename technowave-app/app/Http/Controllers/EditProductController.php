<?php

namespace App\Http\Controllers;

use App\Helpers\CheckoutHelper;
use App\Helpers\EditProductHelper;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class EditProductController extends Controller{

    public function index(){

        $edit_details = Auth::user()->products;
        // dd($edit_details);

        $edit = new EditProductHelper($edit_details);
        $edit->calculateTotal();
        $bestSellingProducts = $this->bestSellingProducts();

        return view('template0_pages.admin.editproduct', [
            'edit_details' => $edit_details,
            'edit' => $edit,
            'bestSellingProducts' => $bestSellingProducts,
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
