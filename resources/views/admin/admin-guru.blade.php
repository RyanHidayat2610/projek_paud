@extends('admin.admin-components.admin-layout')

@section('content')
<link rel="stylesheet" href="{{ asset('CSS/admin-css/admin-guru.css') }}">

<div class="admin-guru-container">
    <h2 class="admin-title">Manajemen Data Guru</h2>

    @if(session('success'))
        <div class="flash-message">{{ session('success') }}</div>
    @endif

    <!-- Form Tambah/Edit -->
    <form action="{{ isset($guru) ? route('guru.update', $guru->id) : route('guru.store') }}" method="POST" enctype="multipart/form-data" class="guru-form">
        @csrf
        @if(isset($guru))
            @method('PUT')
        @endif

        <input type="text" name="nama" placeholder="Nama" value="{{ old('nama', $guru->nama ?? '') }}" required>
        <input type="text" name="jenis_guru" placeholder="Jenis Guru" value="{{ old('jenis_guru', $guru->jenis_guru ?? '') }}" required>
        <textarea name="riwayat_sekolah" placeholder="Riwayat Sekolah" required>{{ old('riwayat_sekolah', $guru->riwayat_sekolah ?? '') }}</textarea>
        <textarea name="hobi" placeholder="Hobi" required>{{ old('hobi', $guru->hobi ?? '') }}</textarea>
        <textarea name="motivasi" placeholder="Motivasi" required>{{ old('motivasi', $guru->motivasi ?? '') }}</textarea>
        <input type="file" name="foto_profile">

        <div class="form-buttons">
            <button type="submit">
                {{ isset($guru) ? 'Simpan Perubahan' : 'Tambah Guru' }}
            </button>
            @if(isset($guru))
                <a href="{{ route('guru.index') }}" class="btn-batal">Batal</a>
            @endif
        </div>
    </form>

    <!-- Tabel Data Guru -->
    <table class="admin-table">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Jenis</th>
                <th>Riwayat</th>
                <th>Hobi</th>
                <th>Motivasi</th>
                <th>Foto</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse($gurus as $index => $item)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $item->nama }}</td>
                    <td>{{ $item->jenis_guru }}</td>
                    <td>{{ $item->riwayat_sekolah }}</td>
                    <td>{{ $item->hobi }}</td>
                    <td>{{ $item->motivasi }}</td>
                    <td>
                        @if($item->foto_profile)
                            <img src="{{ asset('storage/' . $item->foto_profile) }}" alt="Foto" width="60">
                        @else
                            <span>Tidak ada foto</span>
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('guru.edit', $item->id) }}" class="btn-edit">Edit</a>
                        <form action="{{ route('guru.destroy', $item->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus data ini?')" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn-hapus">Hapus</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr><td colspan="8">Belum ada data guru.</td></tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
