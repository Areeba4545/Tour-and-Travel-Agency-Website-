// Initialize Swiper
var swiper = new Swiper('.swiper.reviews-slider', {
    slidesPerView: 3, // Display 3 slides at a time
    spaceBetween: 20,
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
    },
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
});
