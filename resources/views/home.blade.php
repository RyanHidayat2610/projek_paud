@extends('components.layout')
<x-header-img />
@section('content')

<!-- CSS -->
<link rel="stylesheet" href="{{ asset('CSS/kegiatan-only.css') }}">
<link rel="stylesheet" href="{{ asset('CSS/program-only.css') }}">


<!-- AOS CSS -->
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<!-- AOS JS -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init();
</script>



<!-- Tentang Kami Section -->
<section class="hero1">
    <div class="overlay1"></div>
    <div class="hero-text1">
        <h2 class="pauddd">Selamat Datang di Website Resmi</h2>
        <h1 class="paud">PAUD AL-ATHIRAH</h1>                    
        <h2 class="paudd1">Tempat anak belajar dan bertumbuh</h2>
        <p>
            Halo Ayah, Bunda, dan Ananda tercinta! <br>
            Selamat datang di PAUD Al-Qur'an Al-Athirah. Di sini, kami percaya bahwa setiap anak unik dan istimewa. 
            Melalui kegiatan belajar yang kreatif dan penuh cinta, kami siap menemani langkah kecil mereka menuju masa depan gemilang.
        </p>
    </div>
</section>


    <section class="program-section-home">
        <h2 class="program-title-home">Program Unggulan</h2>

        <div class="program-wrapper-home">
            @foreach($programs as $p)
            <div class="program-card-home" data-aos="fade-up">
                <div class="program-shape-home">
                    <img src="{{ asset('storage/' . $p->gambar) }}" alt="{{ $p->title }}"  onclick="tampilkanGambar(this)" class="kegiatan-popup-img">
                    <h3>{{ $p->title }}</h3>
                    <p>{{ $p->desc }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </section>

<!-- Program PAUD AL ATHIRAH -->

<!-- Kegiatan Kami -->
<section class="kegiatan-section">
    <h2 class="kegiatan-title">Kegiatan Kami</h2>

    @foreach($kegiatans as $k)
    <div class="kegiatan-item">
        <div class="kegiatan-overlay-container" data-aos="zoom-in">
            <img src="{{ asset('storage/' . $k->gambar) }}" alt="Kegiatan" onclick="tampilkanGambar(this)" class="kegiatan-popup-img">
            <div class="kegiatan-overlay-text">{{ $k->desckegiatan }}</div>
        </div>
    </div>
    @endforeach
    
</section>



@endsection
