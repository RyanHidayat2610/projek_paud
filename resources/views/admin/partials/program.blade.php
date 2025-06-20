<form action="{{ route('program.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <input type="file" name="gambar" required>
    <input type="text" name="title" placeholder="Judul Program" required>
    <textarea name="desc" placeholder="Deskripsi Program" required></textarea>
    <button type="submit">Tambah Program</button>
</form>
