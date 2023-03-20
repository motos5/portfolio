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
