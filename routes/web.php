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
    return view('home', [
        'name' => 'Guest'
    ]);
});

Route::get('/greet', function () {
    return view('greeting', [
        'name' => 'test'
    ]);
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});



Route::get('/product', function () {
    $products = [
        [
            "ProductID" => 1,
            "productName" => "Mainan Dinosaurus",
            "productCategory" => "Toys",
            "productDetail" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Rem saepe consectetur id! Laboriosam quod temporibus eveniet hic, aliquid molestias magni aperiam nostrum adipisci odit nulla qui vel minus? Minima, ut!",
            "productPrice" => 20000,
            "productPhoto" => "../public/favicon.ico",
        ],
        [
            "ProductID" => 2,
            "productName" => "Laptop Asus X11Z",
            "productCategory" => "Computer",
            "productDetail" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Rem saepe consectetur id! Laboriosam quod temporibus eveniet hic, aliquid molestias magni aperiam nostrum adipisci odit nulla qui vel minus? Minima, ut!",
            "productPrice" => 20000000,
            "productPhoto" => "../public/favicon.ico",
        ],
    ];
    return view('product', [
        'name' => 'Guest',
        "products" => $products,
    ]);
});