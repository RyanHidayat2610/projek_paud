@extends('components.layout')

@section('content')
    <div>
        <!-- Hero Section -->
        <section class="hero">
            <div class="overlay"></div>
            <img src="{{ asset('images/bg-paud.jpg') }}" alt="Background" class="bg-img">
        </section>

        <!-- Artikel Terbaru -->
        <section class="artikel-section">
            <h2>Artikel Terbaru</h2>
            <table class="artikel-table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Judul</th>
                        <th>Konten</th>
                        <th>Tanggal</th>
                        <th>Gambar</th> {{-- Tambahkan kolom baru --}}
                    </tr>
                </thead>
                <tbody>
                    @forelse ($artikels as $index => $artikel)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>{{ $artikel->judul }}</td>
                            <td>{{ \Illuminate\Support\Str::limit($artikel->konten, 100) }}</td>
                            <td>{{ $artikel->created_at->format('d M Y') }}</td>
                            <td>
                                @if($artikel->gambar1)
                                    <img src="{{ asset('storage/' . $artikel->gambar1) }}" width="80" alt="Gambar 1">
                                @endif
                                @if($artikel->gambar2)
                                    <img src="{{ asset('storage/' . $artikel->gambar2) }}" width="80" alt="Gambar 2">
                                @endif
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" style="text-align: center;">Belum ada artikel tersedia.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </section>
    </div>
@endsection
