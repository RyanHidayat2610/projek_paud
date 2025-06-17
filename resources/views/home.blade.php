@extends('components.layout')
<x-header-img />
@section('content')

    <div class="slider">
    <div class="slides">
        <img src="{{ asset('images/bg-paud.jpg') }}" class="slide active" alt="Gambar 1">
        <img src="{{ asset('images/belajar.jpg') }}" class="slide" alt="Gambar 2">
        <img src="{{ asset('images/belajar1.jpg') }}" class="slide" alt="Gambar 3">
    </div>
        <button class="prev" onclick="prevSlide()">&#10094;</button>
        <button class="next" onclick="nextSlide()">&#10095;</button>
    </div>


    <!-- Tentang Kami Section -->
    <section class="tentang-kami">
        <div class="tentang-container">
            <div class="tentang-img">
                <img src="{{ asset('images/Tentang-kami.png') }}" alt="Tentang PAUD Khairani">
            </div>
            <div class="tentang-text">
                <h2>Tentang PAUD AL ATHIRAH</h2>
                <p><strong>PAUD AL ATHIRAH</strong> dalah lembaga pendidikan anak usia dini yang berkomitmen menciptakan lingkungan belajar yang aman, nyaman, dan menyenangkan. Kami meyakini bahwa setiap anak adalah individu istimewa dengan potensi besar yang perlu dikembangkan melalui pendidikan holistik. Dengan metode belajar sambil bermain dan nilai-nilai Islami, kami membentuk karakter anak sejak dini melalui kegiatan seperti belajar, mengaji, dan sholat berjamaah. Didukung oleh pendidik profesional, fasilitas lengkap, serta dukungan orang tua, kami siap menjadi rumah kedua bagi anak menuju masa depan yang cerah.</p>

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
        </div>
    </section>
    <!-- Lokasi Kami -->
    <!--<section class="lokasi">
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
        <p>Lokasi kami berada di JL.Andi Caco, Komp. Perum Tamalakko, Kel.Jagong, Kec.Pangkajene, Kab.Pangkep, Provinsi Sulawesi Selatan tempat penitipan dan pengasuhan anak terpercaya di Pangkep, Sulawesi Selatan. Kami menyediakan layanan penitipan anak yang aman dan edukatif.</p>
        <a href="#kontak" class="lokasi-btn">Hubungi Kami</a>
        </div>
    </div>
    </section>
    <!-- Footer -->
    <footer class="footer">
    <div class="footer-wave"></div>

    <!--div class="footer-container">
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
    </!--div-->
    <script>
        let currentSlide = 0;
        const slides = document.querySelectorAll('.slide');

        function showSlide(index) {
            slides.forEach((slide, i) => {
            slide.classList.remove('active');
            if (i === index) slide.classList.add('active');
            });
        }

        function nextSlide() {
            currentSlide = (currentSlide + 1) % slides.length;
            showSlide(currentSlide);
        }

        function prevSlide() {
            currentSlide = (currentSlide - 1 + slides.length) % slides.length;
            showSlide(currentSlide);
        }

        // Ganti otomatis setiap 4 detik
        setInterval(nextSlide, 4000);

        // Tampilkan slide pertama
        showSlide(currentSlide);
    </script>
    </footer>
</body>
</html>
