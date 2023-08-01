<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class DetailsController extends Controller{
    
    public function index($id){

        $product_details = Product::findorFail($id);
        $recommendedProducts = $this->recommendedProducts($id);
        $bestSellingProducts = $this->bestSellingProducts();
        $user = Auth::user();
        $review_details = Review::where('product_id', $id)->get();
        $rating_sum =  Review::where('product_id', $id)->sum('stars_rated');
        $user_review =  Review::where('product_id', $id)->where('user_id', Auth::user())->get();

        
        if($review_details->count() > 0){

            $rating_value = $rating_sum/$review_details->count();

        }
        else{

            $rating_value = 0;

        }
        // dd($user_review);

        return view('template0_pages.detailspage', [
            'data' => $product_details,
            'recommendedProducts' => $recommendedProducts,
            'bestSellingProducts' => $bestSellingProducts,
            'user' => $user,
            'review_details' => $review_details,
            'rating_value' => $rating_value,
            'user_review' => $user_review,
        ]);

        

    }

    public function productDetailsAdmin($id){

        $product_details = Product::findorFail($id);
        $review_details = Review::where('product_id', $id)->get();
        $rating_sum =  Review::where('product_id', $id)->sum('stars_rated');

        // dd($product_details);

        if($review_details->count() > 0){

            $rating_value = $rating_sum/$review_details->count();

        }
        else{

            $rating_value = 0;

        }

        return view('template0_pages.admin.adminproductdetails', [
            'data' => $product_details,
            'review_details' => $review_details,
            'rating_value' => $rating_value,

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
