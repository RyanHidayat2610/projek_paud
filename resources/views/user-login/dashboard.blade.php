<!-- resources/views/user-login/dashboard.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <link rel="stylesheet" href="{{ asset('CSS/dashboard.css') }}">
    <link rel="stylesheet" href="{{ asset('CSS/back-button.css') }}">
</head>
<body>
     <div class="btn-group">
        <a href="{{ url()->previous() }}" class="btn-kembalii">← Kembali</a>
        <a href="/home" class="btn-home">← Ke Beranda</a>
    </div>
        <h2>Selamat Datang, {{ $user->username }}</h2>
        <p>Email: {{ $user->email }}</p>
        <p>No HP: {{ $user->no_hp }}</p>
        <a href="/logout">Logout</a>

        <h3 style="margin-top: 30px;">Data Pendaftaran Anak Anda</h3>

        @if ($data_anak->count() > 0)
            <table>
                <thead>
                    <tr>
                        <th>Nama Anak</th>
                        <th>Tempat Lahir</th>
                        <th>Tanggal Lahir</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data_anak as $anak)
                        <tr>
                            <td>{{ $anak->nama }}</td>
                            <td>{{ $anak->tempat_lahir }}</td>
                            <td>{{ \Carbon\Carbon::parse($anak->tanggal_lahir)->format('d-m-Y') }}</td>
                            <td class="status {{ strtolower($anak->status) }}">{{ $anak->status ?? 'Proses' }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <p>Anda belum mengisi formulir pendaftaran anak.</p>
        @endif
    </div>
</body>
</html>
