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
        $product = Product::paginate(10);

        if (request('search')) {
            $product = Product::where('productName','like','%' . request('search') . '%')
                                ->paginate(10);
        }

        if($request->session()->has('user') && $request->session()->get('user')->userRole == "Admin"){
			$user = $request->session()->get('user');
            return view('admin.manageProduct', [
                'user' => $user,
                'products' => $product,
            ]);
		}
        return Redirect::to("/login");
    }

    public function addProduct(Request $request) {
        if($request->session()->has('user') && $request->session()->get('user')->userRole == "Admin"){
			$user = $request->session()->get('user');
            return view('admin.addProduct', [
                'user' => $user,
            ]);
		}
        return Redirect::to("/login");
    }

    public function addProductPost (Request $req) {
        if($req->session()->has('user') && $req->session()->get('user')->userRole != "Admin"){
            Redirect::to('/');
		}

        $req->validate([
            'productNameAdd' => 'required',
            'categoryIDAdd' => 'required',
            'productDetailAdd' => 'required',
            'productPriceAdd' => 'required|integer',
            'productPhotoAdd' => 'required|image|mimes:jpg,png,jpeg'
        ]);

        $product = new Product;
        $product->productName = $req->productNameAdd;
        $product->categoryID = $req->categoryIDAdd;
        $product->productDetail = $req->productDetailAdd;
        $product->productPrice = $req->productPriceAdd;


        $file = $req->file('productPhotoAdd');
        $imageName = $file->getClientOriginalName();
        
        $file->move(public_path('products'), $imageName);
        $imageUrl = '/products/'.$imageName;

        $product->productPhoto = $imageUrl;

        $product->save();

        return Redirect::to('/product/add');
    }

    public function updateProduct(Request $request, $id) {
        if($request->session()->has('user') && $request->session()->get('user')->userRole == "Admin"){
			$user = $request->session()->get('user');
            $product = Product::where('productID', '=', $id)->first();
            return view('admin.updateProduct', [
                'user' => $user,
                'product' => $product,
            ]);
		}
        return Redirect::to("/");
    }

    public function updateProductPost(Request $req, $id) {
        if($req->session()->has('user') && $req->session()->get('user')->userRole != "Admin"){
            Redirect::to('/');
		}
        $req->validate([
            'productNameEdit' => 'required',
            'categoryIDEdit' => 'required',
            'productDetailEdit' => 'required',
            'productPriceEdit' => 'required|integer',
            'productPhotoEdit' => 'required|image|mimes:jpg,png,jpeg'
        ]);
        $product = Product::find($id);
        $product->productName = $req->productNameEdit;
        $product->categoryID = $req->categoryIDEdit;
        $product->productDetail = $req->productDetailEdit;
        $product->productPrice = $req->productPriceEdit;

        if ($req->hasFile('productPhotoEdit')) {
            $file = $req->file('productPhotoEdit');
            $imageName = $file->getClientOriginalName();
            
            $file->move(public_path('products'), $imageName);
            $imageUrl = '/products/'.$imageName;
    
            $product->productPhoto = $imageUrl;
        }
        $product->save();

        return Redirect::to('/product/update/'.$id);

    }

    public function deleteProduct(Request $req, $id) {
        if($req->session()->has('user') && $req->session()->get('user')->userRole == "Admin"){
            $product = Product::find($id);
            $product->delete();
            return Redirect::to('/product/manage');
		}
        return Redirect::to('/');
    }

}
