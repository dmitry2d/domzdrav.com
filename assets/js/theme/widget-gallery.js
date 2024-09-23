$(document).ready (() => {
    $('.widget-gallery-items').slick({
        dots: false,
        infinite: true,
        speed: 300,
        autoplay: true,
        autoplaySpeed: 2000,
        variableWidth: true,
        prevArrow: '.widget-gallery-prev',
        nextArrow: '.widget-gallery-next'
    });
})