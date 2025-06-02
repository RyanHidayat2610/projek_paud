<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Kelola Konten</title>
</head>
<body>
    <h2>Daftar Konten</h2>
    <a href="{{ route('konten.create') }}">Tambah Konten</a>
    @foreach($kontens as $konten)
        <div>
            <h3>{{ $konten->jenis_konten }}</h3>
            <p>{{ $konten->isi_teks }}</p>
            @if($konten->gambar_path)
                <img src="{{ asset('storage/' . $konten->gambar_path) }}" width="100">
            @endif
            <a href="{{ route('konten.edit', $konten->id) }}">Edit</a>
            <form action="{{ route('konten.destroy', $konten->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit">Hapus</button>

::contentReference[oaicite:130]{index=130}

