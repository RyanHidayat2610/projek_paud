<section class="hero-section3">
    @once
        @push('styles')
            <link rel="stylesheet" href="{{ asset('CSS/header-img.css') }}">
        @endpush
    @endonce

    <div class="slider-wrapper" id="slider">
        <div class="slider-container" id="sliderContainer">
            @for ($i = 1; $i <= 6; $i++)
                <div class="slide">
                    <img src="{{ asset("images/bg$i.jpg") }}" class="bg-img3" alt="Slide {{ $i }}">
                </div>
            @endfor
        </div>

        <div class="hero-section5">
            <div class="hero-text5">
                <h1>PAUD AL ATHIRAH</h1>
            </div>
        </div>

        <button class="prev">&#10094;</button>
        <button class="next">&#10095;</button>
    </div>
</section>

@push('scripts')
<script src="{{ asset('JS/slider.js') }}"></script>
@endpush
