@extends('components.layout')

@section('content')
<link rel="stylesheet" href="{{ asset('CSS/pendaftar-blade.css') }}">

        <div>
            <!-- Hero Section -->
            <section class="hero">
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
