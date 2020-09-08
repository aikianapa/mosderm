$(document).ready(function() {

  $("[data-wb-ajax='/ajax/mail/']").on("click", function () {
      $(this).on("wb_mail_done", function (ev, el, ajax, data) {
          data = $.parseJSON(data);
          var type = "success";
          if (data.error && $(el).parents("form").find(".form-fail").length) {
              $(el).parents("form").find(".form-body").addClass("d-none");
              $(el).parents("form").find(".form-fail").removeClass("d-none");
          } else if (!data.error && $(el).parents("form").find(".form-success").length) {
              $(el).parents("form").find(".form-body").addClass("d-none");
              $(el).parents("form").find(".form-success").removeClass("d-none");
          } else {
              if (data.error) {
                  type = "danger";
              }
              wbapp.baloon(data.msg, type);
          }
          $(el).parents("form").find("[data-wb-ajax]").addClass("d-none");
      });
  });

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

      if ($(window).width() > 1200) {
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

if ($("#lazyslide").length) {
  var slider = "/tpl/js/jquery.slide.min.js";
  var speed = 3000;
  var arrows = false;
  wb_include(slider);
  $(document).on("wb_include",function(e, res){
      if (res.url == slider) {

        if ($('#lazyslide .slide').data("speed") > "") speed = $('#lazyslide .slide').data("speed") *1;
        if ($('#lazyslide .slide').data("arrows") == "on") arrows = true;


        $('#lazyslide .slide').slide({
          isAutoSlide: true,
          slideSpeed: speed,
          switchSpeed: 900,
          isShowArrow: arrows,
          isShowDots: false,
          dotsEvent: 'mouseenter'
        });
      }

      /*

      ``` javascript
      $(function() {
        $('.slide').slide({
          isAutoSlide: true,                // 自动轮播
          isHoverStop: true,                // 鼠标移上是否停止轮播
          isBlurStop: true,                 // Window失去焦点是否停止轮播
          isShowDots: true,                 // 是否显示状态点
          isShowArrow: true,                // 是否显示左右箭头
          isHoverShowArrow: true,           // 是否鼠标移上才显示箭头
          isLoadAllImgs: false,             // 是否一次性加载完全部图片
          slideSpeed: 10000,                // 轮播速度 (ms)
          switchSpeed: 500,                 // 图片切换速度 (ms)
          dotsClass: 'dots',                // 状态点样式
          dotActiveClass: 'active',         // 状态点激活样式
          dotsEvent: 'click',               // 状态点事件，click或mouseover或mouseenter
          arrowClass: 'arrow',              // 箭头样式
          arrowLeftClass: 'arrow-left',     // 左箭头样式
          arrowRightClass: 'arrow-right'    // 右箭头样式
        });
      });
      */

  })
}
