$(function () {

    var myCircle = Circles.create({
        id:                  'circles-1',
        radius:              80,
        value:               85,
        maxValue:            100,
        width:               10,
        text:                function(value){return value + '%';},
        colors:              ['#89D5FA', '#0889C9'],
        duration:            400,
        wrpClass:            'circles-wrp',
        textClass:           'circles-text',
        valueStrokeClass:    'circles-valueStroke',
        maxValueStrokeClass: 'circles-maxValueStroke',
        styleWrapper:        true,
        styleText:           true
      });

    var myCircle = Circles.create({
        id:                  'circles-2',
        radius:              80,
        value:               20,
        maxValue:            100,
        width:               10,
        text:                function(value){return value + '%';},
        colors:              ['#FCEBA2', '#F6CB0E'],
        duration:            400,
        wrpClass:            'circles-wrp',
        textClass:           'circles-text',
        valueStrokeClass:    'circles-valueStroke',
        maxValueStrokeClass: 'circles-maxValueStroke',
        styleWrapper:        true,
        styleText:           true
      });

    var myCircle = Circles.create({
        id:                  'circles-3',
        radius:              80,
        value:               55,
        maxValue:            100,
        width:               10,
        text:                function(value){return value + '%';},
        colors:              ['#FCBFB0', '#F6491E'],
        duration:            400,
        wrpClass:            'circles-wrp',
        textClass:           'circles-text',
        valueStrokeClass:    'circles-valueStroke',
        maxValueStrokeClass: 'circles-maxValueStroke',
        styleWrapper:        true,
        styleText:           true
      });

      $('.menu-btn').on('click', function() {
        $(".menu__mobile").toggleClass("menu__mobile--active");
        $(".menu__mobile-bg").toggleClass("menu__mobile-bg--active");
      });

      $('.menu__mobile-list, .menu__mobile-bg').on('click', function(){
        $(".menu__mobile").removeClass("menu__mobile--active");
        $(".menu__mobile-bg").removeClass("menu__mobile-bg--active");
      });


      $(".menu").on("click","a", function (event) {
        //отменяем стандартную обработку нажатия по ссылке
        event.preventDefault();
    
        //забираем идентификатор бока с атрибута href
        var id  = $(this).attr('href'),
    
        //узнаем высоту от начала страницы до блока на который ссылается якорь
          top = $(id).offset().top;
        
        //анимируем переход на расстояние - top за 1500 мс
        $('body,html').animate({scrollTop: top}, 1500);
      });
});

