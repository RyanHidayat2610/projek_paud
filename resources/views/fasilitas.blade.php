@extends('components.layout')
<x-header-img />

@section('content')
<link rel="stylesheet" href="{{ asset('CSS/kegiatan-blade.css') }}">
<!-- AOS CSS -->
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<!-- AOS JS -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init();
</script>


<section class="hero1" >
    <div class="overlay1"></div>
    <div class="hero-text1">
        <h2 class="pauddd">Selamat Datang di Website Resmi</h2>
        <h1 class="paud">PAUD AL-ATHIRAH</h1>                    
        <h2 class="paudd1">Tempat anak belajar dan bertumbuh</h2>
        <p>Halo Ayah, Bunda, dan Ananda tercinta! <br>Di PAUD AL-ATHIRAH, kami menyediakan fasilitas yang aman, nyaman, dan edukatif untuk mendukung proses belajar anak-anak secara optimal. 
        Dari ruang kelas interaktif hingga area bermain yang menyenangkan, semua dirancang untuk mendorong eksplorasi dan tumbuh kembang anak.</p>
    </div>
</section>
        
<section class="program-section">
    <h2 class="program-title">Fasilitas PAUD AL ATHIRAH</h2>
    <div class="program-wrapper">
        @foreach ($programs as $program)
            <div class="program-item" data-aos="fade-up">
                <div class="program-content" >
                    <img 
                        src="{{ asset('storage/' . $program->img) }}" 
                        alt="{{ $program->title }}" 
                        class="program-img popup-img"
                        onclick="tampilkanGambar(this)">
                    <div class="program-overlay">
                        <h3>{{ $program->title }}</h3>
                        <p>{{ $program->desc }}</p>
                    </div>
                </div>
            </div>
        @endforeach

    </div>
</section>
@endsection
