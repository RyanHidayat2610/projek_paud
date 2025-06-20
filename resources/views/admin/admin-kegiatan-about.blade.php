@extends('admin.admin-components.admin-layout')

@section('content')
<link rel="stylesheet" href="{{ asset('CSS/admin-css/admin-kegiatan.css') }}">

<h2>Kelola Kegiatan (About)</h2>

{{-- Form Tambah/Edit --}}
<form id="formKegiatan" method="POST" enctype="multipart/form-data">
    @csrf
    <input type="file" name="gambar" id="gambarInput">
    <input type="text" name="keterangan" id="keteranganInput" placeholder="Keterangan Hover" required>
    <button type="submit" id="submitButton">Tambah Kegiatan</button>
    <button type="button" id="cancelEditButton" style="display: none; margin-left: 10px;" onclick="batalEdit()">Batal</button>
</form>

<hr>

{{-- Tabel Data --}}
<table>
    <thead>
        <tr>
            <th>Gambar</th>
            <th>Keterangan</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($kegiatan as $item)
            <tr>
                <td><img src="{{ asset('storage/' . $item->gambar) }}" width="100"></td>
                <td>{{ $item->keterangan }}</td>
                <td>
                    <button onclick="editKegiatan({{ $item->id }}, '{{ $item->keterangan }}')">Edit</button>
                    <button onclick="konfirmasiHapus({{ $item->id }}, '{{ $item->keterangan }}')">Hapus</button>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

{{-- Modal Konfirmasi Hapus --}}
<div id="hapusModal" class="modal-hapus" style="display: none;">
    <div class="modal-content">
        <p id="hapusText"></p>
        <form id="formHapus" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" style="background-color: red;">Ya</button>
            <button type="button" onclick="tutupModal()">Tidak</button>
        </form>
    </div>
</div>

{{-- JS --}}
<script>
    let editId = null;

    function editKegiatan(id, keterangan) {
        editId = id;
        document.getElementById('keteranganInput').value = keterangan;
        document.getElementById('formKegiatan').action = `/admin/kegiatan-about/${id}/update`;
        document.getElementById('submitButton').textContent = 'Simpan Perubahan';
        document.getElementById('cancelEditButton').style.display = 'inline-block';
    }

    function batalEdit() {
        editId = null;
        document.getElementById('formKegiatan').reset();
        document.getElementById('submitButton').textContent = 'Tambah Kegiatan';
        document.getElementById('cancelEditButton').style.display = 'none';
        document.getElementById('formKegiatan').action = `{{ route('kegiatan-about.store') }}`;
    }

    function konfirmasiHapus(id, keterangan) {
        document.getElementById('hapusModal').style.display = 'block';
        document.getElementById('hapusText').textContent = `Yakin ingin menghapus Data: "${keterangan}"?`;
        document.getElementById('formHapus').action = `/admin/kegiatan-about/${id}`;
    }

    function tutupModal() {
        document.getElementById('hapusModal').style.display = 'none';
    }
</script>
@endsection
