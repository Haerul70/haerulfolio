<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }
    public function authenticating(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials, $request->filled('remember'))) {
            $request->session()->regenerate();

            $user = Auth::user();
            if ($user->role_id == 1) {
                return redirect()->intended('admin/dashboard');
            }
        }

        if (!User::where('email', $request->email)->exists()) {
            return back()->withErrors([
                'email' => 'Email yang Anda masukkan tidak terdaftar!.',
            ])->onlyInput('email');
        }

        return back()->withErrors([
            'password' => 'Password yang Anda masukkan salah!.',
        ])->onlyInput('password');
    }

    public function logOut(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login');
    }
}
