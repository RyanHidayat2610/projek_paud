<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Reset Password</title>
</head>
<body>
    <p>Halo,</p>
    <p>Anda menerima email ini karena kami menerima permintaan reset kata sandi.</p>

    <p>
        Klik tautan di bawah ini untuk mengatur ulang kata sandi Anda:
        <br>
        <a href="{{ url('/new-password/' . $token . '?role=' . $role) }}">
            Reset Kata Sandi
        </a>
    </p>

    <p>Tautan akan kadaluarsa dalam 60 menit.</p>
    <p>Jika Anda tidak meminta reset, abaikan email ini.</p>

    <p>Terima kasih,<br>Tim Website Anda</p>
</body>
</html>
