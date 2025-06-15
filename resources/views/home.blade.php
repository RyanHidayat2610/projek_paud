@extends('components.layout')

@section('content')
        <div>     
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
                </div>
            </section>
        </div>
@endsection