<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReviewController extends Controller{
 
    public function addReview(Request $request){

        $starts_rated = $request->input('starts_rated');
        $user_id = $request->input('user_id');
        $product_id = $request->input('product_id');
        $product_title = $request->input('product_title');
        $product_image1 = $request->input('product_image1');
        $user_first_name = $request->input('user_first_name');
        $user_last_name = $request->input('user_last_name');
        $user_phone_number = $request->input('user_phone_number');
        $user_email = $request->input('user_email');
        $user_review = $request->input('user_review');

        $product_check = Product::where('id', $product_id)->where('product_status', '1')->first();
        if($product_check){

            $verified_purchase = Order::where('orders.user_id', Auth::id())
            ->join('order_product', 'orders.id', 'order_product.order_id')
            ->where('order_product.product_id', $product_id )->get();

            if($verified_purchase){

                $existing_review = Review::where('user_id', Auth::id())->where('product_id', $product_id)->exists();

                if($existing_review){

                    $existing_review->starts_rated =$starts_rated;
                    $existing_review->user_review =$user_review;
                    $existing_review->update();

                }
                else{

                        Review::create([
                            'user_id' =>Auth::id(),
                            'product_id' => $product_id ,
                            'product_title'=> $product_title,
                            'product_image1'=> $product_image1,
                            'user_first_name'=> $user_first_name,
                            'user_last_name'=> $user_last_name,
                            'user_phone_number'=> $user_phone_number,
                            'user_email'=> $user_email,
                            'starts_rated'=> $starts_rated,
                            'user_review'=> $user_review,
        
                        ]);
                }

                return redirect()->back()->with('status', "Thank you for you Review");

            }
            else{

                return redirect()->back()->with('status', "You cannot Review A Product before Purchasing");

            }
        }
        else{

            return redirect()->back()->with('status', "Product Not Found");
        }

    }


}
