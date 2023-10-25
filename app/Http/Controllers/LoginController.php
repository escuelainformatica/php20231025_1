<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(Request $request) {
        return view("login");
    }
    public function indexPost(Request $request) {
        if(Auth::attempt(["email"=> $request->email,'password'=>$request->password])) {
            $request->session()->regenerate();
 
            return redirect("/soporte");
        }
        var_dump('no');
    }
}
