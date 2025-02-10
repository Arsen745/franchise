document.addEventListener("DOMContentLoaded", function() {
    new Swiper(".mySwiperSuccess", {
        slidesPerView: 2.5,
        spaceBetween: 0,
        loop: true,
        navigation: {
            nextEl: ".button-success",
        },
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
    });
});
