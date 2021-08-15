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

});
