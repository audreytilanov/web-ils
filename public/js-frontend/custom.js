

$("#portfolio-widget-1-tab-content").isotope({ filter: '*' });

//Isotope handler

$(".portfolio-widget-1-tabs a").on("click", function(e){
  e.preventDefault();
  var $el = $(this);
  $(".portfolio-widget-1-tabs a").removeClass('active');
  $el.addClass('active');
  var filterValue = $el.data('filter');
  $("#portfolio-widget-tab-content").isotope({ filter: filterValue });
});


(function ($) {

  "use strict";

  // AOS ANIMATIONS
  AOS.init();

  // NAVBAR
  $('.navbar-nav .nav-link').click(function(){
      $(".navbar-collapse").collapse('hide');
  });

  // NEWS IMAGE RESIZE
  function NewsImageResize(){
    $(".navbar").scrollspy({ offset: -76 });
    
    var LargeImage = $('.large-news-image').height();

    var MinusHeight = LargeImage - 6;

    $('.news-two-column').css({'height' : (MinusHeight - LargeImage / 2) + 'px'});

  }

  $(window).on("resize", NewsImageResize);
  $(document).on("ready", NewsImageResize);

  $('a[href*="#"]').click(function (event) {
    if (
      location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
      if (target.length) {
        event.preventDefault();
        $('html, body').animate({
          scrollTop: target.offset().top - 66
        }, 1000);
      }
    }
  });

  //FOOD
  if ($('.testimonials-slider').length) {
      $('.testimonials-slider').bxSlider({
          // adaptiveHeight: true,
          auto: true,
          controls: true,
          nextText: '<i class="opins-icon-right"></i>',
          prevText: '<i class="opins-icon-left"></i>',
          pause: 5000,
          speed: 500,
          pager: true,
          pagerCustom: '.testimonials-slider-pager-one, .testimonials-slider-pager-two'
      });
  }
  
})(window.jQuery);



//Switch Thema
document.querySelector('.switcher-btn').onclick = () =>{
  document.querySelector('.color-switcher').classList.toggle('active');
};
let themeButtons = document.querySelectorAll('.theme-buttons');
themeButtons.forEach(color=>{
  color.addEventListener('click', ()=>{
    let dataColor = color.getAttribute('data-color');
    let dataColorFont = color.getAttribute('data-color-font');
    document.querySelector(':root').style.setProperty('--switch-color', dataColor);
    document.querySelector(':root').style.setProperty('--switch-font-color', dataColorFont);
  });
});



