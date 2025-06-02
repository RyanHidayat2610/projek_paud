<!DOCTYPE html>
<html lang="id">
<head >
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tentang Kami</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

    <!-- Header / Navbar -->
    <header>
        <div class="container nav-container">
            <div class="logo">
                <span>PAUD AL ATHIRAH</span>
            </div>
            <nav>
                <ul>
                    <li><a href="{{ url('/home') }}">Home</a></li>
                    <li><a href="{{ url('/fasilitas') }}">Fasilitas</a></li>
                    <li><a href="{{ url('/pendaftaran') }}">Pendaftaran</a></li>
                    <li><a href="{{ url('/about') }}">Tentang Kami</a></li>
                    <li><a href="{{ url('/artikel') }}">Artikel</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="hero">
        <div class="overlay"></div>
        <img src="{{ asset('images/Kami.jpg') }}" alt="Background" class="bg-img">
    </section>
    <!-- Tentang Kami Section -->
    <section class="tentang-kami">
        <div class="tentang-container">
            <div class="tentang-img">
                <img src="{{ asset('images/Tentang-kami.png') }}" alt="Tentang PAUD Khairani">
            </div>
            <div class="tentang-text">
                <h2>Tentang PAUD AL ATHIRAH</h2>
                <p><strong>PAUD AL ATHIRAH</strong> adalah lembaga pendidikan anak usia dini yang berkomitmen menciptakan lingkungan belajar yang aman, nyaman, dan menyenangkan. Kami meyakini bahwa setiap anak adalah individu istimewa dengan potensi besar yang perlu dikembangkan melalui pendidikan holistik. Dengan metode belajar sambil bermain dan nilai-nilai Islami, kami membentuk karakter anak sejak dini melalui kegiatan seperti belajar, mengaji, dan sholat berjamaah. Didukung oleh pendidik profesional, fasilitas lengkap, serta dukungan orang tua, kami siap menjadi rumah kedua bagi anak menuju masa depan yang cerah.</p>

            </div>
        </div>
    </section>
    <!-- Kegiatan Unggulan Kami -->
    <section class="kegiatan">
        <h2>Kegiatan Kami</h2>
        <div class="kegiatan-gallery">
            <div class="kegiatan-item">
                <img src="{{ asset('images/kreatif.jpg') }}" alt="Kegiatan 1">
            </div>
            <div class="kegiatan-item">
                <img src="{{ asset('images/ngaji.jpg') }}" alt="Kegiatan 2">
            </div>
            <div class="kegiatan-item">
                <img src="{{ asset('images/sholat.jpg') }}" alt="Kegiatan 3">
            </div>
            <div class="kegiatan-item">
                <img src="{{ asset('images/menggambar.jpg') }}" alt="Kegiatan 4">
            </div>
            <div class="kegiatan-item">
                <img src="{{ asset('images/sholat1.jpg') }}" alt="Kegiatan 4">
            </div>
            <div class="kegiatan-item">
                <img src="{{ asset('images/kreatif2.jpg') }}" alt="Kegiatan 1">
            </div>
            <div class="kegiatan-item">
                <img src="{{ asset('images/sholat2.jpg') }}" alt="Kegiatan 1">
            </div>
            <div class="kegiatan-item">
                <img src="{{ asset('images/ngaji1.jpg') }}" alt="Kegiatan 1">
            </div>
            <div class="kegiatan-item">
                <img src="{{ asset('images/belajar.jpg') }}" alt="Kegiatan 1">
            </div>
            <div class="kegiatan-item">
                <img src="{{ asset('images/belajar1.jpg') }}" alt="Kegiatan 1">
            </div>
            <div class="kegiatan-item">
                <img src="{{ asset('images/kunjung.jpg') }}" alt="Kegiatan 1">
            </div>
            <div class="kegiatan-item">
                <img src="{{ asset('images/kunjung2.jpg') }}" alt="Kegiatan 1">
            </div>
        </div>
    </section>
    <!-- Program PAUD Khairani -->
    <section class="program">
        <h2>Program PAUD AL ATHIRAH</h2>
        <div class="program-cards">
            <div class="program-card">
                <div class="program-shape shape-1">
                    <img src="{{ asset('images/kreatif.jpg') }}" alt="Belajar Bersama" class="hover-img">
                    <h3>Belajar Bersama</h3>
                    <p>Anak-anak antusias mengikuti kegiatan belajar bersama di PAUD kami.</p>
                </div>
            </div>
            <div class="program-card">
                <div class="program-shape shape-2" style="background-image: url('makan-bersama.jpg');">
                    <img src="{{ asset('images/ngaji.jpg') }}" alt="Mengaji Bersama" class="hover-img">
                    <h3>Mengaji Bersama</h3>
                    <p>Anak-anak di PAUD kami mengaji bersama dalam suasana ceria.</p>
                </div>
            </div>
            <div class="program-card">
                <div class="program-shape shape-3">
                    <img src="{{ asset('images/sholat.jpg') }}" alt="Sholat Bersama" class="hover-img">
                    <h3>Sholat Bersama</h3>
                    <p>Anak-anak PAUD kami melakukan Sholat secara berjamaah.</p>
                </div>
            </div>
            <div class="program-card">
                <div class="program-shape shape-4">
                    <img src="{{ asset('images/periksa.jpg') }}" alt="Periksa Kesehatan" class="hover-img">
                    <h3>Pemeriksaan Kesehatan</h3>
                    <p>Dilakukan pemeriksaan gigi terhadap anak-anak PAUD kami.</p>
                </div>
            </div>
            <div class="program-card">
                <div class="program-shape shape-5">
                    <img src="{{ asset('images/diskusi.jpg') }}" alt="Diskusi Bersama" class="hover-img">
                    <h3>Diskusi Bersama</h3>
                    <p>Anak-anak PAUD kami melakukan diskusi terkait pembelajaran.</p>
                </div>
            </div>
            <div class="program-card">
                <div class="program-shape shape-5">
                    <img src="{{ asset('images/seni.jpg') }}" alt="Kesenian" class="hover-img">
                    <h3>Kesenian</h3>
                    <p>Anak-anak PAUD kami menunjukkan baju adat dan budaya.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- Lokasi Kami -->
    <section class="lokasi">
    <div class="lokasi-container">
        <div class="lokasi-map">
        <iframe
            src="https://www.google.com/maps/place/Perumahan+jagong/@-4.8400195,119.5328041,3690m/data=!3m1!1e3!4m10!1m2!2m1!1sJl.Andi+Caco,+Komp.Perum+Tamalakko,+Kel.Jagong,+Kec.Pangkajene,+Kab.Pangkep,+Provinsi+Sulawesi+Selatan!3m6!1s0x2dbe4fe67cae41f3:0xd1684d82575c8e70!8m2!3d-4.8404391!4d119.537232!15sCmZKbC5BbmRpIENhY28sIEtvbXAuUGVydW0gVGFtYWxha2tvLCBLZWwuSmFnb25nLCBLZWMuUGFuZ2thamVuZSwgS2FiLlBhbmdrZXAsIFByb3ZpbnNpIFN1bGF3ZXNpIFNlbGF0YW6SAQVtb3RlbOABAA!16s%2Fg%2F11js_q6h5z?authuser=0&entry=ttu&g_ep=EgoyMDI1MDUyOC4wIKXMDSoASAFQAw%3D%3D"
            width="100%"
            height="300"
            style="border:0; border-radius: 15px;"
            allowfullscreen=""
            loading="lazy"
            referrerpolicy="no-referrer-when-downgrade">
        </iframe>
        </div>
        <div class="lokasi-info">
        <h2>Lokasi Kami</h2>
        <p>Lokasi kami berada di JL.Andi Caco, Komp. Perum Tamalakko, Kel.Jagong, Kec.Pangkajene, Kab.Pangkep, Provinsi Sulawesi Selatan tempat penitipan dan pengasuhan anak terpercaya di Pangkep, Sulawesi Selatan. Kami menyediakan layanan penitipan anak yang aman dan edukatif.</p>
        <a href="https://wa.me/6281340120468" class="lokasi-btn">Hubungi Kami</a>
        </div>
    </div>
    </section>
    <!-- Footer -->
    <footer class="footer">
    <div class="footer-wave"></div>

    <div class="footer-container">
        <div class="footer-column">
        <h3>PAUD AL ATHIRAH</h3>
        <p>Didesain dan dikembangkan oleh tim mabar dari Institut Teknologi BJ Habibie dan bekerja sama dengan pihak PAUD AL ATHIRAH.</p>
        </div>

        <div class="footer-column">
        <h3>PAUD AL ATHIRAH</h3>
        <ul>
            <li><a href="{{ url('/home') }}">Home</a></li>
            <li><a href="{{ url('/fasilitas') }}">Fasilitas</a></li>
            <li><a href="{{ url('/pendaftaran') }}">Pendaftaran</a></li>
            <li><a href="{{ url('/about') }}">Tentang Kami</a></li>
            <li><a href="{{ url('/artikel') }}">Artikel</a></li>
        </ul>
        </div>

        <div class="footer-column">
        <h3>Hubungi Kami</h3>
        <p><i class="fa fa-map-marker-alt"></i> Jl.Andi Caco, Komp.Perum Tamalakko, Kel.Jagong, Kec.Pangkajene, Kab.Pangkep, Provinsi Sulawesi Selatan</p>
        <p><i class="fa fa-phone-alt"></i> atirapaud@gmail.com</p>
        <p><i class="fa fa-phone-alt"></i> +62 81340120468</p>
        <div class="footer-icons">
            <a href="https://wa.me/6281340120468" target="_blank">
            <img src="{{ asset('images/whatsap.png') }}" alt="WhatsApp" />
            </a>
            <a href="mailto:atirapaud@gmail.com" target="_blank">
            <img src="{{ asset('images/imael.png') }}" alt="Email" />
            </a>
        </div>
        </div>
    </div>
    </footer>
</body>
</html>
