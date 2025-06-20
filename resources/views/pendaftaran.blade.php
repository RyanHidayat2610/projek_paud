@extends('components.layout')
<x-header-img />
@section('content')
<link rel="stylesheet" href="{{ asset('CSS/pendaftaran-blade.css') }}">
<link rel="stylesheet" href="{{ asset('CSS/kegiatan-blade.css') }}">


<!-- AOS CSS -->
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<!-- AOS JS -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init();
</script>

            <section class="hero1">
                <div class="overlay1"></div>
                <div class="hero-text1">
                    <h2 class="pauddd">Selamat Datang di Website Resmi</h2>
                    <h1 class="paud">PAUD AL-ATHIRAH</h1>                    
                    <h2 class="paudd1">Tempat anak belajar dan bertumbuh</h2>
                    <p>Halo Ayah, Bunda, dan Ananda tercinta! <br>Bergabunglah bersama keluarga besar PAUD AL-ATHIRAH. Pendaftaran kini lebih mudah dan cepat. 
                    Kami siap menerima peserta didik baru dengan penuh semangat dan tanggung jawab untuk membantu membentuk generasi masa depan yang ceria, cerdas, dan berkarakter.</p>
                </div>
            </section>
       
            <!-- Hero Section -->
            <section class="hero123">
                <div class="overlay1"data-aos="fade-up"></div>
                <div class="hero-text123" >
                    <h3 >PAUD AL ATHIRAH</h3>
                    <h1 >Tempat anak belajar dan bertumbuh </h1>
                    <p >Segera daftarkan anak Anda! </p>
                    @php $userLoggedIn = session('user_id'); @endphp
                    <a href="{{ $userLoggedIn ? '/formulir' : '/login' }}" class="btn-daftar1">Daftar</a>
                </div>
            </section>

       
@endsection
