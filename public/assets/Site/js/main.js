$(document).ready(function () {
    var mySwiper = new Swiper ('.swiper-container', {
        direction: 'horizontal',
        loop: true,
        shortSwipes: false,
        autoplay: 3000,
        speed: 1200,
        grabCursor: true,
        autoplayDisableOnInteraction: false,
        pagination: '.swiper-pagination',
        nextButton: '.swiper-button-next',
        prevButton: '.swiper-button-prev',
    })
    // $('.swiper-container').hover(function () {
    //     mySwiper.stopAutoplay();
    // },function () {
    //     mySwiper.startAutoplay();
    // })
})