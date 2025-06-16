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
            
        </div>
@endsection
