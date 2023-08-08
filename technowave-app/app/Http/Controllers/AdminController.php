<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller{
    
    public function index(){

        $user_details = Auth::user();
        $order_details = Order::all();

        return view('template0_pages.admin.dashboard',[

            'user_details' => $user_details,
            'order_details' => $order_details,

        ]);

    }

}
