<?php

use Illuminate\Support\Facades\Route;

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
    return view('master.home-1');
});

Route::get('/about', function () {
    return view('master.about-1');
});

Route::get('/shop', function () {
    return view('master.shop');
});

Route::get('/contact', function () {
    return view('master.contact');
});

Route::get('/cart', function () {
    return view('master.cart');
});

Route::get('/checkout', function () {
    return view('master.checkout');
});

Route::get('/product', function () {
    return view('master.product');
});

Route::get('/post', function () {
    return view('master.post');
});




