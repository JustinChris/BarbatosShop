<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\LoginController;
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

Route::get('/', [HomeController::class, 'index']);

Route::get('/login',[LoginController::class, 'login']);
Route::get('/register',[LoginController::class, 'register']);

Route::get('/product', [ProductController::class, 'index']);
Route::get('/product/category/{category}', [ProductController::class, 'getProductByCategoryId']);
Route::get('/product/{id}', [ProductController::class, 'getProductDetailById']);