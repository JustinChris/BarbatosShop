<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index() {
        return view('product', [
            'name' => 'Guest',
            "products" => Product::all(),
            "categories" => Category::all(),
        ]);
    }

    public function getProductById($id) {
        return view('productDetail', [
            'name' => 'Guest',
            'role' => 'Customer',
            'categories' => Category::all(),
            'singleProduct' => Product::findOrFail($id),
        ]);
    }

}
