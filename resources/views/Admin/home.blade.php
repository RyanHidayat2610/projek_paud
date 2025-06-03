<!-- resources/views/admin/home.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Dashboard Admin</title>
    <link rel="stylesheet" href="{{ asset('css/admin/home.css') }}">
    

    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background: #f0f2f5;
            padding: 40px;
            margin: 0;
        }

        .dashboard-container {
            background: #fff;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            width: 100%;
            max-width: 700px;
            margin: auto;
        }

        h1 {
            font-size: 28px;
            margin-bottom: 10px;
            color: #333;
        }

        p {
            margin-bottom: 30px;
            color: #555;
        }

        .card {
            background-color: #f9f9f9;
            border: 1px solid #e0e0e0;
            padding: 25px;
            border-radius: 10px;
        }

        .card h2 {
            margin-bottom: 20px;
            color: #2c3e50;
        }

        label {
            font-weight: 600;
            display: block;
            margin-bottom: 5px;
        }

        input[type="text"],
        textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 6px;
            margin-bottom: 15px;
            resize: vertical;
        }

        button {
            background-color: #3490dc;
            color: white;
            border: none;
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
            border-radius: 6px;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #2779bd;
        }

        .success-message {
            background-color: #e1f3e8;
            color: #2e7d32;
            padding: 10px 15px;
            margin-bottom: 15px;
            border-left: 5px solid #2e7d32;
            border-radius: 5px;
        }

        a.logout-btn {
            display: inline-block;
            margin-top: 20px;
            text-decoration: none;
            color: white;
            background: #e3342f;
            padding: 10px 20px;
            border-radius: 5px;
        }

        a.logout-btn:hover {
            background: #cc1f1a;
        }
    </style>
</head>
<body>
    <div class="dashboard-container">
        <h1>Selamat Datang, {{ session('admin_nama') ?? 'Admin' }}</h1>
        <p>Ini adalah halaman dashboard utama admin.</p>

        {{-- Form Tentang PAUD --}}
        <div class="card">
            <h2>Tentang PAUD</h2>

            @if(session('success'))
                <div class="success-message">
                    {{ session('success') }}
                </div>
            @endif

            <form method="POST" action="{{ route('admin.tentang.update') }}">
                @csrf

                <label for="judul">Judul</label>
                <input type="text" id="judul" name="judul" value="{{ old('judul', $tentang->judul ?? '') }}" required>

                <label for="deskripsi">Deskripsi</label>
                <textarea id="deskripsi" name="deskripsi" rows="5" required>{{ old('deskripsi', $tentang->deskripsi ?? '') }}</textarea>

                <button type="submit">Simpan Tentang PAUD</button>
            </form>
        </div>

        <a href="/logout" class="logout-btn">Logout</a>
    </div>
    {{-- === FORM 2: Kegiatan === --}}
<div class="card">
    <h2>Tambah Kegiatan</h2>

    @if(session('success_kegiatan'))
        <div class="success-message">
            {{ session('success_kegiatan') }}
        </div>
    @endif

    <form method="POST" action="{{ route('admin.kegiatan.store') }}" enctype="multipart/form-data">
        @csrf

        <label for="judul_kegiatan">Judul Kegiatan</label>
        <input type="text" id="judul_kegiatan" name="judul" required>

        <label for="gambar">Upload Gambar (maksimal 5)</label>
        <input type="file" id="gambar" name="gambar[]" accept="image/*" multiple required>

        <small style="font-size: 12px; color: gray;">* Maksimal 5 gambar, format .jpg/.png</small><br><br>

        <button type="submit">Simpan Kegiatan</button>
        @if(isset($kegiatanList))
    <div class="card">
        <h2>Daftar Kegiatan</h2>

        <table style="width:100%; border-collapse: collapse;">
            <thead>
                <tr style="background:#f0f0f0;">
                    <th style="padding:8px; border:1px solid #ddd;">Judul</th>
                    <th style="padding:8px; border:1px solid #ddd;">Gambar</th>
                    <th style="padding:8px; border:1px solid #ddd;">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($kegiatanList as $kegiatan)
                    <tr>
                        <td style="padding:8px; border:1px solid #ddd;">{{ $kegiatan->judul }}</td>
                        <td style="padding:8px; border:1px solid #ddd;">
                            @foreach(json_decode($kegiatan->gambar, true) as $img)
                                <img src="{{ asset('uploads/kegiatan/' . $img) }}" alt="gambar" width="60">
                            @endforeach
                        </td>
                        <td style="padding:8px; border:1px solid #ddd;">
                            <a href="{{ route('admin.kegiatan.edit', $kegiatan->id_kegiatan) }}" style="color: blue;">Edit</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endif

    </form>
</div>

</body>
</html>
