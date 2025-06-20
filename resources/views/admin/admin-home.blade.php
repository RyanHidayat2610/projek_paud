@extends('admin.admin-components.admin-layout')

@section('content')
<link rel="stylesheet" href="{{ asset('CSS/admin-css/admin-home.blade.css') }}">
<div class="container-admin">
        <h2 class="judul-admin">Kelola Program</h2>

        @if(isset($editProgram))
            {{-- Form Edit Program --}}
            <form class="form-admin" action="{{ route('program.update', $editProgram->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <input type="text" name="title" value="{{ $editProgram->title }}" required>
                <textarea name="desc" rows="3" required>{{ $editProgram->desc }}</textarea>
                <input type="file" name="gambar">
                <div style="display: flex;">
                    <button type="submit">Simpan Perubahan</button>
                    <a href="{{ route('program.cancel') }}" class="btn-batal">Batal</a>
                </div>
            </form>
        @else
            {{-- Form Tambah Program --}}
            <form class="form-admin" action="{{ route('program.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="text" name="title" placeholder="Judul Program" required>
                <textarea name="desc" rows="3" placeholder="Deskripsi Program" required></textarea>
                <input type="file" name="gambar" required>
                <button type="submit">Tambah Program</button>
            </form>
        @endif

        <table class="admin-table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Judul</th>
                    <th>Deskripsi</th>
                    <th>Gambar</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($programs as $index => $program)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $program->title }}</td>
                    <td>{{ $program->desc }}</td>
                    <td><img src="{{ asset('storage/' . $program->gambar) }}" width="80"></td>
                    <td class="admin-action-buttons">
                        <a href="{{ route('program.edit', $program->id) }}" class="btn-edit">Edit</a>
                        <form action="{{ route('program.delete', $program->id) }}" method="POST" onsubmit="return confirm('Hapus program ini?')">
                            @csrf
                            @method('DELETE')
                            <button class="btn-hapus" type="submit">Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

        <h2 class="judul-admin">Kelola Kegiatan</h2>

        @if(isset($editKegiatan))
            {{-- Form Edit Kegiatan --}}
            <form class="form-admin" action="{{ route('kegiatan.update', $editKegiatan->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <textarea name="desckegiatan" rows="3" required>{{ $editKegiatan->desckegiatan }}</textarea>
                <input type="file" name="gambar">
                <div style="display: flex;">
                    <button type="submit">Simpan Perubahan</button>
                    <a href="{{ route('kegiatan.cancel') }}" class="btn-batal">Batal</a>
                </div>
            </form>
        @else
            {{-- Form Tambah Kegiatan --}}
            <form class="form-admin" action="{{ route('kegiatan.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <textarea name="desckegiatan" rows="3" placeholder="Deskripsi Kegiatan" required></textarea>
                <input type="file" name="gambar" required>
                <button type="submit">Tambah Kegiatan</button>
            </form>
        @endif

        <table class="admin-table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Deskripsi</th>
                    <th>Gambar</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($kegiatans as $index => $kegiatan)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $kegiatan->desckegiatan }}</td>
                    <td><img src="{{ asset('storage/' . $kegiatan->gambar) }}" width="80"></td>
                    <td class="admin-action-buttons">
                        <a href="{{ route('kegiatan.edit', $kegiatan->id) }}" class="btn-edit">Edit</a>
                        <form action="{{ route('kegiatan.delete', $kegiatan->id) }}" method="POST" onsubmit="return confirm('Hapus kegiatan ini?')">
                            @csrf
                            @method('DELETE')
                            <button class="btn-hapus" type="submit">Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
</div>
@endsection
