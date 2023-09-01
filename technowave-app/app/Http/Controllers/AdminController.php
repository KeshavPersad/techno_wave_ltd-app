<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Order;
use App\Models\Order_product;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller{
    
    public function index(){

        $user_details = Auth::user();
        $total_sales = Order_product::count();
        $categories = Category::count();
        $brands = Brand::count();
        $products = Product::count();
        $total_revenue =  Order::sum('total');


        return view('template0_pages.admin.dashboard',[

            'user_details' => $user_details,
            'total_sales' => $total_sales,
            'total_revenue' => $total_revenue,
            'categories' => $categories,
            'brands' => $brands,
            'products' => $products,

        ]);

    }
    public function salesStatistics(){

        $user_details = Auth::user();
        $total_sales = Order_product::count();
        $total_revenue =  Order::sum('total');


        return view('template0_pages.admin.sales_statistics',[

            'user_details' => $user_details,
            'total_sales' => $total_sales,
            'total_revenue' => $total_revenue,

        ]);

    }

 
    

}
