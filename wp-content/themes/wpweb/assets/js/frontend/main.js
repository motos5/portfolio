jQuery(document).ready(function($){ 
    // Slick Slider
    $('.works__list').slick({
        dots: true,
        dotsClass: 'works__slider-dots',
        arrows: false,
        slidesToShow: 2,
        slidesToScroll: 1,
        centerPadding: '50px',
    });

    // Функция для работы меню при разрешении экрана в 960px
    function windowSize(){
        if ($(window).width() <= '960'){
            $('.header__top-inner').toggleClass('header__top-inner--active');
            
            $('.logo__img.black').toggleClass('black--active');
            $('.logo__img.light').toggleClass('light--active');
            
        }
    }
    $('.menu__btn, .menu a').on('click', windowSize);
});