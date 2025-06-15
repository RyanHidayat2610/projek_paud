document.addEventListener("DOMContentLoaded", function () {
    const sliderContainer = document.querySelector('.slider-container');
    const slides = document.querySelectorAll('.bg-img3');
    const totalSlides = slides.length;
    let currentIndex = 0;

    console.log("Slider initialized with", totalSlides, "slides.");

    setInterval(() => {
        currentIndex = (currentIndex + 1) % totalSlides;
        sliderContainer.style.transform = `translateX(-${currentIndex * 100}vw)`;
        console.log("Slide moved to index:", currentIndex);
    }, 4000);
});
