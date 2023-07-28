<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminProductDetailsController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoryController;
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
use Haruncpi\LaravelIdGenerator\IdGenerator;

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

//     // Auth For Customers/Users
//     Route::middleware(['auth:sanctum', 'verified'])->group(function(){

//         Route::get('/myaccount', [UserController::class, 'index'])->name('myaccount');

//     });


 //........................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................
    //Route for Home Page (Main Page)
    Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::get('/homepage', [HomeController::class, 'index'])->name('home');
    Route::get('/technowave', [HomeController::class, 'index'])->name('home');
    Route::get('/techno-wave', [HomeController::class, 'index'])->name('home');

 //........................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................
    //Route for Store Page
    Route::get('/storepage', [ProductController::class, 'index'])->name('store');
    Route::get('/shop', [ProductController::class, 'index'])->name('store');
    Route::get('/listpage', [ProductController::class, 'storeProductList'])->name('store.list');


 //........................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................
    //Route for Details Page
    Route::get('/detailspage/{id}', [DetailsController::class, 'index'])->name('store.details');

       // //Route for Details Page
       // Route::get('/category/{category_title}', [CategoryController::class, 'viewCategory'])->name('view.category');

       
    //Route for Admin Auth Middleware
    Route::middleware(['auth', 'verified'])->group(function(){

        // Admin Routes

        //Route For Admin Dashboard
       Route::get('/dasboard', [AdminController::class, 'index'])->name('dashboard');
       Route::view('/admin-myaccount', 'template0_pages/admin/admin-myaccount')->name('admin-myaccount');

        //Route for Admin Account
       Route::get('/adminAccount', [UserController::class, 'adminAccount'])->name('admin.account');

 //........................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................
        //Route for View All Products
        Route::get('/allproducts', [ProductController::class, 'allProductAdmin'])->name('allproducts');
        Route::get('/allproductslist', [ProductController::class, 'allProductListAdmin'])->name('allproductslist');

        // Route for View Product Details
        Route::get('/productdetails/{id}', [ProductController::class, 'productDetailsAdmin'])->name('adminproduct.details');
        
        //Route for View Add Product Page
        Route::get('/addproduct', [ProductController::class, 'addProduct'])->name('add.product');

        //Route for Add Product
        Route::post('/insertproduct', [ProductController::class, 'insertProduct'])->name('insert.product');

        //Route for Delete Product
        Route::delete('/products/{id}', [ProductController::class, 'deleteProduct'])->name('delete.product');
    
        //Route for View Edit Product Page
        Route::get('/editProduct/{id}', [ProductController::class, 'editProduct'])->name('edit.product');
        
        //Route for Edit/Update Product
        Route::get('/updateProduct/{id}', [ProductController::class, 'updateProduct'])->name('update.product');


 //........................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................
        //Route for View Categories
        Route::get('/categories', [CategoryController::class, 'index'])->name('categories');

        //Route for View Add Category Page
        Route::get('/addcategory', [CategoryController::class, 'addCategory'])->name('add.category');

        //Route for Add Category
        Route::post('/insertcategory', [CategoryController::class, 'insertCategory'])->name('insert.category');

        //Route for Delete Category
        Route::delete('/categories/{id}', [CategoryController::class, 'deleteCategory'])->name('delete.category');
    
        //Route for View Edit Category Page
        Route::get('/editCategory/{id}', [CategoryController::class, 'editCategory'])->name('edit.category');
        
        //Route for Edit/Update Category
        Route::get('/updateCategory/{id}', [CategoryController::class, 'updateCategory'])->name('update.category');

 //........................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................
        //Route for View Brands
        Route::get('/brands', [BrandController::class, 'index'])->name('brands');

        //Route for View Add Brand Page
        Route::get('/addbrand', [BrandController::class, 'addBrand'])->name('add.brand');
        
        //Route for Add Brand
        Route::post('/insertbrand', [BrandController::class, 'insertBrand'])->name('insert.brand');
        
        //Route for Delete Brand
        Route::delete('/brands/{id}', [BrandController::class, 'deleteBrand'])->name('delete.brand');
            
        //Route for View Edit Brand Page
        Route::get('/editBrand/{id}', [BrandController::class, 'editBrand'])->name('edit.brand');
                
        //Route for Edit/Update Brand
        Route::get('/updateBrand/{id}', [BrandController::class, 'updateBrand'])->name('update.brand');


        // Admin Routes End
//........................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................
    });







    //Route for User Auth Middleware
    Route::middleware(['auth', 'verified'])->group(function(){
                   
        // User Routes

        //Route for My Account
        Route::get('/myaccount', [UserController::class, 'index'])->name('myaccount');

//........................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................
        //Route for View Favorites
        Route::get('/favoritespage', [FavoritesController::class, 'index'])->name('favorites');
       
        //Route for Add item to Favorites
        Route::put('/favoritespage', [FavoritesController::class, 'store'])->name('favorites.store');

        //Route for Update Favorites
        Route::put('/favoritespage/{id}', [FavoritesController::class, 'update'])->name('favorites.update');
         
        //Route for Remove Product from Favorites
        Route::delete('/favoritespage/{id}', [FavoritesController::class, 'destroy'])->name('favorites.destroy');


 //........................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................
        //Route for View Cart
        Route::get('/cartpage', [CartController::class, 'index'])->name('cart');

        //Route for Add item to Cart
        Route::put('/cartpage', [CartController::class, 'store'])->name('cart.store');

        //Route for Update Cart
        Route::put('/cartpage/{id}', [CartController::class, 'update'])->name('cart.update');

        //Route for Remove Product from Cart
        Route::delete('/cartpage/{id}', [CartController::class, 'destroy'])->name('cart.destroy');


//........................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................
        //Route for Checkout Page
        Route::get('/checkoutpage', [CheckoutController::class, 'index'])->name('checkout');

        //Route for Checkout Success Page
        Route::get('/checkoutpage/success/{payment}/{id}', CheckoutSuccessController::class)->name('checkout.success');

        //Route for Checkout Stripe Page
        Route::post('/checkoutpage/stripe', CheckoutStripeController::class)->name('checkout.stripe');


        //Route for Payment Successful Page
        Route::view('/paymentsuccesspage', 'template0_pages/paymentsuccesspage')->name('payment.success');


 //........................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................
        //Route for Order Deatils Page
        Route::get('/order-historypage', [OrderController::class, 'index'])->name('orders');

        //Route for Order Deatils Page
        Route::get('/order-historypage/{id}', [OrderController::class, 'show'])->name('orders.show');


 //........................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................
        //Route for Thank You Page
        Route::get('/thankyou', [OrderController::class, 'thnakyou'])->name('thankyou');

        //Route for Mail
        // Route::get('/mail-testing', [MailController::class, 'index'])->name('mail');

        
    });

 //........................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................
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



 


