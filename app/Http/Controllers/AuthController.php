<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function showRegistrationForm()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        // Validasi data dari form
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'phone_number' => 'required|string|max:15',
            'password' => 'required|string|min:6|confirmed',
            'role' => 'required|in:admin,founder,programmer,marketing,journalist',
            'terms' => 'accepted',
        ]);

        // Simpan pengguna ke database
        User::create($request->all());

        return redirect()->route('login')->with('success', 'Registrasi berhasil!');
    }

    public function showLoginForm()
    {
        return view('admin.auth.login');
    }

    public function login(Request $request)
    {
        // Validasi data dari form
        $request->validate([
            'email' => 'required|string|email|max:255',
            'password' => 'required|string',
        ]);

        // Lakukan autentikasi
        if (auth()->attempt(['email' => $request->email, 'password' => $request->password])) {
            // Autentikasi berhasil
            // Lakukan sesuatu sesuai peran (role) pengguna
            // Misalnya, arahkan ke halaman beranda sesuai peran (role)
            return view('admin.index', [
        'title' => 'Home'
    ]);
        }

        // Autentikasi gagal
        return redirect()->back()->withErrors(['email' => 'Kombinasi email dan password salah.']);
    }
    
   public function logout()
    {
        // Lakukan proses logout di sini

        return redirect()->route('login')->with('success', 'Anda telah berhasil logout.');
    }


}
