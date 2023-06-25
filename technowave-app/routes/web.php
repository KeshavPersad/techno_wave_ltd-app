<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\DetailsController;
use App\Http\Controllers\UserDashboardController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Auth::routes();

//Route for Laravel Home Page
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Route for Home Page (Main Page)
Route::view('/', 'template0_pages/homepage');

//Route for Store Page
Route::get('/storepage', [ProductController::class, 'index']);

//Route for Details Page
Route::get('/detailspage/{id}', [DetailsController::class, 'index'])->name('store.details');

//Route for Cart Page
Route::view('/cartpage', 'template0_pages/cartpage');

//Route for Checkout Page
Route::view('/checkoutpage', 'template0_pages/checkoutpage');





// //For Customers/Users
// Route::middleware(['auth:sanctum', 'verified'])->group(function(){

//     Route::get('/user/userdasboard', [UserDashboardController::class, 'render']);

// });

// //For Admins
// Route::middleware(['auth:sanctum', 'verified', 'authadmin'])->group(function(){

//     Route::get('/admin/admindasboard', [AdminDashboardController::class, 'render']);

// }); 


