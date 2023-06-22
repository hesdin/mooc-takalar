<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function loginProcess(Request $request)
    {
        $credentials = $request->validate([
            'username' => ['required'],
            'password' => ['required'],
        ]);

        $guard = null;
        if (Auth::guard('admin')->attempt($credentials)) {
            $guard = 'admin';
        } elseif (Auth::guard('guru')->attempt(['nip' => $request->username, 'password' => $request->password])) {
            $guard = 'guru';
        } elseif (Auth::guard('instruktur')->attempt($credentials)) {
            $guard = 'instruktur';
        }

        if ($guard) {
            $intendedUrl = "/$guard/dashboard";
            if (session()->has('url.intended')) {
                $intendedUrl = session('url.intended');
            }
            if (strpos($intendedUrl, 'enrollment') !== false) {
                return redirect()->intended($intendedUrl);
            } else {
                if ($guard == 'guru') {
                    return redirect()->intended("$guard/dashboard");
                } else {
                    return redirect()->intended("$guard/dashboard");
                }
            }
        }

        return redirect('/login')->with('error', 'Invalid credentials');
    }


    public function logout(Request $request)
    {
        if (Auth::guard('admin')->check()) {
            Auth::guard('admin')->logout();
        } elseif (Auth::guard('guru')->check()) {
            Auth::guard('guru')->logout();
        } elseif (Auth::guard('instruktur')->check()) {
            Auth::guard('instruktur')->logout();
        }

        return redirect('/login');
    }
}
