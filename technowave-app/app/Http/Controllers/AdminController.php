<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller{
    
    public function index(){

        $user_details = Auth::user();

        return view('template0_pages.admin.dashboard',[

            'user_details' => $user_details,

        ]);

    }
}
