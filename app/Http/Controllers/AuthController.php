<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    // Kullanıcı kayıt işlemi
    public function register(Request $request)
    {
        // Validasyon
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:8|confirmed',
        ]);

        // Kullanıcı oluşturma
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        // Otomatik giriş
        Auth::login($user);

        return redirect()->route('dashboard');
    }

    // Kullanıcı giriş işlemi
    public function login(Request $request)
    {
        // Validasyon
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|string',
        ]);

        // Kullanıcı girişi
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect()->route('dashboard');
        }

        return back()->withErrors([
            'email' => 'Bu bilgilerle giriş yapılamadı.',
        ]);
    }

    // Kullanıcı çıkışı
    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }

    // Kullanıcı paneli (Dashboard)
    public function dashboard()
    {
        return view('dashboard');
    }
}
