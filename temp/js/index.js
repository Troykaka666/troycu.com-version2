var $ = require('jquery');


$(document).ready(function(){
    $('.button-download').mouseenter(function(){
        $('.button__item').addClass('top');
    });
    $('.button-download').mouseleave(function(){
        $('.button__item').removeClass('top');
    });

    $('#modal-menu a').on('click', function (e) {
        // Check for a hash value
        if (this.hash !== '') {
          // Prevent default behavior
          e.preventDefault();
  
          // Store hash
          const hash = this.hash;
  
          // Animate smooth scroll
          $('html, body').animate({
            scrollTop: $(hash).offset().top
          }, 900, function () {
            // Add hash to URL after scroll
            // window.location.hash = hash;
          });
        }
      });

});

    
