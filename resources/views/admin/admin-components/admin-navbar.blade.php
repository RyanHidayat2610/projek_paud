<header>
    <link rel="stylesheet" href="{{ asset('CSS/admin-css/admin-navbar.css') }}">
    <div class="container nav-container">
        <div class="logo">
            <img src="logo.png" alt="Logo PAUD Khairani">
            <span>ADMIN PAUD AL ATHIRAH</span>
        </div>

        <nav>
            <ul>
                @if (session('user_id') && session('role') === 'admin')
    <li class="username"><a href="#">Admin: {{ \App\Models\Admin::find(session('user_id'))->username }}</a></li>
    <li class="logout"><a href="{{ route('logout') }}">LOGOUT</a></li>
@else
    <li><a href="{{ url('/admin/login') }}">LOGIN ADMIN</a></li>
@endif

                <li><a href="{{ url('/admin/home') }}">Home</a></li>
                <li><a href="{{ route('guru.index') }}">Manajemen Guru</a></li>
                <li><a href="{{ url('/admin/pendaftar') }}">Pendaftar</a></li>
                <li><a href="{{ url('/admin/artikel') }}">Artikel</a></li>
            </ul>
        </nav>

    </div>
</header>
