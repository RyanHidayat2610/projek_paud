<!-- resources/views/auth/register.blade.php -->
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Daftar Akun</title>
    <link rel="stylesheet" href="{{ asset('CSS/register.css') }}">
    <link rel="stylesheet" href="{{ asset('CSS/back-button.css') }}">
</head>
<body>
    <div class="btn-group">
        <a href="{{ url()->previous() }}" class="btn-kembalii">← Kembali</a>
        <a href="/home" class="btn-home">← Ke Beranda</a>
    </div>

    <div class="form-container">
        <h2>Daftar Akun</h2>
        <form id="registerForm" method="POST" action="/register" onsubmit="return showConfirmation(event)">
            @csrf
            <input type="text" name="username" id="username" placeholder="Username" maxlength="20" required>
            <input type="email" name="email" id="email" placeholder="Email" pattern=".+@gmail\.com" required>
            <input type="text" name="no_hp" id="no_hp" placeholder="No HP" pattern="[0-9]{12,}" required>
            
            <div class="password-wrapper">
                <input type="password" name="password" id="password" placeholder="Password" minlength="6" required>
                <span class="toggle-password" onclick="togglePassword('password')">👁</span>
            </div>

            <div class="password-wrapper">
                <input type="password" id="confirm_password" placeholder="Konfirmasi Password" minlength="6" required>
                <span class="toggle-password" onclick="togglePassword('confirm_password')">👁</span>
            </div>

            <button type="submit">Daftar</button>
        </form>

        <p>Sudah punya akun? <a href="/login">Login</a></p>

        @if ($errors->any())
            <div class="error">{{ $errors->first() }}</div>
        @endif
    </div>

    <!-- Modal Konfirmasi -->
    <div class="modal" id="confirmModal">
        <div class="modal-content">
            <h3>Konfirmasi Data</h3>
            <p><strong>Username:</strong> <span id="confirmUsername"></span></p>
            <p><strong>Email:</strong> <span id="confirmEmail"></span></p>
            <p><strong>No HP:</strong> <span id="confirmNoHP"></span></p>
            <div class="modal-actions">
                <button onclick="submitForm()">Iya, Lanjut</button>
                <button onclick="closeModal()">Tidak</button>
            </div>
        </div>
    </div>

    <script>
        function togglePassword(id) {
            const input = document.getElementById(id);
            input.type = input.type === 'password' ? 'text' : 'password';
        }

        function showConfirmation(event) {
            event.preventDefault();
            const password = document.getElementById('password').value;
            const confirmPassword = document.getElementById('confirm_password').value;
            if (password !== confirmPassword) {
                alert('Konfirmasi password tidak cocok.');
                return false;
            }

            // Isi data ke modal
            document.getElementById('confirmUsername').innerText = document.getElementById('username').value;
            document.getElementById('confirmEmail').innerText = document.getElementById('email').value;
            document.getElementById('confirmNoHP').innerText = document.getElementById('no_hp').value;

            document.getElementById('confirmModal').style.display = 'flex';
            return false;
        }

        function closeModal() {
            document.getElementById('confirmModal').style.display = 'none';
        }

        function submitForm() {
            document.getElementById('registerForm').submit();
        }
    </script>
</body>
</html>
