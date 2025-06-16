@extends('components.layout')

@section('content')
<link rel="stylesheet" href="{{ asset('CSS/artikel-blade.css') }}">

<!-- Hero Section -->
<section class="hero">
    <div class="overlay"></div>
    <img src="{{ asset('images/bg-paud.jpg') }}" alt="Background" class="bg-img">
</section>

<!-- Artikel Section -->
<section class="artikel-horizontal">
    <h2>Artikel Edukasi</h2>
    <div class="artikel-container">
        @foreach ($artikels as $index => $artikel)
        <div class="artikel-wrapper">
            <div class="artikel-item">
                @if ($artikel->gambar1)
                <div class="artikel-images">
                    <img src="{{ asset('storage/' . $artikel->gambar1) }}" alt="Gambar Artikel">
                </div>
                @endif

                <div class="artikel-content">
                    <h3>{{ $artikel->judul }}</h3>
                    <span class="tanggal-artikel">{{ $artikel->created_at->format('d M Y') }}</span>

                    <div class="artikel-detail" id="detail-{{ $artikel->id }}">
                        <div class="detail-inner">
                            @php
                                $kontenFull = strip_tags($artikel->konten);
                                $paragrafList = preg_split('/\r\n|\r|\n/', $kontenFull);
                            @endphp

                            @foreach ($paragrafList as $paragraf)
                                @if (!empty(trim($paragraf)))
                                    <p>{{ $paragraf }}</p>
                                @endif
                            @endforeach

                            @if ($artikel->gambar2)
                                <img src="{{ asset('storage/' . $artikel->gambar2) }}" alt="Gambar Tambahan" class="detail-image">
                            @endif
                        </div>
                    </div>

                    <div class="btn-wrapper" id="btn-wrapper-{{ $artikel->id }}">
                        <a href="javascript:void(0);" class="btn-artikel" id="btn-{{ $artikel->id }}"
                           onclick="toggleDetail({{ $artikel->id }})">
                            Baca Selengkapnya
                        </a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>

    <!-- Tombol Toggle Semua Artikel -->
    <div class="btn-wrapper">
        <a href="javascript:void(0);" class="btn-artikel" id="toggleArtikelBtn" onclick="toggleArtikel()">
            Baca Semua Artikel
        </a>
    </div>
</section>

<!-- Script Toggle -->
<script>
    function toggleDetail(id) {
        const detail = document.getElementById(`detail-${id}`);
        const btn = document.getElementById(`btn-${id}`);
        const isOpen = detail.classList.contains('open');

        detail.classList.toggle('open');
        btn.textContent = isOpen ? 'Baca Selengkapnya' : 'Tutup';
    }

    let semuaArtikelTampil = false;

    function toggleArtikel() {
        const wrappers = document.querySelectorAll('.artikel-wrapper');
        const toggleBtn = document.getElementById('toggleArtikelBtn');

        semuaArtikelTampil = !semuaArtikelTampil;

        wrappers.forEach((item, index) => {
            if (index >= 3) {
                item.style.display = semuaArtikelTampil ? 'flex' : 'none';
            }
        });

        toggleBtn.textContent = semuaArtikelTampil ? 'Tutup Semua Artikel' : 'Baca Semua Artikel';
    }

    // Tampilkan hanya 3 artikel di awal
    document.addEventListener('DOMContentLoaded', function () {
        const wrappers = document.querySelectorAll('.artikel-wrapper');
        wrappers.forEach((item, index) => {
            if (index >= 3) {
                item.style.display = 'none';
            }
        });
    });
</script>
@endsection
