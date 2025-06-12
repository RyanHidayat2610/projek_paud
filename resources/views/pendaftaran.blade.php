@extends('components.layout')

@section('content')
        <div>
                <!-- Hero Section -->
            <section class="hero">
                <div class="overlay"></div>
                <img src="{{ asset('images/bg4-paud.jpg') }}" alt="Background" class="bg-img">
                <div class="hero-content">
                    <div class="hero-text">
                        <h3>PAUD AL ATHIRAH</h3>
                        <h1>Tempat anak belajar<br> dan bertumbuh</h1>
                        <p>Segera daftarkan anak Anda!</p>
                        <a href="/formulir" class="btn-daftar">Daftar</a>
                    </div>
                </div>
                
            </section> 
        </div>
@endsection
