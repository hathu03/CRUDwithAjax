<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(Request $request){
        $data = $request->only("email","password");
        if(Auth::attempt($data)){
            return response()->json(["success"=>true]);
        }else{
            echo"1";
        }
    }

    public function register(Request $request) {
        $data = $request->only("name", "email", "password");
        if (Auth::attempt($data)){
            return response()->json(["success"=>true]);
        }
    }

    public function logout()
    {
        Auth::logout();
//        return response()->json();
    }

}
