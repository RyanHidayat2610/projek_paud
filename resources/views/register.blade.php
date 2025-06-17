<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Daftar Akun</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('CSS/admin-css/admin-login.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>
<body>
    <div class="left-image">
        <img src="{{ asset('images/admin/sekolah-login.jpg') }}" alt="Foto Sekolah">
    </div>

    <div class="right-form">
        <div class="card">

            @if (session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('register') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="username" class="form-label">Nama Pengguna</label>
                    <input type="username" name="username" class="form-control" id="username" required autofocus>
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Alamat Email</label>
                    <input type="email" name="email" class="form-control" id="email" required>
                </div>

                <div class="mb-3 password-toggle" style="position: relative;">
                    <label for="password" class="form-label">Kata Sandi</label>
                    <input type="password" name="password" class="form-control" id="password" required>
                    <i class="bi bi-eye-slash password-toggle-icon" id="togglePassword" style="cursor: pointer; position: absolute; top: 50px; right: 10px;"></i>
                </div>

                <div class="mb-3 password-toggle" style="position: relative;">
                    <label for="password_confirmation" class="form-label">Konfirmasi Kata Sandi</label>
                    <input type="password" name="password_confirmation" class="form-control" id="password_confirmation" required>
                    <i class="bi bi-eye-slash password-toggle-icon" id="toggleConfirmPassword" style="cursor: pointer; position: absolute; top: 50px; right: 10px;"></i>
                </div>

                
                <script>
                    function setupPasswordToggle(inputId, toggleId) {
                        const input = document.querySelector(inputId);
                        const toggle = document.querySelector(toggleId);

                        toggle.addEventListener('click', function () {
                            const type = input.getAttribute('type') === 'password' ? 'text' : 'password';
                            input.setAttribute('type', type);
                            this.classList.toggle('bi-eye');
                            this.classList.toggle('bi-eye-slash');
                        });
                    }

                    setupPasswordToggle('#password', '#togglePassword');
                    setupPasswordToggle('#password_confirmation', '#toggleConfirmPassword');
                </script>

                <button type="submit" class="btn btn-success w-100">Daftar</button>
            </form>

            <div class="mt-3 text-center">
             
            </div>
        </div>
    </div>
</body>
</html>