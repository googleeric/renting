<?php

namespace App\Http\Controllers;
use App\User;
use Auth;
use App\Product;
use Illuminate\Support\Str;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function login(Request $request){
        $credential = $request->only('email','password');

        if(Auth::attempt($credential)){
           $token = Str::random(80);
           Auth::user()->api_token = $token;
           Auth::user()->save();
           return response()->json(['token' => $token, 'user'=>Auth::user()], 200);
        }
        return response()->json(['status' => 'Email or Password is Wrong'], 403);
    }
}
