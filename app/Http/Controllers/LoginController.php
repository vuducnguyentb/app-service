<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Base\BaseWebController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends BaseWebController
{
    public function __construct()
    {
    }

    public function login(){
        return view('admin.login.login');
    }

    public function checkLogin(Request $request){
        $data = $request->all();
        $credentials = $request->only('username', 'password');
//            dd(Auth::attempt($credentials));
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect('/admin/dashboard');
            return response()->json(['message' => 'Login successful']);
        }
        return back();
        return response()->json(['message' => 'Invalid credentials'], 401);
    }
}
