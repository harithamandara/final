<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\OrderController;
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
    return view('home');
});


Route::get('/about', function () {
    return view('about');
});

Route::get('/service', function () {
    return view('service');
});

// Route::get('/', function () {
//     return view('welcome');
// });

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::resource(
        'product-category',
        \App\Http\Controllers\ProductCategoryController::class
    );

    Route::resource(
        'user',
        \App\Http\Controllers\UserController::class
    );

    
});

route::resource('product-category', \App\Http\Controllers\ProductCategoryController::class);

Route::get('/admin', function () {
    return view('admin.home');
});



//shop

Route::GET('/shop', 'App\Http\Controllers\ProductController@index');




//details
Route::get('/details', function () {
    return view('shop.product-details');
});


//product  

Route::GET('/store', 'App\Http\Controllers\ProductController@create');
Route::POST('/store', 'App\Http\Controllers\ProductController@create');

Route::get('/creste', function () {
    return view('admin.product.create');
});

Route::GET('more/{id}', 'App\Http\Controllers\ProductController@show');

   

// Route::post('/cart/add/{id}', [CartController::class, 'addToCart'])->name('cart.add');

// Route::post('/cart/add/{id}', [CartController::class, 'addToCart'])->name('cart.add');

Route::GET('cart', 'App\Http\Controllers\CartController@showw');



// web.php
Route::get('/checkout', [CheckoutController::class, 'index'])->name('checkout');





Route::post('/save-order', [OrderController::class, 'saveOrder'])->name('save-order');

Route::middleware('auth')->group(function () {
    Route::post('/cart/add', [CartController::class, 'addToCart'])->name('cart.add');
    Route::get('/cart', [CartController::class, 'viewCart'])->name('cart.view');
});