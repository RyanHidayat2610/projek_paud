@extends('admin.admin-components.admin-layout')

@section('content')
    <link rel="stylesheet" href="{{ asset('CSS/admin-css/admin-artikel.css') }}">
    <div class="admin-artikel-container">
        <h2 class="admin-title">Manajemen Artikel</h2>

        @if(session('success'))
            <div class="flash-message">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ isset($artikel) ? route('artikel.update', $artikel->id) : route('artikel.store') }}" method="POST" class="form">
            @csrf
            @if(isset($artikel))
                @method('PUT')
            @endif

            <div class="form-group">
                <label for="judul">Judul</label>
                <input type="text" name="judul" id="judul" value="{{ old('judul', $artikel->judul ?? '') }}" required>
            </div>

            <div class="form-group">
                <label for="konten">Konten</label>
                <textarea name="konten" id="konten" rows="4" required>{{ old('konten', $artikel->konten ?? '') }}</textarea>
            </div>

            <button type="submit" class="button-submit">
                {{ isset($artikel) ? 'Perbarui Artikel' : 'Tambah Artikel' }}
            </button>
        </form>

        <table class="admin-artikel-table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Judul</th>
                    <th>Konten</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($artikels as $index => $item)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $item->judul }}</td>
                        <td>{{ \Illuminate\Support\Str::limit($item->konten, 100) }}</td>
                        <td>
                            <a href="{{ route('artikel.edit', $item->id) }}">Edit</a>
                            <form action="{{ route('artikel.destroy', $item->id) }}" method="POST" style="display:inline;" onsubmit="return confirm('Yakin hapus artikel ini?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr><td colspan="4">Belum ada artikel.</td></tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection
