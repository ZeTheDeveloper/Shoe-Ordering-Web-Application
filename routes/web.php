<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\OrderController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('home', [ProductController::class, 'homeCarousel']);

Auth::routes();
Route::get('/register/customerRegisForm', [RegisterController::class, 'showCustomerRegisterForm']);
Route::post('/register/customer', [RegisterController::class, 'createCustomer']);
Route::get('/login/showLoginForm', [LoginController::class, 'showLoginForm']);
Route::post('/login', [LoginController::class, 'userLogin']);
Route::get('/logout', [AuthController::class, 'logout']);


// Admin authorized routes for managing product
Route::get('/product/indexAdmin', [ProductController::class, 'indexAdmin'])->middleware('can:isAdmin');
Route::get('/products/create', [ProductController::class, 'create'])->middleware('can:isAdmin');
Route::post('/products/edit/{id}', [ProductController::class, 'edit'])->middleware('can:isAdmin');
Route::delete('/products/{id}', [ProductController::class, 'destroy'])->middleware('can:isAdmin');

// Admin authorized routes for managing orders
Route::get('/order/indexAdmin', [OrderController::class, 'indexAdmin'])->middleware('can:isAdmin');
Route::get("/orders/cancel/{order_id}", [OrderController::class, 'cancelOrder'])->middleware('can:isAdmin');;

//Product
Route::get("product/{id}",[ProductController::class,'details']);
Route::get("product",[ProductController::class,'index']);
Route::post('product/addToCart/{id}', [ProductController::class, 'addToCart'])->middleware('can:isCustomer');

//Cart
Route::get("cart" ,[CartController::class,'loadUserCart'])->middleware('can:isCustomer');
Route::get("deleteSelectedCart/{id}" ,[CartController::class,'deleteSelectedCart'])->middleware('can:isCustomer');

//Payment
Route::get("payment" ,[PaymentController::class,'paymentLoadUserCart'])->middleware('can:isCustomer');
Route::post('confirmation', [PaymentController::class,'processPayment'])->middleware('can:isCustomer');
Route::view('success','success');

// Order
Route::get("order", [OrderController::class, 'indexCustomer'])->middleware('can:isCustomer'); 
Route::get("{order_id}", [OrderController::class, 'loadOrderDetails'])->middleware('can:auth');
Route::get('/orders/view/{id}', [OrderController::class, 'viewOrder'])->middleware('can:auth');
