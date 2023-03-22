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
    });
});
