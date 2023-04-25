jQuery(document).ready(function($){
    $('.top-slider__inner').slick({
        dots: true,
        arrows: false,
        fade: true,
        autoplay: true,
        autoplaySpeed: 2000
    });

    // RangeSlider
    $('.filter-price__input').ionRangeSlider({
        type: "double",
        prefix: "$",
        onStart: function (data) {
            $('.filter-price__from').text(data.from);
            $('.filter-price__to').text(data.to);
        },
        onChange: function (data) {
            $('.filter-price__from').text(data.from);
            $('.filter-price__to').text(data.to);
        },
    });
    // RangeSlider End

    // Shop Page Buttons
    $('.shop-content__filter-btn').on('click', function() {
        $('.shop-content__filter-btn').removeClass('shop-content__filter-btn--active');
        $(this).addClass('shop-content__filter-btn--active');
    });

    $('.button-list').on('click', function () {
        $('.product-item').addClass('product-item--list');
        $('.shop-content__inner').addClass('shop-content__nogrid');
    });

    $('.button-grid').on('click', function () {
        $('.product-item').removeClass('product-item--list');
        $('.shop-content__inner').removeClass('shop-content__nogrid');
    });
    // Shop Page Buttons End

    // Product Page Slider
    $('.product-slide__thumb').slick({
        asNavFor: '.product-slide__big',
        focusOnSelect: true,
        slidesToShow: 4,
        slidesToScroll: 1,
        vertical: true,
        draggable: false
    });

    $('.product-slide__big').slick({
        asNavFor: '.product-slide__thumb',
        draggable: false,
        arrows: false,
        fade: true
    });
    // Product Page Slider End


    // Style Input + and - on Product Page
    function catalogItemCounter(field){
                
        var fieldCount = function(el) {

            var 
                // Мин. значение
                min = el.data('min') || false,

                // Макс. значение
                max = el.data('max') || false, 

                // Кнопка уменьшения кол-ва
                dec = el.prev('.product-page__item-content-form-dec'), 

                // Кнопка увеличения кол-ва
                inc = el.next('.product-page__item-content-form-inc');

            function init(el) {
                if(!el.attr('disabled')){
                    dec.on('click', decrement);
                    inc.on('click', increment);
                }

                // Уменьшим значение
                function decrement() {
                    var value = parseInt(el[0].value);
                    value--;

                    if(!min || value >= min) {
                        el[0].value = value;
                    }
                };

                // Увеличим значение
                function increment() {
                    var value = parseInt(el[0].value);
                        
                    value++;

                    if(!max || value <= max) {
                        el[0].value = value++;
                    }
                };
                
            }

            el.each(function() {
                init($(this));
            });
        };

        $(field).each(function(){
            fieldCount($(this));
        });
    }

    catalogItemCounter('.product-page__item-content-form-number');
    // Style Input + and - on Product Page End

    $('.product-page__tabs-button').on('click', function(e) {
        e.preventDefault();

        // For Buttons Tabs
        $('.product-page__tabs-button').removeClass('product-page__tabs-button--active');
    	$(this).addClass('product-page__tabs-button--active');

        // For Content Tabs
    	$('.product-page__tabs-content-item').removeClass('product-page__tabs-content-item--active');
    	$($(this).attr('href')).addClass('product-page__tabs-content-item--active');
    });

    $("#rateYo").rateYo({
        starWidth: "40px"
    });
});

function getTimeRemaining(endtime) {
    const total = Date.parse(endtime) - Date.parse(new Date());
    const seconds = Math.floor((total / 1000) % 60);
    const minutes = Math.floor((total / 1000 / 60) % 60);
    const hours = Math.floor((total / (1000 * 60 * 60)) % 24);
    const days = Math.floor(total / (1000 * 60 * 60 * 24));
    
    return {
        total,
        days,
        hours,
        minutes,
        seconds
    };
}

function initializeClock(id, endtime) {
    const clock = document.getElementById(id);
    const daysSpan = clock.querySelector('.days');
    const hoursSpan = clock.querySelector('.hours');
    const minutesSpan = clock.querySelector('.minutes');
    const secondsSpan = clock.querySelector('.seconds');



    function updateClock() {
        const t = getTimeRemaining(endtime);

        daysSpan.innerHTML = t.days;
        hoursSpan.innerHTML = ('0' + t.hours).slice(-2);
        minutesSpan.innerHTML = ('0' + t.minutes).slice(-2);
        secondsSpan.innerHTML = ('0' + t.seconds).slice(-2);

        if (t.total <= 0) {
        clearInterval(timeinterval);
        }
    }

    updateClock();
    const timeinterval = setInterval(updateClock, 1000);
}
const deadlineTime = document.getElementById('clockdiv');
const deadline = deadlineTime.dataset.time;

initializeClock('clockdiv', deadline);
