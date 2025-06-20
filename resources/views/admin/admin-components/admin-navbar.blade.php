<header>
    <link rel="stylesheet" href="{{ asset('CSS/admin-css/admin-navbar.css') }}">
    <div class="container nav-container">
        <div class="logo">
            <img src="{{ asset('images/LOGO.PNG') }}" alt="Foto Sekolah">
            <span>ADMIN PAUD AL ATHIRAH</span>
        </div>

        <nav>
            <ul>
                <li><a href="{{ route('admin.home') }}">Kelola Home</a></li>
                <li><a href="{{ route('guru.index') }}">Manajemen Guru</a></li>
                <li><a href="{{ url('/admin/pendaftar') }}">Pendaftar</a></li>
                <li><a href="{{ url('/admin/artikel') }}">Artikel</a></li>
                <li><a href="{{ route('kegiatan-about.index') }}">Kegiatan About</a></li> 
                <li><a href="{{ route('admin.fasilitas.index') }}">Fasilitas Program</a></li>
                <li><a href="{{ route('admin.slider.index') }}">Slider</a></li>
<!-- Tambahan -->
            </ul>
        </nav>


    </div>
</header>
