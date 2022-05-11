<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    //
    public function index()  {
        return view('auth.register');
    }

    public function storeUser(Request $request) {
        $validated = $request->validate([
            'name' => 'required',
            'password' => 'required|unique:users,password|min:6|max:12'
        ]);
        
        $validated["password"] = Hash::make($validated["password"]);
        if(!$validated) {
            return redirect('/register')->with('register_gagal', 'gagal melakukan registrasi');
        }
        User::create($validated);
        return redirect('/login')->with('register_sukses', 'register berhasil, silahkan login');
    }

}
