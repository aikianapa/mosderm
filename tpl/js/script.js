$(document).ready(function() {




  $('.toggle-btn').on('click', function() {
    $(this).parent().find('.toggle-active').fadeToggle();
  });

  $('.spec-btn-review, .vacancy__btn > a').on('click', function() {
    $('html, body').animate({
      scrollTop: $("#question-2").offset().top
    }, 1500);
  });

  $('.menu__nav > ul > li').on('mouseover', function() {
    $(this).find('.menu__drop').addClass('active');
  })

  $('.menu__nav > ul > li').on('mouseout', function() {
    $(this).find('.menu__drop').removeClass('active');
  })

  $('.bloc').on('click', function() {
    $(this).parents('.center__info').find('.center__video').fadeIn();
  })

  $('.center__video-shadow').on('click', function() {
    $(this).parents('.center__info').find('.center__video').fadeOut();
  })

  $('.specialists__item, .branches__forms-list, .consultation__form-item, .list').on('click', function() {
    $(this).toggleClass('active');
    $(this).find('.spec-dropdown').fadeToggle();

  })



  if ($('.progress__slider').length > 0) {
    $('.progress__slider').slick({
      slidesToShow: 2,
      slidesToScroll: 1,
      arrows: true,
      lazyLoad: 'ondemand',

      infinite: true,
      centerMode: true,
      variableWidth: true,
      adaptiveHeight: true


    });
  }







  $('.map-btn').on('click', function(e) {
    e.preventDefault()
    $('.list-btn').removeClass('active');
    $(this).addClass('active');
    $('#ip-table').fadeOut();
    $('#contacts-map').fadeIn();
  });

  $('.list-btn').on('click', function(e) {
    e.preventDefault()
    $('.map-btn').removeClass('active');
    $(this).addClass('active');
    $('#contacts-map').fadeOut();
    $('#ip-table').fadeIn();
  });





  if ($('.banner__slider').length > 0) {
    $('.banner__slider').slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      arrows: false,
      dots: true,
      draggable: false,
      autoplay: true,
      autoplaySpeed: 4000
    })
  }




  if ($('.consultation__slider').length > 0) {
    $('.consultation__slider').slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      arrows: true,
      dots: true,
      draggable: false,
      responsive: [{
        breakpoint: 768,
        settings: {
          dots: false,
        }
      }]
    })
  }


  $('.inner-menu__close-btn').on('click', function() {
    $(this).parent().fadeOut();
  })

  if ($('.spec-reviews__slider').length > 0) {
    $('.spec-reviews__slider').slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      arrows: true,
      dots: false,
    })
  }






  if ($('[data-fancybox]').length > 0) {
    $("[data-fancybox]").fancybox({
      thumbs: false,
      hash: false,
      loop: true,
      keyboard: true,
      toolbar: false,
      arrows: true,
    })
  }




  $(window).on('resize', function() {
    if ($(window).width() < 768) {
      $('.footer__number > a.btn').appendTo('.footer__btn');

    }
    if ($(window).width() < 1200) {
      $('.dws').appendTo('.center__img-wrap');
    }

    if ($('.our-specialists__slider').length > 0) {
      if ($(window).width() > 992) {
        if (!$('.our-specialists__slider').hasClass('slick-initialized')) {
          $('.our-specialists__slider').slick({
            slidesToShow: 5,
            slidesToScroll: 1,
            arrows: true,
            responsive: [{
              breakpoint: 1200,
              settings: {
                slidesToShow: 3,
              }
            }]
          });
        }
      } else {
        if ($('.our-specialists__slider').hasClass('slick-initialized')) {
          $('.our-specialists__slider').slick('destroy');
        }
      }
    }

    if ($('.other__slider').length > 0) {

      if ($(window).width() > 1024) {
        if (!$('.other__slider').hasClass('slick-initialized')) {
          $('.other__slider').slick({
            slidesToShow: 3,
            slidesToScroll: 1,
            arrows: true,
          });
        }
      } else {

        if ($('.other__slider').hasClass('slick-initialized')) $('.other__slider').slick("destroy");
      }



    }



  });
  $(window).trigger('resize');




});

if ($('.stacktable-table').length > 0) {
  $('.stacktable-table table').stacktable()
}
