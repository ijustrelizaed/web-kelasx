<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

// controller yang mengatur fitur admin dan guest
class authController extends Controller
{   
    // menampilkan form login
    public function showLogin() : View
    {
        return view('auth.login');
    }

    // login bekerja
    public function login(Request $request) : RedirectResponse 
    {
        // variabel untuk request dari user
        $userLogin = $request->only('name', 'password');

        // jika datanya sama dengan di database maka return ke halaman utama
        if (Auth::attempt($userLogin)) {
            return redirect('/');
        }

        // jika tidak error
        return back()->with('error', 'login gagal');
    }

    public function logout()
    {   
        // logout dari session 
        Auth::logout();
        return redirect('/');
    }
}
