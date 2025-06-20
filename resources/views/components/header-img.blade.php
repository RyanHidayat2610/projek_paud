<section class="hero-section3">
    @once
        @push('styles')
            <link rel="stylesheet" href="{{ asset('CSS/header-img.css') }}">
        @endpush
    @endonce

    <div class="slider-wrapper" id="slider">
        <div class="slide-overlay"></div>
        <div class="slider-container" id="sliderContainer">
            @foreach ($sliders as $slider)
                <div class="slide">
                    <img src="{{ asset('storage/slider/' . $slider->gambar) }}" class="bg-img3" alt="Slide">
                </div>
            @endforeach
    </div>

        <div class="kami">
            <div class="hero-text5">
                <h1>Pendidikan Anak <br>Usia Dini AL ATHIRAH</h1>
            </div>
        </div>

        <button class="prev">&#10094;</button>
        <button class="next">&#10095;</button>
    </div>
</section>

@push('scripts')
<script src="{{ asset('JS/slider.js') }}"></script>
@endpush
