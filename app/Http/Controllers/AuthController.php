<?php
namespace App\Http\Controllers; 

use App\Models\Admin;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use Carbon\Carbon;
use App\Http\Controllers\Controller; 
use App\Mail\UniversalResetPasswordMail;
use Illuminate\Support\Facades\Validator;


class AuthController extends Controller
{
    
    public function showLoginForm()
{
    return view('login'); // Pastikan file ini ada di resources/views/login.blade.php
}
    public function showResetForm()
    {
        return view('reset');
    }

    public function sendResetLink(Request $request)
    {
        $request->validate(['email' => 'required|email']);

        // Cek apakah email milik admin
        $user = Admin::where('email', $request->email)->first();
        $role = 'admin';

        if (!$user) {
            // Jika bukan admin, cek user
            $user = User::where('email', $request->email)->first();
            $role = 'user';
        }

        if (!$user) {
            return back()->with('error', 'Email tidak ditemukan.');
        }

        $token = Str::random(64);
        $user->update([
            'reset_token' => $token,
            'reset_token_expiry' => now()->addHour(),
        ]);

        Mail::to($user->email)->send(new \App\Mail\UniversalResetPasswordMail($token, $role));

        return back()->with('success', 'Tautan reset sandi telah dikirim ke email Anda.');
    }

    public function showNewPasswordForm($token)
    {
        // Cari token di admin dulu
        $user = Admin::where('reset_token', $token)
                     ->where('reset_token_expiry', '>', now())
                     ->first();

        $role = 'admin';

        if (!$user) {
            $user = User::where('reset_token', $token)
                        ->where('reset_token_expiry', '>', now())
                        ->first();
            $role = 'user';
        }

        if (!$user) {
            return abort(404, 'Token tidak valid atau sudah kedaluwarsa.');
        }

        return view('reset-new-password', ['token' => $token, 'role' => $role]);
    }

    public function updatePassword(Request $request, $token)
    {
        $request->validate(['password' => 'required|confirmed|min:6']);

        // Cari token di admin
        $user = Admin::where('reset_token', $token)->first();
        if (!$user) {
            $user = User::where('reset_token', $token)->first();
        }

        if (!$user || $user->reset_token_expiry < now()) {
            return redirect()->route('password.request')->with('error', 'Token tidak valid atau sudah kedaluwarsa.');
        }

        $user->update([
            'password' => Hash::make($request->password),
            'reset_token' => null,
            'reset_token_expiry' => null,
        ]);

        return redirect()->route('login')->with('success', 'Kata sandi berhasil diubah.');
    }
    public function login(Request $request)
{
    $request->validate([
        'username' => 'required',
        'password' => 'required',
    ]);

    $username = $request->username;
    $password = $request->password;

    // Cek Admin
    $admin = \App\Models\Admin::where('username', $username)->first();
    if ($admin && \Hash::check($password, $admin->password)) {
        session(['user_id' => $admin->id, 'role' => 'admin']);
        return redirect('/admin/dashboard');
    }

    // Cek User
    $user = \App\Models\User::where('username', $username)->first();
    if ($user && \Hash::check($password, $user->password)) {
        session(['user_id' => $user->id, 'role' => 'user']);
        return redirect('/Home');
    }

    // Gagal login
    return back()->with('error', 'Username atau password salah.');
}

public function showRegisterForm()
{
    return view('register');
}

public function register(Request $request)
{
    $request->validate([
        'username' => 'required|string|max:255',
        'email' => 'required|email|unique:users,email',
        'password' => 'required|confirmed|min:6',
    ]);

    // Simpan user baru
    User::create([
        'username' => $request->username,
        'email' => $request->email,
        'password' => Hash::make($request->password),
    ]);

    return redirect()->route('login')->with('success', 'Akun berhasil dibuat, silakan login.');
}

}