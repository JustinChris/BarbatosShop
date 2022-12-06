<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function getProductDetailById($id) {
        return view('productDetail', [
            'name' => 'Guest',
            'role' => 'Member',
            'singleProduct' => Product::findOrFail($id),
        ]);
    }

    public function getProductByCategoryId($categoryID) {
        return view('productByCategory', [
            'name' => 'Guest',
            'role' => 'Guest',
            'products' => Product::where('categoryID', '=' , $categoryID)->get(),
            'category' => Category::where('categoryID', '=', $categoryID)->firstOrFail(),
        ]);
    }

    public function manageProduct() {
        return view('admin.manageProduct', [
            'name' => 'Guest',
            'products' => Product::all(),
        ]);
    }
}
