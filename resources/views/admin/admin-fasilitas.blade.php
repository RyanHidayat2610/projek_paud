@extends('admin.admin-components.admin-layout')

@section('content')
<link rel="stylesheet" href="{{ asset('CSS/admin-css/admin-fasilitas.css') }}">

<h2>Kelola Fasilitas Program</h2>

@if(session('success'))
    <div class="alert-success">{{ session('success') }}</div>
@endif

<form action="{{ isset($editProgram) ? route('admin.fasilitas.update', $editProgram->id) : route('admin.fasilitas.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    @if(isset($editProgram))
        @method('PUT')
        <input type="hidden" name="id" value="{{ $editProgram->id }}">
    @endif

    <input type="file" name="img" @if(!isset($editProgram)) required @endif>
    <input type="text" name="title" placeholder="Judul Fasilitas" value="{{ $editProgram->title ?? '' }}" required>
    <input type="text" name="desc" placeholder="Deskripsi" value="{{ $editProgram->desc ?? '' }}" required>
    
    <button type="submit">
        {{ isset($editProgram) ? 'Simpan Perubahan' : 'Tambah Fasilitas' }}
    </button>

    @if(isset($editProgram))
        <a href="{{ route('admin.fasilitas.index') }}" class="btn-batal">Batal</a>
    @endif
</form>

<hr>

<table>
    <thead>
        <tr>
            <th>Gambar</th>
            <th>Judul</th>
            <th>Deskripsi</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($fasilitas as $item)
            <tr>
                <td><img src="{{ asset('storage/' . $item->img) }}" width="100"></td>
                <td>{{ $item->title }}</td>
                <td>{{ $item->desc }}</td>
                <td>
                    <a href="{{ route('admin.fasilitas.edit', $item->id) }}" class="btn-edit">Edit</a>
                    
                    <button onclick="confirmHapus({{ $item->id }}, '{{ $item->title }}')" class="btn-hapus">Hapus</button>
                    
                    <form id="form-hapus-{{ $item->id }}" action="{{ route('admin.fasilitas.destroy', $item->id) }}" method="POST" style="display:none">
                        @csrf
                        @method('DELETE')
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

<!-- Modal Hapus -->
<div id="modalHapus" class="modal-hapus" style="display:none;">
    <div class="modal-content">
        <p id="modal-text">Yakin ingin menghapus data ini?</p>
        <button type="button" onclick="submitHapus()">Ya</button>
        <button type="button" onclick="tutupModal()">Tidak</button>
    </div>
</div>

<script>
    let idHapus = null;

    function confirmHapus(id, title) {
        idHapus = id;
        document.getElementById('modal-text').innerText = `Yakin ingin menghapus Data "${title}"?`;
        document.getElementById('modalHapus').style.display = 'flex';
    }

    function submitHapus() {
        document.getElementById('form-hapus-' + idHapus).submit();
    }

    function tutupModal() {
        document.getElementById('modalHapus').style.display = 'none';
    }
</script>
@endsection
