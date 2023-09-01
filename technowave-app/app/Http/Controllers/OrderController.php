<?php

namespace App\Http\Controllers;

use App\Helpers\CheckoutHelper;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller{

    public function index(Request $request){

        $orders = Auth::user()->orders; 
        $user_details = Auth::user();
        $bestSellingProducts = $this->bestSellingProducts();
        $order_details = $this->filterOrder($request);
        return view('custom.order-historypage', [
            
            'orders' => $orders,
            'user_details' => $user_details,
            'bestSellingProducts' => $bestSellingProducts,
            'order_details' => $order_details,
        
        ]);  

    }

    public function thnakyou(){

        $orders = Auth::user()->orders;

        return view('template0_pages.add_on.thankyou', [
            
            'orders' => $orders,
        
        ]);  

    }

    public function show($id){

        $user = Auth::user();
        $order = Order::find($id);

        if(empty($order)){

            return redirect('order-history')->with('status', "No Order Made");

        }

        $order_products = $order->products;
        
        // dd($user_made);

        return view('custom.order-detailspage', [

            'user' => $user,
            'order' => $order,
            'order_products' => $order_products,

        ]);  
    }
    

    public function customerOrders(Request $request){

        $orders = Order::all();
        $user_details = Auth::user();
        $orders = $this->filterOrder($request);

        return view('template0_pages.admin.customer-orders', [
            
            'orders' => $orders,
            'user_details' => $user_details,
        
        ]);  

    }

    public function customerOrderDetails($id){

        $user = Auth::user();
        $order = Order::find($id);
      
        if(empty($order)){

            return redirect('order-history')->with('status', "No Order Made");

        }

        $order_products = $order->products;

        return view('template0_pages.admin.customer-order-details', [

            'user' => $user,
            'order' => $order,
            'order_products' => $order_products,

        ]);  

    }

    public function filterOrder(Request $request){

        $params = $request->query();
        $orders = Order::where('id', '>' , 0);
    
        foreach($params as $key => $value){

            if(empty($value)){
                continue;
            }

            switch($key){

                case 'search':
                    $orders->where('user_id', 'LIKE' , '%' .$value. '%');
                    break;

                case 'sort':
                    //localhost:8000/store?sort=title
                    $keyValues = $this->orderBy($value);
                    $orders->orderBy($keyValues[0], $keyValues[1]);
                    break;

                default:

                    break;

            }
        }

        return $orders->get();
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
