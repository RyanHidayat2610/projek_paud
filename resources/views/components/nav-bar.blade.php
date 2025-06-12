 <header>
        <div class="container nav-container">
            <div class="logo">
                <img src="logo.png" alt="Logo PAUD Khairani">
                <span>PAUD AL ATHIRAH</span>
            </div>
            <nav>
                <ul>
                    <li><a href="{{ url('/home') }}">Home</a></li>
                    <li><a href="{{ url('/fasilitas') }}">Fasilitas</a></li>
                    <li><a href="{{ url('/pendaftaran') }}">Pendaftaran</a></li>
                    <li><a href="{{ url('/about') }}">Tentang Kami</a></li>
                    <li><a href="{{ url('/artikel') }}">Artikel</a></li>
                    <li class="masuk"><a href="{{ url('/login') }}">MASUK</a></li>
                    <li class="daftar"><a href="{{ url('/daftar') }}">DAFTAR</a></li>                    
                </ul>
            </nav>
        </div>
</header>