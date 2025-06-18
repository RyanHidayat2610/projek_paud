<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Login Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('CSS/admin-css/admin-login.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

</head>
<body>
    <div class="left-image">
        <img src="{{ asset('images/Asta.png') }}" alt="Foto Sekolah">
    </div>

    <div class="right-form">
        <div class="card">
            <h4>Login Admin</h4>

            @if (session('error'))
                <div class="alert alert-danger">{{ session('error') }}</div>
            @endif

            @if (session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif

            <form method="POST" action="{{ url('/admin/login') }}">
                @csrf
                <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" name="username" class="form-control" id="username" required autofocus>
                </div>
                <div class="mb-3 password-toggle">
    <label for="password" class="form-label">Kata Sandi</label>
    <input type="password" name="password" class="form-control" id="password" required>
    <i class="bi bi-eye-slash password-toggle-icon" id="togglePassword"></i>
                </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.js"></script>
<script>
    const togglePassword = document.querySelector('#togglePassword');
    const password = document.querySelector('#password');

    togglePassword.addEventListener('click', function () {
        // Toggle the type attribute
        const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
        password.setAttribute('type', type);

        // Toggle the eye / eye-slash icon
        this.classList.toggle('bi-eye');
        this.classList.toggle('bi-eye-slash');
    });
</script>

                <button type="submit" class="btn btn-primary">Masuk</button>
            </form>
            <a href="{{ route('admin.reset') }}">Lupa Kata Sandi?</a>
        </div>
    </div>
</body>
</html>