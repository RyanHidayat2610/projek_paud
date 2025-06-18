@extends('components.layout')
<x-header-img />
@section('content')
<link rel="stylesheet" href="{{ asset('CSS/about-blade.css') }}">
            <section class="hero11">
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
        <div class="tentang-container">
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
        <div class="kegiatan-gallery">
            <div class="kegiatan-item">
                <img src="{{ asset('images/foto7.jpg') }}" alt="Kegiatan 1" onclick="tampilkanGambar(this)" class="popup-img">
                <div class="keterangan-hover">Belajar Bersama</div>
            </div>
            <div class="kegiatan-item">
                <img src="{{ asset('images/bg4.jpg') }}" alt="Kegiatan 2" onclick="tampilkanGambar(this)" class="popup-img">
                <div class="keterangan-hover">Menyanyi Bersama</div>
            </div>
            <div class="kegiatan-item">
                <img src="{{ asset('images/foto5.jpg') }}" alt="Kegiatan 3" onclick="tampilkanGambar(this)" class="popup-img">
                <div class="keterangan-hover">Kreativitas</div>
            </div>
            <div class="kegiatan-item">
                <img src="{{ asset('images/foto1.jpg') }}" alt="Kegiatan 4" onclick="tampilkanGambar(this)" class="popup-img">
                <div class="keterangan-hover">Baris Berbaris</div>
            </div>
            <div class="kegiatan-item">
                <img src="{{ asset('images/foto9.jpg') }}" alt="Kegiatan 5" onclick="tampilkanGambar(this)" class="popup-img">
                <div class="keterangan-hover">Sholat Berjamaah</div>
            </div>
            <div class="kegiatan-item">
                <img src="{{ asset('images/foto16.jpg') }}" alt="Kegiatan 6" onclick="tampilkanGambar(this)" class="popup-img">
                <div class="keterangan-hover">Menggambar Hebat</div>
            </div>
            <div class="kegiatan-item">
                <img src="{{ asset('images/foto14.jpg') }}" alt="Kegiatan 7" onclick="tampilkanGambar(this)" class="popup-img">
                <div class="keterangan-hover">Mewarnai Ceria</div>
            </div>
            <div class="kegiatan-item">
                <img src="{{ asset('images/foto11.jpg') }}" alt="Kegiatan 8" onclick="tampilkanGambar(this)" class="popup-img">
                <div class="keterangan-hover">Sikat Gigi Bersama</div>
            </div>
            <div class="kegiatan-item">
                <img src="{{ asset('images/foto4.jpg') }}" alt="Kegiatan 9" onclick="tampilkanGambar(this)" class="popup-img">
                <div class="keterangan-hover">Senam Riang Gembira</div>
            </div>
            <div class="kegiatan-item">
                <img src="{{ asset('images/bg66.jpg') }}" alt="Kegiatan 10" onclick="tampilkanGambar(this)" class="popup-img">
                <div class="keterangan-hover">Games Atraktif</div>
            </div>
            <div class="kegiatan-item">
                <img src="{{ asset('images/bg55.jpg') }}" alt="Kegiatan 11" onclick="tampilkanGambar(this)" class="popup-img">
                <div class="keterangan-hover">Belajar Menulis</div>
            </div>
            <div class="kegiatan-item">
                <img src="{{ asset('images/bg6.jpg') }}" alt="Kegiatan 12" onclick="tampilkanGambar(this)" class="popup-img">
                <div class="keterangan-hover">TIM Perancang Website</div>
            </div>
        </div>
    </section>


    <!-- Profil Guru Dinamis -->
    <section class="profil-guru">
        <h2 class="giat">Profil Guru Kami</h2>
        <div class="guru-container">
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


