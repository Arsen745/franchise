document.addEventListener("DOMContentLoaded", function() {
    new Swiper(".mySwiperFormat", {
        slidesPerView: 2.3,
        spaceBetween: 10,
        loop: true,
        navigation: {
            nextEl: ".button-format",
        },
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
    });
});
