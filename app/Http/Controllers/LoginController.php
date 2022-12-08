<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;

class LoginController extends Controller
{
    public function register(Request $req) {
        if ($req->session()->has('user')) {
            return view('home', [
                'user' => $req->session()->get('user'),
                "products" => Product::all(),
            ]);
        }
        return view('register');
    }

    public function login(Request $req) {
        if ($req->session()->has('user')) {
            return view('home', [
                'user' => $req->session()->get('user'),
                "products" => Product::all(),
            ]);
        }
        return view('login');
    }

    public function getProfile(Request $req) {
        if ($req->session()->has('user') && $req->session()->get('user')->userRole != "Guest") {
            return view('profile', [
                'user' => $req->session()->get('user'),
            ]);
        }
        return Redirect::to('/login');
    }

    public function logout(Request $req) {
        $req->session()->forget('user');
        return Redirect::to('/login');
    }

    public function logUser(Request $req) {
        request()->validate([
            'emailInput' => 'required',
            'passInput' => 'required',
        ]);

        $emailInput = $req->emailInput;
        $passInput = $req->passInput;

        $user = User::where('userEmail', $emailInput)
                ->where('password', $passInput)->first();
        if ($user) {
            $req->session()->put('user', $user);
            return Redirect::to('/');
        }
        return Redirect::to("/login")->withErrors("User Not Found!");
    }

    public function regUser(Request $req) {
        $user = new User;
        $user->userName = $req->NameInput;
        $user->userEmail = $req->EmailInput;
        $user->password = $req->PassInput;
        $user->userGender = $req->GenderInput;
        $user->userDoB = $req->DOBInput;
        $user->userCountry = $req->CountryInput;
        $user->userRole = "Member";

        $file = $req->file('PPInput');
        $imageName = $file->getClientOriginalName();
        // Storage::putFileAs('/public/profile', $file, $imageName);
        $file->move(public_path('profile'), $imageName);
        $imageUrl = '/profile/'.$imageName;

        $user->userPhoto = $imageUrl;
        
        $user->save();

        return Redirect::to('/login');
    }
}
