<header>
    <link rel="stylesheet" href="{{ asset('CSS/navbar-blade.css') }}">

    <div class="nav-container">
        <!-- Kiri: Logo dan Judul -->
        <div class="nav-left">
            <div class="logo">
                <img src="{{ asset('images/LOGO.PNG') }}" alt="Logo PAUD Khairani">
                <span>PAUD AL ATHIRAH</span>
            </div>
        </div>

        <!-- Toggle button for mobile -->
        <div class="menu-toggle" onclick="toggleMenu()">☰</div>

        <!-- Kanan: Navigasi -->
        <nav class="nav-right">
            <ul id="navLinks">
                <li><a class="ikan" href="{{ url('/home') }}">Home</a></li>
                <li><a class="ikan" href="{{ url('/fasilitas') }}">Fasilitas</a></li>
                <li><a class="ikan" href="{{ url('/pendaftaran') }}">Pendaftaran</a></li>
                <li><a class="ikan" href="{{ url('/about') }}">Tentang Kami</a></li>
                <li><a class="ikan" href="{{ url('/artikel') }}">Artikel</a></li>
                <li class="masuk"><a href="{{ url('/login') }}">MASUK</a></li>
                <li class="daftar"><a href="{{ url('/register') }}">DAFTAR</a></li>
            </ul>
        </nav>
    </div>
</header>

@push('scripts')

<script>
document.addEventListener('DOMContentLoaded', function() {
    const header = document.querySelector('header');
    const scrollThreshold = 100; // 10cm/100px threshold
    
    function updateNavbar() {
        if (window.scrollY > scrollThreshold) {
            // Jika scroll melebihi threshold, tambahkan background
            header.classList.add('solid');
            header.classList.remove('transparent');
        } else {
            // Jika masih di atas threshold, biarkan transparan
            header.classList.add('transparent');
            header.classList.remove('solid');
        }
    }
    
    // Set initial state
    updateNavbar();
    
    // Optimasi performa scroll event
    let ticking = false;
    window.addEventListener('scroll', function() {
        if (!ticking) {
            window.requestAnimationFrame(function() {
                updateNavbar();
                ticking = false;
            });
            ticking = true;
        }
    });
});
</script>

<script>
    function toggleMenu() {
        document.getElementById('navLinks').classList.toggle('active');
    }
</script>
@endpush
