<?php

// app/Http/Controllers/AuthController.php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LoginUser;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function showRegister()
    {
        return view('user-login.register');
    }

    public function register(Request $request)
    {
        $request->validate([
            'username' => 'required|unique:login_user',
            'email' => 'required|email|unique:login_user',
            'no_hp' => 'required',
            'password' => 'required|min:6',
        ]);

        LoginUser::create([
            'username' => $request->username,
            'email' => $request->email,
            'no_hp' => $request->no_hp,
            'password' => Hash::make($request->password),
        ]);

        return redirect('/login')->with('success', 'Akun berhasil dibuat!');
    }

    public function showLogin()
    {
        return view('user-login.login');
    }

    public function login(Request $request)
    {
        $user = LoginUser::where('username', $request->username)->first();

        if ($user && Hash::check($request->password, $user->password)) {
            session([
                'user_id' => $user->id,
                'username' => $user->username,
                'email' => $user->email,
                'no_hp' => $user->no_hp,
            ]);

            return redirect('/home')->with('success', 'Login berhasil!');
        }

        return back()->with('error', 'Username atau Password salah!');
    }


    public function dashboard()
{
    if (!session('user_id')) {
        return redirect('/login')->with('error', 'Silakan login terlebih dahulu.');
    }

    $user = LoginUser::find(session('user_id'));

    $data_anak = $user->anak;

    return view('user-login.dashboard', compact('user', 'data_anak'));
}

    public function logout()
    {
        session()->flush(); // membersihkan semua session
        return redirect('/login')->with('success', 'Anda telah logout.');
    }

}
