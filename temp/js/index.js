var $ = require('jquery');


$(document).ready(function(){
    $('.button-download').mouseenter(() => {
        $('.button__item').addClass('top');
    });
    $('.button-download').mouseleave(function(){
        $('.button__item').removeClass('top');
    });


});

    

