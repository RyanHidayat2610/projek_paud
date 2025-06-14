<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Reset Password</title>
</head>
<body>
    <p>Halo Admin,</p>
    <p>Silakan klik tautan di bawah ini untuk mengatur ulang kata sandi Anda:</p>
    <p>
        <a href="{{ $resetLink }}">{{ $resetLink }}</a>
    </p>
    <p>Link ini akan kedaluwarsa dalam 60 menit.</p>
    <p>Jika Anda tidak meminta pengaturan ulang, abaikan email ini.</p>
    <p>Terima kasih</p>
</body>
</html>
