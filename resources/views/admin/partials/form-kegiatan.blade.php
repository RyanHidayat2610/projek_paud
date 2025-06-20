<form action="{{ route('kegiatan.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <input type="file" name="gambar" required>
    <textarea name="desckegiatan" placeholder="Teks saat hover" required></textarea>
    <button type="submit">Tambah Kegiatan</button>
</form>
