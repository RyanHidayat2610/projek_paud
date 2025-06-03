<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        // Menampilkan view login dari resources/views/admin/login.blade.php
        return view('admin.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $admin = Admin::where('email', $request->email)->first();

        if ($admin && $admin->password === $request->password) {
            session([
                    'id_admin' => $admin->id_admin,
                    'admin_nama' => $admin->nama_lengkap, // tambahkan ini
                    ]);
        return redirect('/dashboard');}

        return back()->withErrors(['email' => 'Email atau kata sandi salah']);
    }

    public function logout()
    {
        session()->forget('id_admin');
        return redirect('/login');
    }
}
