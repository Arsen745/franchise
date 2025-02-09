document.addEventListener("DOMContentLoaded", function() {
    new Swiper(".mySwiperAbout", {
        slidesPerView: 1,
        spaceBetween: 10,
        loop: true,
        navigation: {
            nextEl: ".button-about",
        },
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
    });
});
