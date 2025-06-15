@extends('components.layout')

@section('content')
<link rel="stylesheet" href="{{ asset('CSS/formulir-blade.css') }}">



<div class="form-container1">

    <!-- Tabel Persyaratan -->
    <table class="persyaratan-table">
        <thead>
            <tr>
                <th>No</th>
                <th>Persyaratan</th>
            </tr>
        </thead>
        <tbody>
            <tr><td>1</td><td>Fotokopi Akte Kelahiran</td></tr>
            <tr><td>2</td><td>Fotokopi Kartu Keluarga</td></tr>
            <tr><td>3</td><td>Pas Foto 3x4 (2 lembar)</td></tr>
            <!-- Tambahkan sesuai kebutuhan -->
        </tbody>
    </table>

    <!-- Alert Berhasil -->
    @if (session('success'))
        <div class="alert-success">{{ session('success') }}</div>
    @endif

    <!-- Formulir Pendaftaran -->
    <form id="formulir-anak" method="POST" action="/formulir-anak" enctype="multipart/form-data" onsubmit="return confirm('Apakah data yang Anda isi sudah benar?')">
        @csrf

        <label for="nama">Nama Anak</label>
        <input name="nama" id="nama" placeholder="Nama Lengkap Anak" required>

        <label for="tempat_lahir">Tempat Lahir</label>
        <input name="tempat_lahir" id="tempat_lahir" placeholder="Contoh: Makassar" required>

        <label for="tanggal_lahir">Tanggal Lahir</label>
        <div class="tanggal-wrapper">
            <input type="date" name="tanggal_lahir" id="tanggal_lahir" required>
            <small>Tanggal lahir anak Anda</small>
        </div>

        <label for="gender">Jenis Kelamin</label>
        <select name="gender" id="gender" required>
            <option value="">Pilih Gender</option>
            <option value="Laki-laki">Laki-laki</option>
            <option value="Perempuan">Perempuan</option>
        </select>

        <label for="agama">Agama</label>
        <input name="agama" id="agama" placeholder="Contoh: Islam" required>

        <label for="hobi">Hobi</label>
        <input name="hobi" id="hobi" placeholder="Contoh: Menggambar">

        <label for="nama_ayah">Nama Ayah</label>
        <input name="nama_ayah" id="nama_ayah" required>

        <label for="nama_ibu">Nama Ibu</label>
        <input name="nama_ibu" id="nama_ibu" required>

        <label for="jarak_rumah">Jarak Rumah ke Sekolah</label>
        <input name="jarak_rumah" id="jarak_rumah" placeholder="Contoh: 2 km" required>

        <label for="foto_akte">Upload Akte Kelahiran</label>
        <input type="file" name="foto_akte" id="foto_akte" accept=".jpg,.jpeg,.png,.pdf">

        <label for="foto_kk">Upload Kartu Keluarga</label>
        <input type="file" name="foto_kk" id="foto_kk" accept=".jpg,.jpeg,.png,.pdf">

        <!-- Tombol Kirim dan Batal -->
        <div class="form-buttons">
            <button type="submit">Kirim</button>
            <button type="button" id="resetBtn" style="display: none;" onclick="resetForm()">Batal</button>
        </div>
    </form>
</div>

<!-- Script Batal -->
<script>
    const form = document.getElementById('formulir-anak');
    const resetBtn = document.getElementById('resetBtn');

    form.addEventListener('input', () => {
        resetBtn.style.display = 'inline-block';
    });

    function resetForm() {
        form.reset();
        resetBtn.style.display = 'none';
    }
</script>
@endsection
