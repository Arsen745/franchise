document.addEventListener("DOMContentLoaded", function() {
    new Swiper(".mySwiperReasons", {
        slidesPerView: 2,
        spaceBetween: 10,
        loop: true,
        navigation: {
            nextEl: ".button-reasons",
        },
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
    });
});
