// gif-popup.js

document.addEventListener("DOMContentLoaded", () => {
    const popup = document.getElementById("gifPopup");
    const popupImg = document.getElementById("popupImg");
    const closeBtn = document.querySelector(".close-popup");

    // Cari semua gif di section keunggulan
    const gifImages = document.querySelectorAll(".keunggulan-image img");

    gifImages.forEach(img => {
        img.addEventListener("mouseenter", () => {
            popup.style.display = "block";
            popupImg.src = img.src;
        });
    });

    // Tutup popup
    closeBtn.addEventListener("click", () => {
        popup.style.display = "none";
    });

    popup.addEventListener("mouseleave", (e) => {
        if (e.target === popup) {
            popup.style.display = "none";
        }
    });

    popup.addEventListener("click", (e) => {
        if (e.target === popup) {
            popup.style.display = "none";
        }
    });

});
