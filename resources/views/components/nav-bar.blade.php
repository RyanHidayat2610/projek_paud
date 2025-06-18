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
                <li><a href="{{ url('/home') }}">Home</a></li>
                <li><a href="{{ url('/fasilitas') }}">Fasilitas</a></li>
                <li><a href="{{ url('/pendaftaran') }}">Pendaftaran</a></li>
                <li><a href="{{ url('/about') }}">Tentang Kami</a></li>
                <li><a href="{{ url('/artikel') }}">Artikel</a></li>
              @if (session('user_id') && session('role') === 'user')
    <li class="username">
        <span class="halo-username">Halo, {{ \App\Models\User::find(session('user_id'))->username }}</span>
    </li>
    <li class="logout">
        <a href="{{ route('logout') }}" class="logout-link">LOGOUT</a>
    </li>
@else
    <li class="masuk"><a href="{{ url('/login') }}">MASUK</a></li>
    <li class="daftar"><a href="{{ url('/register') }}">DAFTAR</a></li>
@endif

            </ul>
        </nav>
    </div>
</header>

@push('scripts')
<script>
    function toggleMenu() {
        document.getElementById('navLinks').classList.toggle('active');
    }
</script>
@endpush
