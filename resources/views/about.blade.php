@extends('components.layout')
<x-header-img />
@section('content')
<link rel="stylesheet" href="{{ asset('CSS/about-blade.css') }}">

<div>
    <!-- Tentang Kami Section -->
    <section class="tentang-kami">
        <div class="tentang-container">
            <div class="tentang-img">
                <img src="{{ asset('images/Tentang-kami.png') }}" alt="Tentang PAUD">
            </div>
            <div class="tentang-text">
                <h2>Tentang PAUD AL ATHIRAH</h2>
                <p><strong>PAUD AL ATHIRAH</strong> dalah lembaga pendidikan anak usia dini yang berkomitmen menciptakan lingkungan belajar yang aman, nyaman, dan menyenangkan. Kami meyakini bahwa setiap anak adalah individu istimewa dengan potensi besar yang perlu dikembangkan melalui pendidikan holistik. Dengan metode belajar sambil bermain dan nilai-nilai Islami, kami membentuk karakter anak sejak dini melalui kegiatan seperti belajar, mengaji, dan sholat berjamaah. Didukung oleh pendidik profesional, fasilitas lengkap, serta dukungan orang tua, kami siap menjadi rumah kedua bagi anak menuju masa depan yang cerah.</p>
            </div>
        </div>
    </section>

    <!-- Profil Guru Dinamis -->
    <section class="profil-guru">
        <h2>Profil Guru Kami</h2>
        <div class="guru-container">
            @foreach ($gurus as $guru)
                <div class="guru-card">
                    <img src="{{ $guru->foto_profile ? asset('storage/' . $guru->foto_profile) : asset('images/default.jpg') }}" alt="{{ $guru->nama }}" onclick="tampilkanGambar(this)">
                    <h3>{{ $guru->nama }}</h3>
                    <p><strong>{{ $guru->jenis_guru }}</strong></p>
                    <p><em>{{ $guru->riwayat_sekolah }}</em></p>
                    <p>Hobi: {{ $guru->hobi }}</p>
                    <p>"{{ $guru->motivasi }}"</p>
                </div>
            @endforeach
        </div>
    </section>
<div>
    <section class="kegiatan">
        <h2>Kegiatan Kami</h2>
        <div class="kegiatan-gallery">
            <div class="kegiatan-item">
                <img src="{{ asset('images/kreatif.jpg') }}" alt="Kegiatan 1">
                <div class="keterangan-hover">Kegiatan Kreatif</div>
            </div>
            <div class="kegiatan-item">
                <img src="{{ asset('images/ngaji.jpg') }}" alt="Kegiatan 2">
                <div class="keterangan-hover">Kegiatan Ngaji</div>
            </div>
            <div class="kegiatan-item">
                <img src="{{ asset('images/sholat.jpg') }}" alt="Kegiatan 3">
                <div class="keterangan-hover">Kegiatan Sholat</div>
            </div>
            <div class="kegiatan-item">
                <img src="{{ asset('images/menggambar.jpg') }}" alt="Kegiatan 4">
                <div class="keterangan-hover">Kegiatan Menggambar</div>
            </div>
            <div class="kegiatan-item">
                <img src="{{ asset('images/sholat1.jpg') }}" alt="Kegiatan 4">
                <div class="keterangan-hover">Kegiatan Sholat</div>
            </div>
            <div class="kegiatan-item">
                <img src="{{ asset('images/kreatif2.jpg') }}" alt="Kegiatan 1">
                <div class="keterangan-hover">Kegiatan Kreatif</div>
            </div>
            <div class="kegiatan-item">
                <img src="{{ asset('images/sholat2.jpg') }}" alt="Kegiatan 1">
                <div class="keterangan-hover">Kegiatan Sholat</div>
            </div>
            <div class="kegiatan-item">
                <img src="{{ asset('images/ngaji1.jpg') }}" alt="Kegiatan 1">
                <div class="keterangan-hover">Kegiatan Ngaji</div>
            </div>
            <div class="kegiatan-item">
                <img src="{{ asset('images/belajar.jpg') }}" alt="Kegiatan 1">
                <div class="keterangan-hover">Kegiatan Belajar</div>
            </div>
            <div class="kegiatan-item">
                <img src="{{ asset('images/belajar1.jpg') }}" alt="Kegiatan 1">
                <div class="keterangan-hover">Kegiatan Belajar</div>
            </div>
            <div class="kegiatan-item">
                <img src="{{ asset('images/kunjung.jpg') }}" alt="Kegiatan 1">
                <div class="keterangan-hover">Kegiatan Kunjungan</div>
            </div>
            <div class="kegiatan-item">
                <img src="{{ asset('images/kunjung2.jpg') }}" alt="Kegiatan 1">
                <div class="keterangan-hover">Kegiatan Kunjungan</div>
            </div>
        </div>
    </section>
</div>
    <!-- Modal Gambar -->
    <div id="modalGambar" class="modal-gambar">
        <span class="tutup" onclick="tutupModal()">&times;</span>
        <img class="modal-konten" id="gambarPerbesar">
    </div>

    <!-- Kegiatan dan Program (tetap bisa ditambahkan di bawah) -->

</div>
@endsection

@section('scripts')
<script>
    function tampilkanGambar(imgElement) {
        var modal = document.getElementById("modalGambar");
        var modalImg = document.getElementById("gambarPerbesar");
        modal.style.display = "block";
        modalImg.src = imgElement.src;
    }

    function tutupModal() {
        document.getElementById("modalGambar").style.display = "none";
    }

    window.onclick = function(event) {
        var modal = document.getElementById("modalGambar");
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
</script>
@endsection
