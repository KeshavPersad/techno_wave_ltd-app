<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DetailsController extends Controller
{
    public function index($id){

        $product_details = Product::findorFail($id);
        $recommendedProducts = $this->recommendedProducts($id);
        $bestSellingProducts = $this->bestSellingProducts();
        // dd($recommendedProducts);

        return view('template0_pages.detailspage', [
            'data' => $product_details,
            'recommendedProducts' => $recommendedProducts,
            'bestSellingProducts' => $bestSellingProducts,
        ]);

    }

    public function recommendedProducts($product_id){

        return DB::select(

            "SELECT*
            FROM products
            WHERE id != $product_id
            AND id IN(

                SELECT DISTINCT product_id FROM order_product WHERE order_id IN(

                    SELECT DISTINCT order_id FROM order_product WHERE product_id = $product_id

                    )

            )
            LIMIT 5"
        );

    }

    public function bestSellingProducts(){

        return DB::table('order_product')
        ->select(DB::raw('*, SUM(order_product_quantity) as quantity_sold'))
        ->join('products', 'order_product.product_id', '=', 'products.id')
        ->groupBy('product_id')
        ->orderByRaw('quantity_sold DESC')
        ->limit(5)
        ->get();

    }



}
