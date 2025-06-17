document.addEventListener("DOMContentLoaded", function () {
    const modal = document.getElementById("modalGambar");
    const modalImg = document.getElementById("gambarPerbesar");
    const closeBtn = document.querySelector(".tutup");

    window.tampilkanGambar = function(imgElement) {
        modal.style.display = "block";
        modalImg.src = imgElement.src;
        modalImg.alt = imgElement.alt;
    }

    window.tutupModal = function() {
        modal.style.display = "none";
    }

    window.addEventListener("click", function (event) {
        if (event.target === modal) {
            tutupModal();
        }
    });

    if (closeBtn) {
        closeBtn.addEventListener("click", tutupModal);
    }
});
