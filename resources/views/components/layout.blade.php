<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    {{-- CSS Utama --}}
    <link rel="stylesheet" href="{{ asset('CSS/style.css') }}">
    <link rel="stylesheet" href="{{ asset('CSS/pop-up.css') }}">
    <link rel="stylesheet" href="{{ asset('CSS/about-blade.css') }}">
    <link rel="stylesheet" href="{{ asset('CSS/kegiatan-blade.css') }}">
    <link rel="stylesheet" href="{{ asset('CSS/popup-wa.css') }}">
    
    {{-- Stack CSS tambahan jika ada --}}
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

    {{-- MODAL GAMBAR (Perbesar Gambar) --}}
    <div id="modalGambar" style="display:none; position:fixed; z-index:9999; top:0; left:0; width:100%; height:100%; background:rgba(0,0,0,0.8);">
        <span class="tutup" style="position:absolute; top:20px; right:30px; font-size:40px; color:#fff; cursor:pointer;">&times;</span>
        <img id="gambarPerbesar" style="margin:auto; display:block; max-width:80%; max-height:80%; position:absolute; top:50%; left:50%; transform:translate(-50%, -50%); box-shadow: 0 0 15px #000;">
    </div>

    {{-- JS Utama --}}
    <script src="{{ asset('js/slider.js') }}"></script>
    <script src="{{ asset('js/pop-up.js') }}"></script>

    {{-- Stack Script Tambahan --}}
    @stack('scripts')


    <!-- Floating Chat Button -->
<div id="floating-popup" onclick="togglePopup()">
    <img src="{{ asset('images/chat-icon.png') }}" alt="Chat" class="popup-icon">
</div>

<div class="floating-social">
    <!-- Instagram -->
    <div class="floating-btn instagram" onclick="togglePopup('instagram')">
        <img src="{{ asset('images/Instagram-.png') }}" alt="Instagram">
    </div>

    <!-- WhatsApp -->
    <div class="floating-btn whatsapp" onclick="togglePopup('whatsapp')">
        <img src="{{ asset('images/WhatsApp-.png') }}" alt="WhatsApp">
    </div>
</div>

<!-- Popup -->
<div id="popup-instagram" class="social-popup">
    <div class="popup-box">
        <p>Yuk, kunjungi Instagram kami!</p>
        <a href="https://www.instagram.com/imamhzf" target="_blank">Buka Instagram</a>
        <button onclick="closePopup('instagram')">Tutup</button>
    </div>
</div>

<div id="popup-whatsapp" class="social-popup">
    <div class="popup-box">
        <p>Hai! Hubungi kami lewat WhatsApp</p>
        <a href="https://wa.me/6285342614904" target="_blank">Buka WhatsApp</a>
        <button onclick="closePopup('whatsapp')">Tutup</button>
    </div>
</div>




<script>
    function togglePopup(type) {
        const popup = document.getElementById('popup-' + type);
        // Sembunyikan popup lain
        document.querySelectorAll('.social-popup').forEach(p => {
            if (p !== popup) p.style.display = 'none';
        });

        // Toggle popup saat ini
        popup.style.display = (popup.style.display === 'block') ? 'none' : 'block';
    }

    function closePopup(type) {
        document.getElementById('popup-' + type).style.display = 'none';
    }

    // Tutup popup jika klik di luar
    window.addEventListener('click', function (e) {
        document.querySelectorAll('.social-popup').forEach(popup => {
            if (!popup.contains(e.target) && !e.target.closest('.floating-btn')) {
                popup.style.display = 'none';
            }
        });
    });
</script>



</body>
</html>
