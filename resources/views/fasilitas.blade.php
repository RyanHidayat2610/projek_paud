<!DOCTYPE html>
<html lang="id">
<head >
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fasilitas</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

    <!-- Header / Navbar -->
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
                </ul>
            </nav>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="hero">
        <div class="overlay"></div>
        <img src="{{ asset('images/bg-paud.jpg') }}" alt="Background" class="bg-img">
    </section>
    <!-- Tentang Kami Section -->
    <section class="tentang-kami">
        <div class="tentang-container">
            <div class="tentang-img">
                <img src="{{ asset('images/Tentang-kami.jpg') }}" alt="Tentang PAUD Khairani">
            </div>
            <div class="tentang-text">
                <h2>Tentang PAUD AL ATHIRAH</h2>
                <p><strong>PAUD AL ATHIRAH</strong> adalah fasilitas pendidikan anak usia dini yang berkomitmen untuk memberikan lingkungan belajar yang aman, nyaman, dan menyenangkan bagi anak-anak. Kami percaya bahwa setiap anak adalah individu yang istimewa dengan potensi yang sangat besar yang perlu dikembangkan melalui pendidikan yang menyeluruh dan holistik.</p>

            </div>
        </div>
    </section>
    <!-- Kegiatan Unggulan Kami -->
    <section class="kegiatan">
        <h2>Kegiatan Kami</h2>
        <div class="kegiatan-gallery">
            <div class="kegiatan-item">
                <img src="{{ asset('images/Kegiatan.1.jpg') }}" alt="Kegiatan 1">
            </div>
            <div class="kegiatan-item">
                <img src="{{ asset('images/Kegiatan.2.jpg') }}" alt="Kegiatan 2">
            </div>
            <div class="kegiatan-item">
                <img src="{{ asset('images/Kegiatan.3.jpg') }}" alt="Kegiatan 3">
            </div>
            <div class="kegiatan-item">
                <img src="{{ asset('images/Kegiatan.4.jpg') }}" alt="Kegiatan 4">
            </div>
        </div>
    </section>
    <!-- Program PAUD Khairani -->
    <section class="program">
        <h2>Program PAUD AL ATHIRAH</h2>
        <div class="program-cards">
            <div class="program-card">
                <div class="program-shape shape-1">
                    <h3>Belajar Bersama</h3>
                    <p>Anak-anak antusias mengikuti kegiatan belajar bersama di PAUD kami.</p>
                </div>
            </div>
            <div class="program-card">
                <div class="program-shape shape-2" style="background-image: url('makan-bersama.jpg');">
                    <h3>Makan Bersama</h3>
                    <p>Anak-anak di PAUD kami menikmati makan siang bersama dalam suasana ceria.</p>
                </div>
            </div>
            <div class="program-card">
                <div class="program-shape shape-3">
                    <h3>Kunjungan PAUD</h3>
                    <p>Anak-anak PAUD kami melakukan kunjungan ke berbagai tempat untuk belajar tentang alam, budaya, dan lingkungan.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- Lokasi Kami -->
    <section class="lokasi">
    <div class="lokasi-container">
        <div class="lokasi-map">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.2341960447486!2d106.7334205!3d-6.2351344!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f1d59340cfa7%3A0xc2f0c11c20b11cf5!2sJihan%20DayCare!5e0!3m2!1sen!2sid!4v1688558559684!5m2!1sen!2sid"
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
        <p>Lokasi kami berada di JL.Pemuda, tempat penitipan dan pengasuhan anak terpercaya di Pangkep, Sulawesi Selatan. Kami menyediakan layanan penitipan anak yang aman dan edukatif.</p>
        <a href="#kontak" class="lokasi-btn">Hubungi Kami</a>
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
            <li><a href="#home">Home</a></li>
            <li><a href="#fasilitas">Fasilitas</a></li>
            <li><a href="#program">Program</a></li>
            <li><a href="#daftar">Pendaftaran</a></li>
            <li><a href="#tentang">Tentang Kami</a></li>
            <li><a href="#artikel">Artikel</a></li>
        </ul>
        </div>

        <div class="footer-column">
        <h3>Hubungi Kami</h3>
        <p><i class="fa fa-map-marker-alt"></i> Jl Pemuda, Pangkep, Sulawesi Selatan</p>
        <p><i class="fa fa-phone-alt"></i> +62 81340120468</p>
        <div class="footer-icons">
            <a href="https://wa.me/6281340120468" target="_blank">
            <img src="whatsapp-icon.png" alt="WhatsApp" />
            </a>
            <a href="https://instagram.com/" target="_blank">
            <img src="instagram-icon.png" alt="Instagram" />
            </a>
        </div>
        </div>
    </div>
    </footer>

</body>
</html>
