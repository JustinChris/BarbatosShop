<?php

namespace App\Http\Controllers;

use App\Models\Product;

class HomeController extends Controller
{
    public function index() {
        return view('Home', [
            'name' => 'Guest',
            'role' => 'Guest',
            "products" => Product::all(),
        ]);
    }
}
