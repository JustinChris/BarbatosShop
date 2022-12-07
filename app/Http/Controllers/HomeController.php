<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request) {
        if($request->session()->has('user')){
			$user = $request->session()->get('user');
            return view('home', [
                'user' => $user,
                "products" => Product::all(),
            ]);
		}
        $default = User::where('userID', 1)->first();

        return view('home', [
            'user' => $default,
            "products" => Product::all(),
        ]);
    }
}
