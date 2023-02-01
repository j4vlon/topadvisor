<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index(){
        return view('auth.login');
    }

    public function login(Request $request){
        $data = $request->validate([
            'email' => ["required", "email", "string"],
            "password" => "required"
        ]);

        if(auth("admin")->attempt($data)){
            return redirect(route("services.index"));
        }
        return redirect(route("admin.login"))->withErrors(["email" => "Пользователь не найден, либо данные введены не правильно"]);
    }

    public function logout(){
        Auth::logout();
        return view('auth.login');
    }
}
