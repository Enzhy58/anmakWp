$(function() {
    $('.menu__btn').on('click', function(){
        $('.menu__bottom-list').toggleClass('menu__bottom-list--active');
    });
    $('.menu__contect-email, .production__link, .services-benefits__link, .footer__email').on('click', function(){
        $('.form').addClass('form--active');
        $('.wrapper').addClass('wrapper--active');
    });
    $('.form__close').on('click', function(){
        $('.form').removeClass('form--active');
        $('.wrapper').removeClass('wrapper--active');
    });
    $('.production__slider').slick({
        arrows: false,
        dots: true,
        autoplay: true
    });
});