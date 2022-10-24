<?php

use Illuminate\Support\Facades\Route;
use App\Models\Product as Product;

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
    $products = Product::all();
    return view('product', [
        'name' => 'Guest',
        "products" => $products,
    ]);
});