@extends('components.layout')
<x-header-img />
@section('content')
        <div>
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
            <section class="program">
                <h2>Fasilitas PAUD AL ATHIRAH</h2>
                <div class="program-cards">
                    <div class="program-card">
                        <div class="program-shape shape-1">
                            <img src="{{ asset('images/tempat.jpg') }}" alt="Belajar Bersama" class="hover-img">
                            <h3>Tempat Belajar Nyaman</h3>
                            <p>Anak-anak antusias mengikuti kegiatan belajar bersama di PAUD kami.</p>
                        </div>
                    </div>
                    <div class="program-card">
                        <div class="program-shape shape-2" style="background-image: url('makan-bersama.jpg');">
                            <img src="{{ asset('images/ngaji.jpg') }}" alt="Mengaji Bersama" class="hover-img">
                            <h3>Tempat Mengaji Bersama</h3>
                            <p>Anak-anak di PAUD kami mengaji bersama dalam suasana ceria.</p>
                        </div>
                    </div>
                    <div class="program-card">
                        <div class="program-shape shape-3">
                            <img src="{{ asset('images/sholat.jpg') }}" alt="Sholat Bersama" class="hover-img">
                            <h3>Ruang Sholat Bersama</h3>
                            <p>Anak-anak PAUD kami melakukan Sholat secara berjamaah.</p>
                        </div>
                    </div>
                    <div class="program-card">
                    <div class="program-shape shape-4">
                        <img src="{{ asset('images/main.jpg') }}" alt="Taman Bermain" class="hover-img">
                        <h3>Taman Bermain</h3>
                        <p>Anak-anak PAUD kami bermain di taman yang aman dan menyenangkan.</p>
                    </div>
                    </div>
                    <div class="program-card">
                    <div class="program-shape shape-5">
                        <img src="{{ asset('images/diskus.jpg') }}" alt="Diskusi Bersama" class="hover-img">
                        <h3>Ruang Diskusi Bersama</h3>
                        <p>Anak-anak PAUD kami melakukan diskusi terkait pembelajaran.</p>
                    </div>
                    </div>
                    <div class="program-card">
                        <div class="program-shape shape-5">
                            <img src="{{ asset('images/seni.jpg') }}" alt="Kesenian" class="hover-img">
                            <h3>Ruang Kesenian</h3>
                            <p>Anak-anak PAUD kami menunjukkan baju adat dan budaya.</p>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </section>
        </div>
@endsection
