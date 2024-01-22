<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index() {
        return view('auth.login');
    }

    public function login(Request $request) {
        $kasir = $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        Auth::attempt($kasir);

        return redirect()->route('paket');
    }
}
