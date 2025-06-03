<!DOCTYPE html>
<html>
<head>
    <title>Login Admin</title>
    <link rel="stylesheet" href="{{ asset('css.admin/login.css') }}">
</head>
<body>
    <div class="container">
        <div class="login-container">
            <h2>Login Admin</h2>

            @if ($errors->any())
                <div class="error-message">
                    {{ $errors->first() }}
                </div>
            @endif

            <form method="POST" action="/login">
                @csrf
                <label for="email">Email:</label>
                <input type="text" name="email" id="email" required>

                <label for="password">Kata Sandi:</label>
                <input type="password" name="password" id="password" required>

                <button type="submit">Login</button>
            </form>
        </div>

        <div class="image-container">
    <img src="{{ asset('storage/loginadmin.jpg') }}" alt="Login Illustration">
        </div>
    </div>
</body>
</html>
