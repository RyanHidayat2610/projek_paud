<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('CSS/style.css') }}">
    <link rel="stylesheet" href="{{ asset('CSS/admin-css/layout-blade.css') }}">

    <title>{{ $title ?? 'Judul Default' }}</title>
</head>

<body>
    <div>
        <x-nav-bar />

        <section class="hero-section3">
            <div class="slider-wrapper">
                <div class="slider-container">
                    <img src="{{ asset('images/bg1.jpg') }}" class="bg-img3">
                    <img src="{{ asset('images/bg2.jpg') }}" class="bg-img3">
                    <img src="{{ asset('images/bg3.jpg') }}" class="bg-img3">
                    <img src="{{ asset('images/bg4.jpg') }}" class="bg-img3">
                    <img src="{{ asset('images/bg5.jpg') }}" class="bg-img3">
                    <img src="{{ asset('images/bg6.jpg') }}" class="bg-img3">
                </div>
            </div>

            <div class="hero-section5">
                <div class="hero-text5">
                    <h1>PAUD AL ATHIRAH</h1>
                </div>
            </div>
        </section>



        <main>
            @yield('content')
        </main>

        <x-footer />
    </div>

<script src="{{ asset('js/slider.js') }}"></script>
<script src="{{ asset('js/slider.js') }}?v=2"></script>

</body>


</html>
