<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class LoginController extends Controller
{
    public function register() {
        return view('register');
    }

    public function login() {
        return view('login');
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
        Storage::putFileAs('/public/profile', $file, $imageName);
        $imageUrl = 'profile/'.$imageName;

        $user->userPhoto = $imageUrl;
        
        $user->save();

        return view('login');
    }
}
