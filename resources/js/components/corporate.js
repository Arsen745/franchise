document.addEventListener("DOMContentLoaded", function() {
    new Swiper(".mySwiperCorporate", {
        slidesPerView: 1,
        spaceBetween: 10,
        loop: true,
        navigation: {
            nextEl: ".button-corporate",
        },
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
    });
});
document.addEventListener("DOMContentLoaded", function() {
    new Swiper(".mySwiperFinance", {
        slidesPerView: 2,
        spaceBetween: 10,
        loop: true,
        navigation: {
            nextEl: ".button-finance",
        },
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
    });
});
