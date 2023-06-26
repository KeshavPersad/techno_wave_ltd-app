<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\DetailsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserDashboardController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

    Auth::routes();

    // When using a route just call the name which is shown in name tab 
    // Example: "->name('register')"
    // So to call this route use {{route ('register')}}

    //Route for Laravel Home Page
    Route::get('/home', [HomeController::class, 'index'])->name('home');

    //Route for Register Page
    Route::view('/register', 'auth/register')->name('register');

    //Route for Login Page
    Route::view('/login', 'auth/login')->name('login');

    //Route for Home Page (Main Page)
    Route::view('/', 'template0_pages/homepage')->name('home');

    //Route for Store Page
    Route::get('/storepage', [ProductController::class, 'index'])->name('store');

    //Route for Details Page
    Route::get('/detailspage/{id}', [DetailsController::class, 'index'])->name('store.details');

    //Route for Cart Page
    Route::middleware(['auth'])->group(function(){

        //Route for View Cart
        Route::get('/cartpage', [CartController::class, 'index'])->name('cart');

        //Route for Add item to Cart
        Route::put('/cartpage', [CartController::class, 'store'])->name('cart.store');

        //Route for Update Cart
        Route::put('/cartpage/{id}', [CartController::class, 'update'])->name('cart.update');

        //Route for Remove Product from Cart
        Route::delete('/cartpage/{id}', [CartController::class, 'destroy'])->name('cart.destroy');

    });

    //Route for Checkout Page
    Route::view('/checkoutpage', 'template0_pages/checkoutpage')->name('checkout');

    //Route for Contact Us Page
    Route::view('/contactuspage', 'template0_pages/contactuspage')->name('contactus');

    //Route for About Us Page
    Route::view('/aboutuspage', 'template0_pages/aboutuspage')->name('aboutus');

    //Route for Favorites Page
    Route::view('/favoritespage', 'template0_pages/favoritespage')->name('favorites');

      //Route for User Dashboard Page
      Route::view('/userdashborad', 'template0_pages/user/userdashboard')->name('userdashboard');




    // //For Customers/Users
    // Route::middleware(['auth:sanctum', 'verified'])->group(function(){

    //     Route::get('/user/userdasboard', [UserDashboardController::class, 'render']);

    // });

    // //For Admins
    // Route::middleware(['auth:sanctum', 'verified', 'authadmin'])->group(function(){

    //     Route::get('/admin/admindasboard', [AdminDashboardController::class, 'render']);

    // }); 


