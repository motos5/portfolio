$(function(){
    // Include Mixitup
    var mixer = mixitup('.portfolio__content');
    
    // Include Slick
    // Object из файла functions.php
    const url = wnm_custom['o-marketing-main'];
    const leftArrow = `<button type="button" class="slick-prev"><img src="${url}/assets/img/left-arrow.svg" alt="left"></button>`;
    const rightArrow = `<button type="button" class="slick-next"><img src="${url}/assets/img/right-arrow.svg" alt="left"></button>`;

    $('.slider-blog__inner').slick({
        dots: true,
        prevArrow: leftArrow,
		nextArrow: rightArrow,
        responsive: [
			{
				breakpoint: 769,
				settings: {
					arrows: false,
				},
			},
		],
    });

    $('.menu a').on('click', function() {
        $('.menu__list-link').removeClass('menu__list-link--active');
    	$(this).addClass('menu__list-link--active');
    });

    // Функция для работы меню при разрешении экрана в 768px
    function windowSize(){
        if ($(window).width() <= '768'){
            $('.header__top-inner').toggleClass('header__top-inner--active');

            $('.logo__img.black').toggleClass('black--active');
            $('.logo__img.white').toggleClass('white--active');
        }
    }
    $('.menu__btn, .menu a').on('click', windowSize);

    // Плавный скролл
    $(".menu a, .go-top").on("click", function (event) {
		//отменяем стандартную обработку нажатия по ссылке
		event.preventDefault();

		//забираем идентификатор бока с атрибута href
		var id = $(this).attr("href"),
		//узнаем высоту от начала страницы до блока на который ссылается якорь
			top = $(id).offset().top;

		//анимируем переход на расстояние - top за 1500 мс
		$("body,html").animate({ scrollTop: top }, 1500);
    });


});