<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    // Menampilkan form register
    public function showRegisterForm()
    {
        return view('auth.register');
    }

    // Menyimpan data user baru
    public function register(Request $request)
    {
        // 1. Validasi input
        $request->validate([
            'name' => 'required|string|max:100',
            'email' => 'required|string|email|max:150|unique:users',
            'password' => 'required|string|min:6|confirmed', 
            // "confirmed" artinya harus ada input password_confirmation
        ]);

        // 2. Simpan user baru
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password), // selalu hash password
        ]);

        // 3. Redirect ke halaman login setelah register berhasil
        return redirect('/login')->with('success', 'Registrasi berhasil! Silakan login untuk melanjutkan.');
    }
}