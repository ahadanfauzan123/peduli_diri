<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //
    public function index() {
        return view('auth.login');
    }

    public function authenticate(Request $request) {
        $credentials = $request->validate([
            'name' => 'required',
            'password' => 'required|unique:users,password'
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/')->with('login_berhasil', 'Halo '.auth()->user()->name.', Selamat datang kembali di peduli diri');
        }
        return back()->with('login_gagal', 'tidak berhasil login, pastikan email / password anda benar');
    }
    public function logout() {
        Auth::logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();
        return redirect('/login')->with('logout_sukses', 'berhasil logout, login untuk masuk kembali');
    }
}
