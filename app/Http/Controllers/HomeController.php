<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        return view('Home', [
            'name' => 'Guest',
            "products" => Product::all(),
            "categories" => Category::all(),
        ]);
    }
}
