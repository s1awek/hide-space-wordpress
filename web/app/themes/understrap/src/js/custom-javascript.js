(function ($) {
    'use strict';
    $('#P1').YTPlayer();
    $(window).on('scroll load', $.debounce(200, false, function (e) {
      var height = $(window).scrollTop();
      if (height > 0) {
        $('.top-wrap').addClass('scroll');
      } else {
        $('.top-wrap').removeClass('scroll');
      }
    }));
    
    $('.projects__slider').slick({
      infinite: true,
      slidesToShow: 3,
      slidesToScroll: 1,
      nextArrow: '<button aria-label="Move slider right" class="slick-right"><i class="fas fa-chevron-right"></i></button>',
      prevArrow: '<button aria-label="Move slider left" class="slick-left"><i class="fas fa-chevron-left"></i></button>',
      responsive: [
        {
          breakpoint: 991,
          settings: {
            slidesToShow: 2
          }
              }, 
              {
          breakpoint: 767,
          settings: {
            slidesToShow: 1
          }
        }
        // You can unslick at a given breakpoint now by adding: settings: "unslick"
        // instead of a settings object
      ]
      });
      
      $('.logos__row').slick({
      infinite: true,
      slidesToShow: 4,
      slidesToScroll: 1,
      autoplay: true,
      autoplaySpeed: 1000,
      arrows: false,
      dots: false,
      responsive: [
        {
          breakpoint: 991,
          settings: {
            slidesToShow: 3
          }
              }, 
              {
          breakpoint: 767,
          settings: {
            slidesToShow: 2
          }
        }
        // You can unslick at a given breakpoint now by adding: settings: "unslick"
        // instead of a settings object
      ]
    });
    AOS.init();
  })(jQuery);
  