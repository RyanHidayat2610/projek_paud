@extends('components.layout')
<x-header-img />
@section('content')
<link rel="stylesheet" href="{{ asset('CSS/about-blade.css') }}">

<!-- AOS CSS -->
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<!-- AOS JS -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init();
</script>
            <section class="hero11"data-aos="fade-up">
                <div class="overlay1"></div>
                <div class="hero-text1">
                    <h2 class="pauddd">Selamat Datang di Website Resmi</h2>
                    <h1 class="paud">PAUD AL-ATHIRAH</h1>                    
                    <h2 class="paudd1">Tempat anak belajar dan bertumbuh</h2>
                    <p>Halo Ayah, Bunda, dan Ananda tercinta! <br> PAUD AL-ATHIRAH adalah lembaga pendidikan anak usia dini yang berdedikasi untuk menciptakan lingkungan belajar yang positif dan menyenangkan. 
                    Dengan tenaga pendidik profesional dan pendekatan pembelajaran yang sesuai usia, kami hadir untuk mendampingi tumbuh kembang si kecil dengan sepenuh hati.</p>
                </div>
            </section>
<div>
    <!-- Tentang Kami Section -->
    <section class="tentang-kami">
        <div class="tentang-container"data-aos="fade-up">
            <div class="tentang-img">
                <img src="{{ asset('images/Tentang-kami.jpg') }}" alt="Tentang PAUD" onclick="tampilkanGambar(this)" class="popup-img">
            </div>
            <div class="tentang-text">
                <h2>Tentang PAUD AL ATHIRAH</h2>
                <p><strong>PAUD AL ATHIRAH</strong> adalah fasilitas pendidikan anak usia dini yang berkomitmen untuk memberikan lingkungan belajar yang aman, nyaman, dan menyenangkan bagi anak-anak. Kami percaya bahwa setiap anak adalah individu yang istimewa dengan potensi yang sangat besar yang perlu dikembangkan melalui pendidikan yang menyeluruh dan holistik.</p>
            </div>
        </div>
    </section>

    <section class="kegiatan1">
        <h2 class="giat">Kegiatan Kami</h2>
        <div class="kegiatan-gallery" data-aos="fade-up">
            @foreach ($kegiatan_about as $item)
                <div class="kegiatan-item">
                    <img src="{{ asset('storage/' . $item->gambar) }}" alt="Kegiatan" onclick="tampilkanGambar(this)" class="popup-img">
                    <div class="keterangan-hover">{{ $item->keterangan }}</div>
                </div>
            @endforeach
        </div>
    </section>

    <!-- Profil Guru Dinamis -->
    <section class="profil-guru">
        <h2 class="giat">Profil Guru Kami</h2>
        <div class="guru-container"data-aos="fade-up">
            @foreach ($gurus as $guru)
                <div class="guru-card">
                    <img src="{{ $guru->foto_profile ? asset('storage/' . $guru->foto_profile) : asset('images/default.jpg') }}" alt="{{ $guru->nama }}" onclick="tampilkanGambar(this)" class="popup-img">
                    <h3>{{ $guru->nama }}</h3>
                    <p><strong>{{ $guru->jenis_guru }}</strong></p>
                    <p><em>{{ $guru->riwayat_sekolah }}</em></p>
                    <p>Hobi: {{ $guru->hobi }}</p>
                    <p>"{{ $guru->motivasi }}"</p>
                </div>
            @endforeach
        </div>
    </section>


    <!-- Modal Gambar -->
    <div id="modalGambar" class="modal-gambar">
        <span class="tutup" onclick="tutupModal()">&times;</span>
        <img class="modal-konten" id="gambarPerbesar">
    </div>

    <!-- Kegiatan dan Program (tetap bisa ditambahkan di bawah) -->

</div>



@endsection


