<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    {{-- CSS Utama --}}
    <link rel="stylesheet" href="{{ asset('CSS/style.css') }}">
    <link rel="stylesheet" href="{{ asset('CSS/pop-up.css') }}">

    {{-- Stack CSS tambahan (misal: header-img.css) --}}
    @stack('styles')

    <title>{{ $title ?? 'Judul Default' }}</title>
</head>

<body>
    
    {{-- Wrapper keseluruhan --}}
    <div class="app-wrapper">

        {{-- Komponen Navigasi --}}
        <x-nav-bar />
        
        {{-- Konten Utama Halaman --}}
        <main>
            @yield('content')
        </main>

        {{-- Komponen Footer --}}
        <x-footer />
    </div>

    {{-- JS Utama --}}
    <script src="{{ asset('js/slider.js') }}"></script>
    <script src="{{ asset('js/pop-up.js') }}"></script>
    {{-- Stack Script Tambahan --}}
    @stack('scripts')
</body>
</html>
