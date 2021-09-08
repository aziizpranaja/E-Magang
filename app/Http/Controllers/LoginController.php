<?php

namespace App\Http\Controllers;

use App\Models\admin;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function halamanlogin()
    {
        return view ('login.login');
    }
    
    public function postlogin(Request $request)
    {
       if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password]))
       {
           return redirect ('/admin');
       }
       elseif (Auth::guard('web')->attempt(['email' => $request->email, 'password' => $request->password]))
       {
           return redirect ('/dashboard');
       }
       return redirect('/login')->with('status', 'Gagal Login Username Atau Password salah');
    }

    public function logout()
    {
        Auth::logout();
        return redirect ('/');
    }
    public function register()
    {
        return view ('register');
    }

    public function simpanregister(Request $request)
    {
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'level' => $request->level,
            'password' => password_hash($request->password, PASSWORD_DEFAULT),
            'remember_token' => Str::random(60),
        ]);
        return view ('login.login');
    }
    
}
