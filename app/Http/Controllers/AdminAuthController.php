<?php
class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('login'); // resources/views/login.blade.php
    }

    public function showResetForm()
    {
        return view('reset'); // resources/views/reset.blade.php
    }

    public function sendResetLink(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
        ]);

        $email = $request->email;

        // Cari admin atau user berdasarkan email
        $admin = Admin::where('email', $email)->first();
        $user = User::where('email', $email)->first();

        if (!$admin && !$user) {
            return back()->with('error', 'Email tidak ditemukan.');
        }

        $token = Str::random(64);
        $expiry = Carbon::now()->addMinutes(60);

        if ($admin) {
            $admin->update([
                'reset_token' => $token,
                'reset_token_expiry' => $expiry,
            ]);
            $role = 'admin';
        } else {
            $user->update([
                'reset_token' => $token,
                'reset_token_expiry' => $expiry,
            ]);
            $role = 'user';
        }

        $url = url("/new-password/{$token}?role={$role}");

        Mail::send('emails.reset', ['url' => $url], function ($message) use ($email) {
            $message->to($email);
            $message->subject('Reset Kata Sandi');
        });

        return back()->with('success', 'Tautan reset telah dikirim ke email Anda.');
    }

    public function showNewPasswordForm($token, Request $request)
    {
        $role = $request->query('role', 'user');

        if ($role === 'admin') {
            $user = Admin::where('reset_token', $token)
                         ->where('reset_token_expiry', '>', now())
                         ->first();
        } else {
            $user = User::where('reset_token', $token)
                        ->where('reset_token_expiry', '>', now())
                        ->first();
        }

        if (!$user) {
            return abort(404, 'Token tidak valid atau telah kedaluwarsa.');
        }

        return view('reset-new-password', compact('token', 'role'));
    }

    public function updatePassword(Request $request, $token)
    {
        $request->validate([
            'password' => 'required|confirmed|min:6',
        ]);

        $role = $request->input('role', 'user');

        if ($role === 'admin') {
            $user = Admin::where('reset_token', $token)->first();
        } else {
            $user = User::where('reset_token', $token)->first();
        }

        if (!$user || $user->reset_token_expiry < now()) {
            return redirect()->route('reset')->with('error', 'Token tidak valid atau telah kedaluwarsa.');
        }

        $user->update([
            'password' => Hash::make($request->password),
            'reset_token' => null,
            'reset_token_expiry' => null,
        ]);

        $redirectRoute = $role === 'admin' ? '/admin/login' : '/login';

        return redirect($redirectRoute)->with('success', 'Kata sandi berhasil diperbarui.');
    }
}
