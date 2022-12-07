<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class ProductController extends Controller
{

    public function getProductDetailById(Request $request, $id) {
        if($request->session()->has('user')){
			$user = $request->session()->get('user');
            return view('productDetail', [
                'user' => $user,
                'singleProduct' => Product::findOrFail($id),
            ]);
		}
        $default = User::where('userID', 1)->first();
        return view('productDetail', [
            'user' => $default,
            'singleProduct' => Product::findOrFail($id),
        ]);
    }

    public function getProductByCategoryId(Request $request, $categoryID) {

        $product = Product::where('categoryID', '=' , $categoryID)->paginate(10);
        $category = Category::where('categoryID', '=', $categoryID)->firstOrFail();

        if (request('search')) {
            $product = Product::where('productName','like', '%' . request('search') . '%')
                    ->where('categoryID', '=', $categoryID)
                    ->paginate(10);
        }

        if($request->session()->has('user')){
			$user = $request->session()->get('user');
            return view('productByCategory', [
                'user' => $user,
                'products' => $product,
                'category' => $category,
            ]);
		}
        $default = User::where('userID', 1)->first();
        return view('productByCategory', [
            'user' => $default,
            'products' => $product,
            'category' => $category,
        ]);
    }

    public function manageProduct(Request $request) {
        if($request->session()->has('user') && $request->session()->get('user')->userRole == "Admin"){
			$user = $request->session()->get('user');
            return view('admin.manageProduct', [
                'user' => $user,
                'products' => Product::all(),
            ]);
		}
        return Redirect::to("/login");
    }
}
