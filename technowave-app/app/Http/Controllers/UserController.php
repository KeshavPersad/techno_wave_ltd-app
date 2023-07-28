<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller{
    public function index(){

        return view('template0_pages.user.myaccount');

    }

    public function adminAccount(){

        return view('template0_pages.admin.admin-myaccount');

    }
}
