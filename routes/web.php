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

/*
TODO: routing Page
[X]1. Login
[X]2. Register
[x]3. Home
[x]4. View Product by Category
[X]5. Product Detail
    [X]1. Guest and admin
    [X]2. Member
[ ]6. Manage Product (Admin)
[ ]7. Add Product (Admin)
[ ]8. Update Product (Admin)
[ ]9. Profile
[ ]10. Cart Page (Member)
[ ]11. History Page (Member)
*/

Route::get('/', [HomeController::class, 'index']); // Home

Route::get('/login',[LoginController::class, 'login']); // Login
Route::get('/register',[LoginController::class, 'register']); // Register
Route::post('/register', [LoginController::class, 'regUser']);
Route::post('/login', [LoginController::class, 'logUser']);
Route::get('/logout', [LoginController::class, 'logout']); // untuk destroy session

Route::get('/product/category/{category}', [ProductController::class, 'getProductByCategoryId']); // View Product by Category
Route::get('/product/admin', [ProductController::class, 'manageProduct']);
Route::get('/product/{id}', [ProductController::class, 'getProductDetailById']); // Product Detail

