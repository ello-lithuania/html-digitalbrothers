$( document ).ready(function() {
  $( ".btn-mobile-toggle" ).on( "click", function() {
    $( ".mobile-navbar" ).toggleClass('navbar-visible');
  });
  $( ".btn-close" ).on( "click", function() {
    $( ".mobile-navbar" ).toggleClass('navbar-visible');
  });

  let section_active = 0;
  let section_place_active = 1;

  $(window).scroll(function () {
    if ($(this).scrollTop() > 50) {
      $('.navbar-inner').addClass('navbar-inner-active');
    } 
    if ($(this).scrollTop() < 50) {
      $('.navbar-inner').removeClass('navbar-inner-active');
    } 

    let section_top_computed = $('.section-scroll1').offset().top - 300;
    let section_bot_computed = $('.section-scrollLast').offset().top;

    if($(this).scrollTop() < section_top_computed || $(this).scrollTop() > section_bot_computed) {
      $( ".section-type1" ).each(function( index ) {
        $(this).removeClass('scroll-snapp');
      });
    } else if($(this).scrollTop() > section_top_computed) {
      $( ".section-type1" ).each(function( index ) {
        $(this).addClass('scroll-snapp');
      });
    }
    ////
    let link = $('.animation-scroll1').closest('.section-type1');
    let offset = link.offset();
    let top = offset.top - 300;
    let bottom = top + link.height();
    if ($(this).scrollTop() > top && $(this).scrollTop() < bottom) {
      $('.animation-scroll1').removeClass('hidden-desktop');
    } else {
      if(!$('.animation-scroll1').hasClass('hidden-desktop')){
        $('.animation-scroll1').addClass('hidden-desktop');
      }
    }

    let link2 = $('.animation-scroll2').closest('.section-type1');
    let offset2 = link2.offset();
    let top2 = offset2.top - 300;
    let bottom2 = top2 + link2.height();
    if ($(this).scrollTop() > top2 && $(this).scrollTop() < bottom2) {
      $('.animation-scroll2').removeClass('hidden-desktop');
    } else {
      if(!$('.animation-scroll2').hasClass('hidden-desktop')){
        $('.animation-scroll2').addClass('hidden-desktop');
      }
    }

    let link3 = $('.animation-scroll3').closest('.section-type1');
    let offset3 = link3.offset();
    let top3 = offset3.top - 300;
    let bottom3 = top3 + link3.height();
    if ($(this).scrollTop() > top3 && $(this).scrollTop() < bottom3) {
      $('.animation-scroll3').removeClass('hidden-desktop');
    } else {
      if(!$('.animation-scroll3').hasClass('hidden-desktop')){
        $('.animation-scroll3').addClass('hidden-desktop');
      }
    }

    let link4 = $('.animation-scroll4').closest('.section-type1');
    let offset4 = link4.offset();
    let top4 = offset4.top - 300;
    let bottom4 = top4 + link4.height();
    if ($(this).scrollTop() > top4 && $(this).scrollTop() < bottom4) {
      $('.animation-scroll4').removeClass('hidden-desktop');
    } else {
      if(!$('.animation-scroll4').hasClass('hidden-desktop')){
        $('.animation-scroll4').addClass('hidden-desktop');
      }
    }

    let link5 = $('.animation-scroll5').closest('.section-type1');
    let offset5 = link5.offset();
    let top5 = offset5.top - 300;
    let bottom5 = top5 + link5.height();
    if ($(this).scrollTop() > top5 && $(this).scrollTop() < bottom5) {
      $('.animation-scroll5').removeClass('hidden-desktop');
    } else {
      if(!$('.animation-scroll5').hasClass('hidden-desktop')){
        $('.animation-scroll5').addClass('hidden-desktop');
      }
    }
    let link6 = $('.animation-scroll6').closest('.section-type1');
    let offset6 = link6.offset();
    let top6 = offset6.top - 300;
    let bottom6 = top6 + link6.height();
    if ($(this).scrollTop() > top6 && $(this).scrollTop() < bottom6) {
      $('.animation-scroll6').removeClass('hidden-desktop');
    } else {
      if(!$('.animation-scroll6').hasClass('hidden-desktop')){
        $('.animation-scroll6').addClass('hidden-desktop');
      }
    }

  });

});
