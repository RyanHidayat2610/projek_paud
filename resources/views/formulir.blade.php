@extends('components.layout')

@section('content')
        <div>
            <style>
            body, html {
                margin: 0;
                padding: 0;
                font-family: sans-serif;
            }

            .hero {
                position: relative;
                width: 100%;
                height: 100vh;
                overflow: hidden;
            }

            .bg-img {
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                object-fit: cover;
                filter: blur(5px);
                z-index: -1;
            }

            form {
                position: relative;
                z-index: 1;
                background-color: rgba(255, 255, 255, 0.9);
                padding: 20px;
                max-width: 500px;
                margin: 50px auto;
                border-radius: 8px;
            }

            input, select {
                width: 100%;
                padding: 8px;
                margin: 8px 0;
            }

            button {
                padding: 10px 20px;
                background-color: #4CAF50;
                color: white;
                border: none;
                cursor: pointer;
            }

            button:hover {
                background-color: #45a049;
            }

            
            </style>
                <!-- <h1 style="text-align: center;">ANJAY</h1> -->
                <section class="hero">
                    <img src="{{ asset('images/bg-paud.jpg') }}" alt="Background" class="bg-img">
                </section>

                @if (session('success'))
                    <div style="color: green; text-align: center;">{{ session('success') }}</div>
                @endif

                <form method="POST" action="/formulir-anak" enctype="multipart/form-data">
                    @csrf
                    <input name="nama" placeholder="Nama" required><br>
                    <input name="tempat_lahir" placeholder="Tempat Lahir" required><br>
                    <input type="date" name="tanggal_lahir" required><br>

                    <select name="gender" required>
                        <option value="">Pilih Gender</option>
                        <option value="Laki-laki">Laki-laki</option>
                        <option value="Perempuan">Perempuan</option>
                    </select><br>

                    <input name="agama" placeholder="Agama" required><br>
                    <input name="hobi" placeholder="Hobi"><br>
                    <input name="nama_ayah" placeholder="Nama Ayah" required><br>
                    <input name="nama_ibu" placeholder="Nama Ibu" required><br>
                    <input name="jarak_rumah" placeholder="Jarak ke Sekolah" required><br>

                    <label>Upload Akte Kelahiran:</label>
                    <input type="file" name="foto_akte" accept=".jpg,.jpeg,.png,.pdf"><br>

                    <label>Upload Kartu Keluarga:</label>
                    <input type="file" name="foto_kk" accept=".jpg,.jpeg,.png,.pdf"><br>

                    <button type="submit">Kirim</button>
                </form>
        </div>
@endsection



