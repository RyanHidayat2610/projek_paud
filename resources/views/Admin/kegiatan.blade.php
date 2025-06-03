<!DOCTYPE html>
<html>
<head>
    <title>Edit Kegiatan</title>
    <style>
        .form-container {
            width: 500px;
            margin: 50px auto;
            background: #fff;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 0 10px #ddd;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h2>Edit Kegiatan</h2>
        <form method="POST" action="{{ route('admin.kegiatan.update', $kegiatan->id_kegiatan) }}" enctype="multipart/form-data">
            @csrf
            <label>Judul</label>
            <input type="text" name="judul" value="{{ $kegiatan->judul }}" required><br><br>

            <label>Ganti Gambar (opsional)</label><br>
            <input type="file" name="gambar[]" multiple><br>
            <small>Biarkan kosong jika tidak ingin mengganti</small><br><br>

            <button type="submit">Update</button>
        </form>
    </div>
</body>
</html>

<style>.kegiatan-table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
}
.kegiatan-table th, .kegiatan-table td {
    padding: 10px;
    border: 1px solid #ddd;
    text-align: center;
}
.kegiatan-table img {
    border-radius: 4px;
}
.edit-btn {
    background: #f0ad4e;
    color: white;
    padding: 5px 10px;
    border-radius: 5px;
    text-decoration: none;
}
</style>