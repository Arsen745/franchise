document.addEventListener("DOMContentLoaded", function() {
    new Swiper(".mySwiperPartnership", {
        direction: "vertical",
        slidesPerView: 1,
        loop: true,
        navigation: {
            nextEl: ".button-partnership",
        },
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
    });
});
