document.addEventListener("DOMContentLoaded", function() {
    new Swiper(".mySwiperSuccess", {
        slidesPerView: 2,
        spaceBetween: 10,
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
