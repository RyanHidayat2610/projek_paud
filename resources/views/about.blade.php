@extends('components.layout')

@section('content')
<link rel="stylesheet" href="{{ asset('CSS/about-blade.css') }}">

<div>
    <!-- Hero Section -->
    <section class="hero">
        <div class="overlay"></div>
        <img src="{{ asset('images/bg-paud.jpg') }}" alt="Background" class="bg-img">
    </section>

    <!-- Tentang Kami Section -->
    <section class="tentang-kami">
        <div class="tentang-container">
            <div class="tentang-img">
                <img src="{{ asset('images/Tentang-kami.jpg') }}" alt="Tentang PAUD">
            </div>
            <div class="tentang-text">
                <h2>Tentang PAUD AL ATHIRAH</h2>
                <p><strong>PAUD AL ATHIRAH</strong> adalah fasilitas pendidikan anak usia dini yang berkomitmen untuk memberikan lingkungan belajar yang aman, nyaman, dan menyenangkan bagi anak-anak.</p>
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
