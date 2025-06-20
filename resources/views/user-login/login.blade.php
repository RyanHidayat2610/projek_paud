<!DOCTYPE html>
<html>
<head>
    <title>Login Akun</title>
    <link rel="stylesheet" href="{{ asset('CSS/login.css') }}">
    <link rel="stylesheet" href="{{ asset('CSS/back-button.css') }}">
</head>
<body>
    <div class="btn-group">
        <a href="{{ url()->previous() }}" class="btn-kembalii">← Kembali</a>
        <a href="/home" class="btn-home">← Ke Beranda</a>
    </div>

    <div class="login-container">
        <h2 class="login-title">Login</h2>
        <form action="/login" method="POST" class="login-form">
            @csrf
            <input type="text" name="username" placeholder="Username" class="login-input" required>

            <div class="password-wrapper">
                <input type="password" name="password" id="password" placeholder="Password" class="login-input" required>
                <span class="toggle-password" onclick="togglePassword()">👁️</span>
            </div>

            <button type="submit" class="login-button">Login</button>
        </form>

        <p class="login-link">Belum punya akun? <a href="/register">Daftar</a></p>

        @if (session('error'))
            <div class="login-error">{{ session('error') }}</div>
        @endif
        @if (session('success'))
            <div class="login-success">{{ session('success') }}</div>
        @endif
    </div>

    <script>
        function togglePassword() {
            const passwordField = document.getElementById('password');
            const type = passwordField.getAttribute('type') === 'password' ? 'text' : 'password';
            passwordField.setAttribute('type', type);
        }
    </script>
</body>
</html>
