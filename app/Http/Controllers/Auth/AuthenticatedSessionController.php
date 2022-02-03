<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthenticatedSessionController extends Controller
{
    public function create() {
        if(auth()->user())
            return redirect('/');
        return view('auth.login');
    }

    public function store(Request $request) {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        //no function
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect(RouteServiceProvider::HOME);
        }

        return back()->withErrors([
            'email' => 'Butiran anda tidak ada dalam rekod kami, sila cuba isi semula.'
        ]);
    }

    public function destroy(Request $request) {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('login');
    }
}
