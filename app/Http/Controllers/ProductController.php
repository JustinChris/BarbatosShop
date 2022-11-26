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
        ]);
    }

    public function getProductDetailById($id) {
        return view('productDetail', [
            'name' => 'Guest',
            'role' => 'Customer',
            'singleProduct' => Product::findOrFail($id),
        ]);
    }

    public function getProductByCategoryId($categoryID) {

        // dd(Category::where('categoryID', '=', $category)->get());

        return view('productByCategory', [
            'name' => 'Guest',
            'products' => Product::where('categoryID', '=' , $categoryID)->get(),
            'category' => Category::where('categoryID', '=', $categoryID)->firstOrFail(),
        ]);
    }
}
