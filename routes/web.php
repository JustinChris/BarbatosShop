<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\TransactionController;
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
[x]6. Manage Product (Admin)
[x]7. Add Product (Admin)
[x]8. Update Product (Admin)
[x]9. Delete Product (Admin)
[x]10. Profile
[ ]11. Cart Page (Member)
[ ]12. History Page (Member)
*/

Route::get('/', [HomeController::class, 'index']); // Home

Route::get('/userprofile', [LoginController::class, 'getProfile']);
Route::get('/login',[LoginController::class, 'login']); // Login
Route::get('/register',[LoginController::class, 'register']); // Register
Route::post('/register', [LoginController::class, 'regUser']);
Route::post('/login', [LoginController::class, 'logUser']);
Route::get('/logout', [LoginController::class, 'logout']); // untuk destroy session

Route::get('/product/category/{category}', [ProductController::class, 'getProductByCategoryId']); // View Product by Category
Route::get('/product/manage', [ProductController::class, 'manageProduct']);
Route::get('/product/update/{id}', [ProductController::class, 'updateProduct']);
Route::post('/product/update/{id}', [ProductController::class, 'updateProductPost']);
Route::get('/product/add', [ProductController::class, 'addProduct']);
Route::post('/product/add', [ProductController::class, 'addProductPost']);
Route::get('/product/delete/{id}', [ProductController::class, 'deleteProduct']);
Route::get('/product/{id}', [ProductController::class, 'getProductDetailById']); // Product Detail

Route::get('/transaction/cart', [TransactionController::class, 'getTransactionCart']);
Route::post('/transaction/cart/add/{id}', [TransactionController::class, 'addProductToCart']);
Route::get('/transaction/cart/remove/{id}', [TransactionController::class, 'removeProductFromCart']);
Route::get('/transaction/cart/purchase', [TransactionController::class, 'purchaseCartProduct']);
Route::get('/transaction/history', [TransactionController::class, 'getTransactionHistory']);