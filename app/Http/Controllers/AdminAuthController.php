<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Carbon\Carbon;
use Illuminate\Support\Str;
use App\Models\Admin;
use App\Mail\AdminResetPasswordMail;

class AdminAuthController extends Controller
{
    public function showLoginForm()
    {
        return view('admin.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('username', 'password');
        $admin = Admin::where('username', $credentials['username'])->first();

        if ($admin && Hash::check($credentials['password'], $admin->password)) {
            Auth::guard('admin')->login($admin);
            return redirect('/admin/dashboard');
        }

        return back()->with('error', 'Username atau password salah.');
    }

    public function showResetForm()
    {
        return view('admin.reset');
    }

    public function sendResetLink(Request $request)
    {
        $request->validate(['email' => 'required|email']);

        $admin = Admin::where('email', $request->email)->first();
        if (!$admin) {
            return back()->with('error', 'Email tidak ditemukan.');
        }

        $token = Str::random(64);
        $admin->update([
            'reset_token' => $token,
            'reset_token_expiry' => Carbon::now()->addHour(),
        ]);

        Mail::to($admin->email)->send(new AdminResetPasswordMail($token));

        return back()->with('success', 'Tautan reset sandi telah dikirim ke email Anda.');
    }

    public function showNewPasswordForm($token)
    {
        $admin = Admin::where('reset_token', $token)
                      ->where('reset_token_expiry', '>=', Carbon::now())
                      ->first();

        if (!$admin) {
            return redirect()->route('admin.reset')->with('error', 'Token tidak valid atau sudah kedaluwarsa.');
        }

        return view('admin.new-password', ['token' => $token]);
    }

    public function updatePassword(Request $request, $token)
    {
        $request->validate(['password' => 'required|confirmed|min:6']);

        $admin = Admin::where('reset_token', $token)
                      ->where('reset_token_expiry', '>=', Carbon::now())
                      ->first();

        if (!$admin) {
            return redirect()->route('admin.reset')->with('error', 'Token tidak valid atau sudah kedaluwarsa.');
        }

        $admin->update([
            'password' => Hash::make($request->password),
            'reset_token' => null,
            'reset_token_expiry' => null,
        ]);

        return redirect()->route('admin.login')->with('success', 'Sandi berhasil diubah.');
    }
}
