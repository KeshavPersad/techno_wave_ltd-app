<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminProductDetailsController;
use App\Http\Controllers\AllProductController;
use App\Http\Controllers\AllProductListController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\CheckoutStripeController;
use App\Http\Controllers\CheckoutSuccessController;
use App\Http\Controllers\DetailsController;
use App\Http\Controllers\EditProductController;
use App\Http\Controllers\FavoritesController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductListController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserDashboardController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

    Auth::routes([
        
        'verify' =>true,

    ]);

    // When using a route just call the name which is shown in name tab 
    // Example: "->name('register')"
    // So to call this route use {{route ('register')}}


    //Route for Register Page
    Route::view('/register', 'auth/register')->name('register');

    //Route for Login Page
    Route::view('/login', 'auth/login')->name('login');

    // Auth For Customers/Users
    Route::middleware(['auth:sanctum', 'verified'])->group(function(){

        Route::get('/myaccount', [UserController::class, 'index'])->name('myaccount');

    });



    //Route for Home Page (Main Page)
    Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::get('/homepage', [HomeController::class, 'index'])->name('home');
    Route::get('/technowave', [HomeController::class, 'index'])->name('home');
    Route::get('/techno-wave', [HomeController::class, 'index'])->name('home');

    //Route for Store Page
    Route::get('/storepage', [ProductController::class, 'index'])->name('store');
    Route::get('/shop', [ProductController::class, 'index'])->name('store');
    Route::get('/listpage', [ProductListController::class, 'index'])->name('store.list');

    //Route for Details Page
    Route::get('/detailspage/{id}', [DetailsController::class, 'index'])->name('store.details');

    //Route for Auth Middleware
    Route::middleware(['auth', 'verified'])->group(function(){

        // Admin Routes

        //Route For Admin Dashboard
        Route::get('/dasboard', [AdminController::class, 'index'])->name('dashboard');
        Route::view('/admin-myaccount', 'template0_pages/admin/admin-myaccount')->name('admin-myaccount');

        Route::get('/allproducts', [AllProductController::class, 'index'])->name('allproducts');
        Route::get('/allproductslist', [AllProductListController::class, 'index'])->name('allproductslist');

        Route::get('/productdetails/{id}', [AdminProductDetailsController::class, 'index'])->name('adminproduct.details');
        
        //Route for Edit Product
        Route::get('/editproduct', [EditProductController::class, 'index'])->name('edit.product');



        // User Routes

        //Route for View Favorites
        Route::get('/favoritespage', [FavoritesController::class, 'index'])->name('favorites');
       
        //Route for Add item to Favorites
        Route::put('/favoritespage', [FavoritesController::class, 'store'])->name('favorites.store');

        //Route for Update Favorites
        Route::put('/favoritespage/{id}', [FavoritesController::class, 'update'])->name('favorites.update');
         
        //Route for Remove Product from Favorites
        Route::delete('/favoritespage/{id}', [FavoritesController::class, 'destroy'])->name('favorites.destroy');


        //Route for View Cart
        Route::get('/cartpage', [CartController::class, 'index'])->name('cart');

        //Route for Add item to Cart
        Route::put('/cartpage', [CartController::class, 'store'])->name('cart.store');

        //Route for Update Cart
        Route::put('/cartpage/{id}', [CartController::class, 'update'])->name('cart.update');

        //Route for Remove Product from Cart
        Route::delete('/cartpage/{id}', [CartController::class, 'destroy'])->name('cart.destroy');


        //Route for Checkout Page
        Route::get('/checkoutpage', [CheckoutController::class, 'index'])->name('checkout');

        //Route for Checkout Success Page
        Route::get('/checkoutpage/success/{payment}/{id}', CheckoutSuccessController::class)->name('checkout.success');

        //Route for Checkout Stripe Page
        Route::post('/checkoutpage/stripe', CheckoutStripeController::class)->name('checkout.stripe');


        //Route for Payment Successful Page
        Route::view('/paymentsuccesspage', 'template0_pages/paymentsuccesspage')->name('payment.success');


        //Route for Order Deatils Page
        Route::get('/order-historypage', [OrderController::class, 'index'])->name('orders');

        //Route for Order Deatils Page
        Route::get('/order-historypage/{id}', [OrderController::class, 'show'])->name('orders.show');


        //Route for Thank You Page
        Route::get('/thankyou', [OrderController::class, 'thnakyou'])->name('thankyou');

        //Route for Mail
        // Route::get('/mail-testing', [MailController::class, 'index'])->name('mail');
        
    });

    
    //Route for Contact Us Page
    Route::view('/contactuspage', 'template0_pages/add_on/contactuspage')->name('contactus');

    //Route for About Us Page
    Route::view('/aboutuspage', 'template0_pages/add_on/aboutuspage')->name('aboutus');

    //Route for Privacy Policy Page
    Route::view('/privacy-policy', 'template0_pages/add_on/privacy-policy')->name('privacy-policy');

    //Route for Terms & Conditions Page
    Route::view('/terms-conditions', 'template0_pages/add_on/terms-conditions')->name('terms-conditions');

    //Route for Return Policy Page
    Route::view('/return-policy', 'template0_pages/add_on/return-policy')->name('return-policy');



 


