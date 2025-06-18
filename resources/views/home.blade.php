@extends('components.layout')
<x-header-img />
@section('content')


            <!-- Tentang Kami Section -->
            <section class="hero1">
                <div class="overlay1"></div>
                <div class="hero-text1">
                    <h2 class="pauddd">Selamat Datang di Website Resmi</h2>
                    <h1 class="paud">PAUD AL-ATHIRAH</h1>                    
                    <h2 class="paudd">Tempat anak belajar dan bertumbuh</h2>
                    <p>Halo Ayah, Bunda, dan Ananda tercinta! <br>Selamat datang di PAUD Al-Qur'an Al-Athirah. 
                    Di sini, kami percaya bahwa setiap anak unik dan istimewa. Melalui kegiatan belajar yang kreatif dan penuh cinta, kami siap menemani langkah kecil mereka menuju masa depan gemilang.</p>
                </div>
            </section>


            <!-- Kegiatan Unggulan Kami -->
            <section class="kegiatan">
                <h2>Kegiatan Kami</h2>
                <div class="kegiatan-gallery">
                    <div class="kegiatan-item">
                        <img src="{{ asset('images/Kegiatan.1.jpg') }}" alt="Kegiatan 1">
                    </div>
                    <div class="kegiatan-item">
                        <img src="{{ asset('images/Kegiatan.2.jpg') }}" alt="Kegiatan 2">
                    </div>
                    <div class="kegiatan-item">
                        <img src="{{ asset('images/Kegiatan.3.jpg') }}" alt="Kegiatan 3">
                    </div>
                    <div class="kegiatan-item">
                        <img src="{{ asset('images/Kegiatan.4.jpg') }}" alt="Kegiatan 4">
                    </div>
                </div>
            </section>
            <!-- Program PAUD Khairani -->
            <link rel="stylesheet" href="{{ asset('CSS/kegiatan-blade.css') }}">
            <section class="program">
                <h2>Program PAUD AL ATHIRAH</h2>
                <div class="program-cards">
                    <div class="program-card">
                        <div class="program-shape shape-1">
                            <img src="{{ asset('images/kreatif.jpg') }}" alt="Belajar Bersama" class="hover-img">
                            <h3>Belajar Bersamaaa</h3>
                            <p>Anak-anak antusias mengikuti kegiatan belajar bersama di PAUD kami.</p>
                        </div>
                    </div>
                    <div class="program-card">
                        <div class="program-shape shape-2" style="background-image: url('makan-bersama.jpg');">
                            <img src="{{ asset('images/ngaji.jpg') }}" alt="Mengaji Bersama" class="hover-img">
                            <h3>Mengaji Bersama</h3>
                            <p>Anak-anak di PAUD kami mengaji bersama dalam suasana ceria.</p>
                        </div>
                    </div>
                    <div class="program-card">
                        <div class="program-shape shape-3">
                            <img src="{{ asset('images/sholat.jpg') }}" alt="Sholat Bersama" class="hover-img">
                            <h3>Sholat Bersama</h3>
                            <p>Anak-anak PAUD kami melakukan Sholat secara berjamaah.</p>
                        </div>
                    </div>
                    <div class="program-card">
                    <div class="program-shape shape-4">
                        <img src="{{ asset('images/periksa.jpg') }}" alt="Periksa Kesehatan" class="hover-img">
                        <h3>Pemeriksaan Kesehatan</h3>
                        <p>Dilakukan pemeriksaan gigi terhadap anak-anak PAUD kami.</p>
                    </div>
                    </div>
                    <div class="program-card">
                    <div class="program-shape shape-5">
                        <img src="{{ asset('images/diskusi.jpg') }}" alt="Diskusi Bersama" class="hover-img">
                        <h3>Diskusi Bersama</h3>
                        <p>Anak-anak PAUD kami melakukan diskusi terkait pembelajaran.</p>
                    </div>
                    </div>
                    <div class="program-card">
                        <div class="program-shape shape-5">
                            <img src="{{ asset('images/seni.jpg') }}" alt="Kesenian" class="hover-img">
                            <h3>Kesenian</h3>
                            <p>Anak-anak PAUD kami menunjukkan baju adat dan budaya.</p>
                        </div>
                    </div>
                </div>
            </section>

        </div>
@endsection