document.addEventListener("DOMContentLoaded", function () {
    new Swiper(".mySwiperEconomy", {
        slidesPerView: 1,
        spaceBetween: 10,
        loop: true,
        navigation: {
            nextEl: ".button-economy",
        },
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
    });
});
document.addEventListener("DOMContentLoaded", function () {
    new Swiper(".mySwiperStudy", {
        slidesPerView: 1,
        spaceBetween: 10,
        loop: true,
        navigation: {
            nextEl: ".button-study",
        },
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
    });
});
