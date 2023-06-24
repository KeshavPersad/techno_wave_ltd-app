<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\AdminDashboardController;
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

Route::get('/', function () {
    return view('welcome');
 });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::view('/homepage', 'template0/homepage');

//Route to Store Page
Route::get('/store', [ProductController::class, 'index']);

Route::view('/cart', 'template0/cart');

Route::view('/checkout', 'template0/checkout');


// //For Customers/Users
// Route::middleware(['auth:sanctum', 'verified'])->group(function(){

//     Route::get('/user/userdasboard', [UserDashboardController::class, 'render']);

// });

// //For Admins
// Route::middleware(['auth:sanctum', 'verified', 'authadmin'])->group(function(){

//     Route::get('/admin/admindasboard', [AdminDashboardController::class, 'render']);

// }); 


