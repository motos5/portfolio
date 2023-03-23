jQuery(document).ready(function($){
    // Include Slick
    const url = wnm_custom['elvinci-style-main'];
    const leftArrow = `<button type="button" class="slick-prev">
                            <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" fill="none">
                                <circle cx="32" cy="32" r="32" transform="rotate(-180 32 32)"/>
                                <path stroke="#424040" stroke-width="1.5" d="m34 40-8-8 8-8"/>
                            </svg>
                        </button>`;
    const rightArrow = `<button type="button" class="slick-next">
                            <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" fill="none">
                                <circle cx="32" cy="32" r="32"/>
                                <path stroke="#424040" stroke-width="1.5" d="m30 24 8 8-8 8"/>
                            </svg>
                        </button>`;
    $(".slider").slick({
        prevArrow: leftArrow,
		nextArrow: rightArrow,
        responsive: [
			{
				breakpoint: 961,
				settings: {
					slidesToShow: 1,
                    centerMode: true,
                    centerPadding: '0px',
                    arrows: false,
				},
			},
		],
    });

    // Hover Effect on TouchScreen
    $(document).ready(function() {
        $('.menu__link').on('touchstart touchend', function(e) {
            e.preventDefault();
            $(this).toggleClass('hover_effect');
        });
    });

    // Menu button
    function menuButton(event){
        event.preventDefault();
        $('.menu__list').toggleClass('menu__list--active');
    }
    $('.menu__btn, .menu a').on('click', menuButton);
});
