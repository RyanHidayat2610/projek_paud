<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Atur Ulang Password Admin</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('CSS/admin-css/admin-reset.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

</head>
<body>
    <div class="left-form">
        <div class="card">
            <h4>Atur Ulang Password</h4>

            @if ($errors->any())
                <div class="alert alert-danger">
                    @foreach ($errors->all() as $error)
                        <div>{{ $error }}</div>
                    @endforeach
                </div>
            @endif

            <form action="{{ url('/admin/reset-password/' . $token) }}" method="POST">
                @csrf
                <div class="mb-3 password-toggle">
                    <label for="password" class="form-label">Password Baru</label>
                    <input type="password" name="password" class="form-control" id="password" required>
                    <i class="bi bi-eye-slash password-toggle-icon" id="togglePassword"></i>
                </div>

                <div class="mb-3 password-toggle">
                    <label for="password_confirmation" class="form-label">Konfirmasi Password</label>
                    <input type="password" name="password_confirmation" class="form-control" id="password_confirmation" required>
                    <i class="bi bi-eye-slash password-toggle-icon" id="toggleConfirmPassword"></i>
                </div>

                <script src="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.js"></script>
<script>
    const togglePassword = document.getElementById('togglePassword');
    const password = document.getElementById('password');

    togglePassword.addEventListener('click', function () {
        const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
        password.setAttribute('type', type);
        this.classList.toggle('bi-eye');
        this.classList.toggle('bi-eye-slash');
    });

    const toggleConfirmPassword = document.getElementById('toggleConfirmPassword');
    const confirmPassword = document.getElementById('password_confirmation');

    toggleConfirmPassword.addEventListener('click', function () {
        const type = confirmPassword.getAttribute('type') === 'password' ? 'text' : 'password';
        confirmPassword.setAttribute('type', type);
        this.classList.toggle('bi-eye');
        this.classList.toggle('bi-eye-slash');
    });
</script>

                <button type="submit" class="btn btn-primary">Ubah Password</button>
            </form>
        </div>
    </div>

    <div class="right-image">
        <img src="{{ asset('images/admin/sekolah-login.jpg') }}" alt="Foto Sekolah">
    </div>
</body>
</html>