<link rel="stylesheet" href="{{ asset('CSS/footer.css') }}">

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
        <p>Lokasi kami berada di JL.Andi Caco, Komp. Perum Tamalakko, Kel.Jagong, Kec.Pangkajene, Kab.Pangkep, Provinsi Sulawesi Selatan tempat penitipan dan pengasuhan anak terpercaya di Pangkep, Sulawesi Selatan. Kami menyediakan layanan penitipan anak yang aman dan edukatif.</p>
        <a href="https://wa.me/6281340120468" class="lokasi-btn" target="_blank">Hubungi Kami</a>
        </div>
    </div>
</section>

<div class="footer">
    <div class="footer-wave"></div>

    <div class="footer-container">
        <div class="footer-column">
        <h3>PAUD AL ATHIRAH</h3>
        <p>Didesain dan dikembangkan oleh tim mabar dari Institut Teknologi BJ Habibie dan bekerja sama dengan pihak PAUD AL ATHIRAH.</p>
        </div>

        <div class="footer-column">
        <h3>PAUD AL ATHIRAH</h3>
        <ul>
            <li><a href="/home">Home</a></li>
            <li><a href="/fasilitas">Fasilitas</a></li>
            <li><a href="#program">Program</a></li>
            <li><a href="/pendaftaran">Pendaftaran</a></li>
            <li><a href="/about">Tentang Kami</a></li>
            <li><a href="/artikel">Artikel</a></li>
        </ul>
        </div>

        <div class="footer-column">
        <h3>Hubungi Kami</h3>
        <p><i class="fa fa-map-marker-alt"></i> Jl.Andi Caco, Komp.Perum Tamalakko, Kel.Jagong, Kec.Pangkajene, Kab.Pangkep, Provinsi Sulawesi Selatan</p>
        <p><i class="fa fa-phone-alt"></i> atirapaud@gmail.com</p>
        <p><i class="fa fa-phone-alt"></i> +62 81340120468</p>
        <div class="footer-icons">
            <a href="https://wa.me/6281340120468" target="_blank">
            <img src="{{ asset('images/whatsapp.png') }}" alt="WhatsApp" />
            </a>
            <a href="mailto:atirapaud@gmail.com" target="_blank">
            <img src="{{ asset('images/email.png') }}" alt="Email" />
            </a>
        </div>
        </div>
    </div>
</div>
<footer class="footer-text">
    <h3>DI BUAT OLEH TIM MABAR</h3>
    {{-- resources/views/components/modal-gambar.blade.php --}}
<div id="modalGambar" class="modal-gambar">
    <span class="tutup" onclick="tutupModal()">&times;</span>
    <img class="modal-konten" id="gambarPerbesar">
</div>

</footer>