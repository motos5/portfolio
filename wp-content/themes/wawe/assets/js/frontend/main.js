$(function(){
  // Mixitup
  var mixer = mixitup('.gallery__content');

  // Slick
  $(".blog__inner").slick({
		dots: true,
		arrows: false,
	});

  $('.menu__btn').on('click', function() {
    $('.menu__list').toggleClass('menu__list--active');
  });
});