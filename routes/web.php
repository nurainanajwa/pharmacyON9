<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\pharmacyON9;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\PharmacistController;
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

Route::get('/', function () {
    return view('home');
});

//Customer
Route::get('/cus_login', [pharmacyON9::class,'cus_login']);
Route::get('/cus_register', [pharmacyON9::class,'cus_register']);
Route::post('/register-cus', [pharmacyON9::class,'registerCustomer'])->name('register-cus');
Route::post('/login-cus', [pharmacyON9::class,'loginCustomer'])->name('login-cus');
Route::get('/cus_profile', [pharmacyON9::class,'cus_profile']);

//Pharmacist
Route::get('/phar_login', [PharmacistController::class,'phar_login']);
Route::post('/login-phar', [PharmacistController::class,'loginPharmacist'])->name('login-phar');


//Pharmacist Database 
Route::get('/phar_products', [ProductController::class,'viewProducts']);
Route::get('/phar_addnew', [ProductController::class,'viewHistory']);
Route::post('/phar_addnew', [ProductController::class,'saveProduct']);
Route::get('edit-product{id}',[ProductController::class,'editProduct']);
Route::put('update-product{id}',[ProductController::class,'updateProduct']);
Route::get('delete-product/{id}',[ProductController::class,'deleteProduct']);

Route::get('/phar_history', [OrderController::class,'viewOrder']);
Route::get('/edit-order{id}',[OrderController::class,'editOrder']);
Route::put('/update-order{id}',[OrderController::class,'updateOrder']);
Route::get('/delete-order/{id}',[OrderController::class,'deleteOrder']);

//Other
Route::get('/home', [pharmacyON9::class,'home']);
Route::get('/logout', [pharmacyON9::class, 'logout']);

//Add to Cart
Route::get('/cus_cart', [pharmacyON9::class,'cus_cart']);
Route::post('addtocart/{id}', [pharmacyON9::class,'addtocart']);
Route::get('delete-carts/{id}',[pharmacyON9::class,'deleteCart']);

//Order
Route::get('/cus_checkout', [pharmacyON9::class,'cus_checkout']);
Route::post('/cus_checkout', [pharmacyON9::class,'addOrder']);

//Customer
Route::get('/cus_history', [pharmacyON9::class,'cus_history']);
Route::get('/cus_order', [pharmacyON9::class,'cus_order']);
Route::get('cus_product_details{id}', [pharmacyON9::class,'cus_product_details']);
Route::get('/cus_shop', [pharmacyON9::class,'cus_shop']);