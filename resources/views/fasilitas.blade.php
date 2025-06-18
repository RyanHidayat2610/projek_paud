@extends('components.layout')
<x-header-img />
@section('content')
<link rel="stylesheet" href="{{ asset('CSS/kegiatan-blade.css') }}">

        <section class="hero1">
                <div class="overlay1"></div>
                <div class="hero-text1">
                    <h2 class="pauddd">Selamat Datang di Website Resmi</h2>
                    <h1 class="paud">PAUD AL-ATHIRAH</h1>                    
                    <h2 class="paudd1">Tempat anak belajar dan bertumbuh</h2>
                    <p>Halo Ayah, Bunda, dan Ananda tercinta! <br>Di PAUD AL-ATHIRAH, kami menyediakan fasilitas yang aman, nyaman, dan edukatif untuk mendukung proses belajar anak-anak secara optimal. 
                    Dari ruang kelas interaktif hingga area bermain yang menyenangkan, semua dirancang untuk mendorong eksplorasi dan tumbuh kembang anak.</p>
                </div>
        </section>
        
        <div>
            <section class="program-section">
                <h2 class="program-title">Fasilitas PAUD AL ATHIRAH</h2>
                <div class="program-wrapper">
                    @php
                        $programs = [
                            ['img' => 'bg1.jpg', 'title' => 'Bangunan Sekolah', 'desc' => 'Anak-anak antusias mengikuti kegiatan belajar bersama di PAUD kami'],
                            ['img' => 'Kegiatan.2.jpg', 'title' => 'Halaman Kelas', 'desc' => 'Anak-anak di PAUD kami berbaris bersama dalam suasana ceria sebelum mengikuti pembelajaran'],
                            ['img' => 'bg3.jpg', 'title' => 'Ruangan Kelas A', 'desc' => 'Ruangan kelas yang nyaman dan aman untuk anak-anak PAUD kami.'],
                            ['img' => 'foto9.jpg', 'title' => 'Ruangan Kelas B', 'desc' => 'Sama dengan kelas A, anak-anak sangat senang di dalam kelasnya'],
                            ['img' => 'foto10.jpg', 'title' => 'Mural Inspiratif', 'desc' => 'Memberikan warna dan pesan positif bagi anak-anak PAUD kami'],
                            ['img' => 'Kegiatan.3.jpg', 'title' => 'Ayunan Bersama', 'desc' => 'Sebagaian dari kegiatan bermain, anak-anak PAUD kami sangat senang bermain ayunan'],
                            ['img' => 'Kegiatan.4.jpg', 'title' => 'Prosotan Kuning', 'desc' => 'Prosotan kuning menjadi favorit anak-anak PAUD kami untuk bermain'],
                        ];
                    @endphp

                    @foreach ($programs as $program)
                        <div class="program-item">
                            <div class="program-content">
                                <img 
                                    src="{{ asset('images/' . $program['img']) }}" 
                                    alt="{{ $program['title'] }}" 
                                    onclick="tampilkanGambar(this)" 
                                    class="program-img popup-img" 
                                    style="cursor:pointer;">
                                <div class="program-overlay">
                                    <h3>{{ $program['title'] }}</h3>
                                    <p>{{ $program['desc'] }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </section>
        </div>
@endsection
