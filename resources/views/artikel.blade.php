@extends('components.layout')
<x-header-img />
@section('content')
<link rel="stylesheet" href="{{ asset('CSS/artikel-blade.css') }}">

<section class="artikel-horizontal">
    <h2>Artikel Edukasi</h2>
    <div class="artikel-container">
        @foreach ($artikels as $artikel)
        <div class="artikel-item" onclick="openModal({{ $artikel->id }})">
            <div class="artikel-images">
                @if ($artikel->gambar1)
                    <img src="{{ asset('storage/' . $artikel->gambar1) }}" alt="Gambar 1">
                @endif
            </div>
            <div class="artikel-content">
                <h3>{{ $artikel->judul }}</h3>
                <p>{{ \Illuminate\Support\Str::limit($artikel->konten, 150) }}</p>
                <span class="tanggal-artikel">{{ $artikel->created_at->format('d M Y') }}</span>
                <a href="#" class="btn-artikel">Baca Selengkapnya</a>
            </div>
        </div>

        {{-- Modal --}}
        <div id="modal-{{ $artikel->id }}" class="modal-overlay" onclick="closeModal(event, {{ $artikel->id }})">
            <div class="modal-content" onclick="event.stopPropagation()">
                <span class="close-btn" onclick="closeModal(event, {{ $artikel->id }})">&times;</span>
                <h2>{{ $artikel->judul }}</h2>
                <p>{{ $artikel->konten }}</p>
                @if ($artikel->gambar2)
                    <img src="{{ asset('storage/' . $artikel->gambar2) }}" alt="Gambar 2" class="modal-image">
                @endif
            </div>
        </div>
        @endforeach
    </div>
</section>

<script>
    function openModal(id) {
        document.getElementById(`modal-${id}`).style.display = 'flex';
    }

    function closeModal(e, id) {
        document.getElementById(`modal-${id}`).style.display = 'none';
    }
</script>
@endsection
