jQuery(document).ready(function($){ 
    // Slick Slider
    $('.works__list').slick({
        dots: true,
        dotsClass: 'works__slider-dots',
        arrows: false,
        slidesToShow: 2,
        slidesToScroll: 1,
        centerPadding: '50px',
        responsive: [
			{
				breakpoint: 769,
				settings: {
					slidesToShow: 1,
                    centerMode: true,
                    centerPadding: '0px',
				},
			},
		],
    });

    // Функция для изменения CSS стилей при сколле
    function scrollMenu(){
        if ($(this).scrollTop() >= '1') {
            $('.header__top').css('background-color', 'rgba(0, 162, 232, 0.8)').addClass('scroll');
            $('.menu__link').css('color', '#fff');
            $('.menu__link').hover(
                function () {
                    $(this).css('color', '#1E1C1C');
                },
                function () {
                    $(this).attr('style', 'color: rgb(30, 28, 28)').css('color', '#fff');
                }
            );

            if ($(window).width() <= '960'){
                $('.menu__link').css('color', '#fff');
                $('.menu__link').hover(
                    function () {
                        $(this).css('color', '#0077AA');
                    },
                    function () {
                        $(this).attr('style', 'color: rgb(30, 28, 28)').css('color', '#fff');
                    }
                );
                $('.menu__btn').addClass('scroll');
            }

            $('.logo__img.black').addClass('scroll');
            $('.logo__img.light').addClass('scroll');
            
        } else {
            // Условия удаления добавленных стилей и CSS классов
            $('.header__top').css('background-color', 'rgba(0, 162, 232, 0.1)').removeClass('scroll');
            $('.menu__link').css('color', '#1E1C1C');
            $('.menu__link').hover(
                function () {
                    $(this).css('color', '#0077AA');
                },
                function () {
                    $(this).attr('style', 'color: color: rgb(0, 119, 170);').css('color', '#1E1C1C');
                }
            );
            if ($(window).width() <= '960'){
                $('.menu__link').css('color', '#fff');
                $('.menu__link').hover(
                    function () {
                        $(this).css('color', '#0077AA');
                    },
                    function () {
                        $(this).attr('style', 'color: rgb(30, 28, 28)').css('color', '#fff');
                    }
                );
            }
            $('.menu__btn').removeClass('scroll');

            $('.logo__img.black').removeClass('scroll');
            $('.logo__img.light').removeClass('scroll');
        }
    }
    $(window).on('load scroll', scrollMenu);

    // Функция для работы меню при разрешении экрана в 960px
    function windowSize(){
        if ($(window).width() <= '960'){
            $('.header__top-inner').toggleClass('header__top-inner--active');
            
            $('.logo__img.black').toggleClass('black--active');
            $('.logo__img.light').toggleClass('light--active');
            
        }
    }
    $('.menu__btn, .menu a').on('click', windowSize);

    // Плавный скролл
    $('.menu a, .see').on("click", function (event) {
		//отменяем стандартную обработку нажатия по ссылке
        let homeAttr = $('.menu a').attr('href');

        if(homeAttr !== 'http://wpweb.inf.ua/') {
            event.preventDefault();
        }

		//забираем идентификатор бока с атрибута href
		var id = $(this).attr("href"),
		//узнаем высоту от начала страницы до блока на который ссылается якорь
			top = $(id).offset().top;

		//анимируем переход на расстояние - top за 1500 мс
		$("body,html").animate({ scrollTop: top }, 1500);
    });

    $('.header__top-btn, .about__btn').on('click', function(event) {
        event.preventDefault();
        $('.popup__talk').addClass('popup--active');
    });

    $('.popup__content-close').on('click', function(event) {
        event.preventDefault();
        $('.popup__talk').removeClass('popup--active');
    });
});