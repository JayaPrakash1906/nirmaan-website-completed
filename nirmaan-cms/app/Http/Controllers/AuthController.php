<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    function getLogin()
    {
        if (Session::has('user_id')) {
            return redirect('/dashboard');
        } else {
            return view('CMS.Auth.login');
        }
    }

    function postLoginUser(Request $request)
    {
        $email = $request->input('email');
        $password = $request->input('password');
        $user = DB::select("SELECT * FROM users WHERE email = '$email' AND password = '$password'");
        if (count($user) > 0) {
            $request->session()->put('user_id', $user[0]->id);
            return redirect('/dashboard');
        } else {
            return redirect('/login')->with('login_failed', 'Please login with valid credentials');
        }
    }

    function getForgetPassword()
    {
        return view('CMS.Auth.forget-password');
    }

    function postLogout()
    {
        Session::forget('user_id');
        return redirect('/login');
    }
}
