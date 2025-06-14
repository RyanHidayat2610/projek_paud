@extends('components.layout')

@section('content')
        <div>
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
            <!-- Profil Guru -->
            <!-- <style>
                .profil-guru {
                    padding: 60px 20px;
                    background-color: #f9f9f9;
                    text-align: center;
                }

                .guru-container {
                    display: flex;
                    flex-wrap: wrap;
                    justify-content: center;
                    gap: 30px;
                    margin-top: 30px;
                }

                .guru-card {
                    background-color: #ffffff;
                    border-radius: 15px;
                    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
                    width: 220px;
                    padding: 20px;
                    text-align: center;
                    transition: transform 0.3s ease, box-shadow 0.3s ease;
                }

                .guru-card:hover {
                    background-color: #d7d7d7;
                    transform: translateY(-10px);
                    box-shadow: 0 12px 20px rgba(0, 0, 0, 0.2);
                }


                .guru-card img {
                    width: 100%;
                    border-radius: 50%;
                    height: 200px;
                    object-fit: cover;
                    margin-bottom: 15px;
                }

                .guru-card h3 {
                    margin: 10px 0 5px;
                    font-size: 18px;
                    color: #333;
                }

                .guru-card p {
                    font-size: 14px;
                    color: #666;
                }

                /* Modal */
                .modal-gambar {
                    display: none;
                    position: fixed;
                    z-index: 999;
                    padding-top: 60px;
                    left: 0;
                    top: 0;
                    width: 100%;
                    height: 100%;
                    overflow: auto;
                    background-color: rgba(0,0,0,0.9);
                }

                .modal-konten {
                    margin: auto;
                    display: block;
                    max-width: 80%;
                    max-height: 80%;
                    border-radius: 10px;
                }

                .tutup {
                    position: absolute;
                    top: 30px;
                    right: 50px;
                    color: #fff;
                    font-size: 40px;
                    font-weight: bold;
                    cursor: pointer;
                    z-index: 1000;
                }

                @media screen and (max-width: 700px) {
                    .modal-konten {
                        width: 100%;
                    }
                }
            </style> -->

            <section class="profil-guru">
                <h2>Profil Guru Kami</h2>
                <div class="guru-container">
                    <div class="guru-card">
                        <img src="{{ asset('images/Levi.png') }}" alt="Pak Levi" onclick="tampilkanGambar(this)">
                        <h3>Pak Levi</h3>
                        <p>Guru Kelas A. Berpengalaman dalam pendidikan anak usia dini selama 10 tahun.</p>
                    </div>
                    <div class="guru-card">
                        <img src="{{ asset('images/Frieren.png') }}" alt="Bu Frieren" onclick="tampilkanGambar(this)">
                        <h3>Bu Frieren</h3>
                        <p>Guru Kelas B. Spesialis dalam kegiatan motorik halus dan pengembangan kreativitas.</p>
                    </div>
                    <div class="guru-card">
                        <img src="{{ asset('images/Eren.jpeg') }}" alt="Pak Dedi" onclick="tampilkanGambar(this)">
                        <h3>Pak Dedi</h3>
                        <p>Guru Musik dan Bahasa. Mengajarkan lagu anak-anak dan kosakata dasar.</p>
                    </div>
                    <div class="guru-card">
                        <img src="{{ asset('images/Mikasa.png') }}" alt="Bu Mikasa" onclick="tampilkanGambar(this)">
                        <h3>Bu Mikasa</h3>
                        <p>Pendamping Kegiatan Luar Ruang. Ahli dalam pengembangan sosial anak-anak.</p>
                    </div>
                    <div class="guru-card">
                        <img src="{{ asset('images/Sung.png') }}" alt="Jinwo" onclick="tampilkanGambar(this)">
                        <h3>Pak Jinwo</h3>
                        <p>Guru Agama dan Budi Pekerti. Membimbing anak-anak dalam nilai moral dan spiritual.</p>
                    </div>
                    <div class="guru-card">
                        <img src="{{ asset('images/F.png') }}" alt="Bu Aisyah" onclick="tampilkanGambar(this)">
                        <h3>Bu Aisyah</h3>
                        <p>Guru Kelas A. Berpengalaman dalam pendidikan anak usia dini selama 10 tahun.</p>
                    </div>
                    <div class="guru-card">
                        <img src="{{ asset('images/Waguri.png') }}" alt="Bu Rina" onclick="tampilkanGambar(this)">
                        <h3>Bu Rina</h3>
                        <p>Guru Kelas B. Spesialis dalam kegiatan motorik halus dan pengembangan kreativitas.</p>
                    </div>
                    <div class="guru-card">
                        <img src="{{ asset('images/Gojo.png') }}" alt="Pak Gojo" onclick="tampilkanGambar(this)">
                        <h3>Pak Gojo</h3>
                        <p>Guru Musik dan Bahasa. Mengajarkan lagu anak-anak dan kosakata dasar.</p>
                    </div>
                    <div class="guru-card">
                        <img src="{{ asset('images/Cha.png') }}" alt="Bu Sari" onclick="tampilkanGambar(this)">
                        <h3>Bu Sari</h3>
                        <p>Pendamping Kegiatan Luar Ruang. Ahli dalam pengembangan sosial anak-anak.</p>
                    </div>
                    <div class="guru-card">
                        <img src="{{ asset('images/Herta.png') }}" alt="Bu Herta" onclick="tampilkanGambar(this)">
                        <h3>Bu Herta</h3>
                        <p>Guru Agama dan Budi Pekerti. Membimbing anak-anak dalam nilai moral dan spiritual.</p>
                    </div>

                    <div id="modalGambar" class="modal-gambar">
                <span class="tutup" onclick="tutupModal()">&times;</span>
                <img class="modal-konten" id="gambarPerbesar">
            </section>
            
            <script>
                function tampilkanGambar(imgElement) {
                    var modal = document.getElementById("modalGambar");
                    var modalImg = document.getElementById("gambarPerbesar");
                    modal.style.display = "block";
                    modalImg.src = imgElement.src;
                }
                function tutupModal() {
                    document.getElementById("modalGambar").style.display = "none";
                }
                // Tutup modal jika klik di luar gambar
                window.onclick = function(event) {
                    var modal = document.getElementById("modalGambar");
                    if (event.target == modal) {
                        modal.style.display = "none";
                    }
                }
            </script>

            <!-- Data Guru -->
            <h2>Data Guru</h2>
            <div class="table-container">
                <table class="data-guru-table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Jenis</th>
                            <th>Riwayat Sekolah</th>
                            <th>Hobi</th>
                            <th>Motivasi</th>
                            <th>Foto</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($gurus as $index => $guru)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>{{ $guru->nama }}</td>
                            <td>{{ $guru->jenis_guru }}</td>
                            <td>{{ $guru->riwayat_sekolah }}</td>
                            <td>{{ $guru->hobi }}</td>
                            <td>{{ $guru->motivasi }}</td>
                            <td>
                                @if($guru->foto_profile)
                                    <img src="{{ asset('storage/' . $guru->foto_profile) }}" alt="Foto Guru" width="60">
                                @else
                                    <span>Tidak Ada</span>
                                @endif
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

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
@endsection