document.addEventListener("DOMContentLoaded", function () {
    const slides = document.querySelectorAll(".slide");
    const container = document.querySelector(".slider-container");
    const prevBtn = document.querySelector(".prev");
    const nextBtn = document.querySelector(".next");

    let currentSlide = 0;
    const totalSlides = slides.length;

    function updateSlider() {
        // Reset semua slide
        slides.forEach(slide => slide.classList.remove("active"));
        // Tampilkan slide aktif
        slides[currentSlide].classList.add("active");

        // Geser container (untuk animasi jika tetap ingin pakai transform)
        container.style.transform = `translateX(-${currentSlide * 100}vw)`;
    }

    function goToSlide(index) {
        currentSlide = (index + totalSlides) % totalSlides;
        updateSlider();
    }

    prevBtn.addEventListener("click", () => goToSlide(currentSlide - 1));
    nextBtn.addEventListener("click", () => goToSlide(currentSlide + 1));

    let interval = setInterval(() => goToSlide(currentSlide + 1), 3000);

    document.querySelector(".slider-wrapper").addEventListener("mouseover", () => clearInterval(interval));
    document.querySelector(".slider-wrapper").addEventListener("mouseout", () => {
        interval = setInterval(() => goToSlide(currentSlide + 1), 3000);
    });

    updateSlider();
});
