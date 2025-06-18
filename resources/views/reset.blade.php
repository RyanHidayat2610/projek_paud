<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Reset Sandi</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
<<<<<<< HEAD
    <link rel="stylesheet" href="{{ asset('CSS/admin/admin-reset.css') }}">
=======
    <link rel="stylesheet" href="{{ asset('CSS/admin-css/admin-reset.css') }}">
>>>>>>> b46bec25cce7620f4446f5eb8b7ac81d8670dc75
</head>
<body>
    <div class="left-form">
        <div class="card">
            <h4>Reset Kata Sandi</h4>

            {{-- Pesan Error --}}
            @if (session('error'))
                <div class="alert alert-danger">{{ session('error') }}</div>
            @endif

            {{-- Pesan Sukses --}}
            @if (session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif

            {{-- Form Reset --}}
            <form method="POST" action="{{ route('send.reset.link') }}">
                @csrf
                <div class="mb-3">
                    <label for="email" class="form-label">Alamat Email</label>
                    <input type="email" name="email" class="form-control" id="email" required autofocus>
                </div>
                <button type="submit" class="btn btn-primary">Kirim Tautan Reset</button>
            </form>

            {{-- Link kembali ke login (dinamis berdasarkan role jika disediakan) --}}
            <a href="{{ route('login') }}">← Kembali ke Login</a>
        </div>
    </div>

    <div class="right-image">
        <img src="{{ asset('images/admin/sekolah-login.jpg') }}" alt="Foto Sekolah">
    </div>
</body>
<<<<<<< HEAD
</html>
=======
</html>
>>>>>>> b46bec25cce7620f4446f5eb8b7ac81d8670dc75
