(function($) {
  "use strict"; // Start of use strict

  // Smooth scrolling using jQuery easing
  $('a.js-scroll-trigger[href*="#"]:not([href="#"])').click(function() {
    if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
      if (target.length) {
        $('html, body').animate({
          scrollTop: (target.offset().top - 56)
        }, 1000, "easeInOutExpo");
        return false;
      }
    }
  });

  // Closes responsive menu when a scroll trigger link is clicked
  $('.js-scroll-trigger').click(function() {
    $('.navbar-collapse').collapse('hide');
  });

  // Activate scrollspy to add active class to navbar items on scroll
  // $('body').scrollspy({
  //   target: '#mainNav',
  //   offset: 57
  // }); 

  // Collapse Navbar
  var navbarCollapse = function() {
    if ($("#mainNav").offset().top > 100) {
      $("#mainNav").addClass("navbar-shrink");
    } else {
      $("#mainNav").removeClass("navbar-shrink");
    }
  };
  // Collapse now if page is not at top
  navbarCollapse();
  // Collapse the navbar when page is scrolled
  $(window).scroll(navbarCollapse);

  // Scroll reveal calls
  window.sr = ScrollReveal();
  sr.reveal('.img-fluid', {
    delay: 500,
    scale: 0
  });
  sr.reveal('.sr-icon-1', {
    delay: 200,
    scale: 0
  });
  sr.reveal('.sr-icon-2', {
    delay: 400,
    scale: 0
  });
  sr.reveal('.sr-icon-3', {
    delay: 600,
    scale: 0
  });
  sr.reveal('.sr-icon-4', {
    delay: 800,
    scale: 0
  });
  sr.reveal('.sr-button', {
    delay: 200,
    distance: '15px',
    origin: 'bottom',
    scale: 0.8
  });
  sr.reveal('.sr-contact-1', {
    delay: 200,
    scale: 0
  });
  sr.reveal('.sr-contact-2', {
    delay: 400,
    scale: 0
  });
  sr.reveal('#ryan', {
    delay: 400,
    scale: 0
  });

  // Magnific popup calls
  $('.popup-gallery').magnificPopup({
    delegate: 'a',
    type: 'image',
    tLoading: 'Loading image #%curr%...',
    mainClass: 'mfp-img-mobile',
    gallery: {
      enabled: true,
      navigateByImgClick: true,
      preload: [0, 1]
    },
    image: {
      tError: '<a href="%url%">The image #%curr%</a> could not be loaded.'
    }
  });

  $(".cta span").click(function(){
    $(".cta:not(.sent)").addClass("active");
    $("input").focus();
  });
  
  var regex = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
  
  $("input").on('input', function(){
    if(regex.test($(this).val())) {
      $("button").removeAttr("disabled"); }
    else {
      $("button").attr("disabled", "disabled"); }
  });
  
  $("form").submit(function(x){
    x.preventDefault();
    if(regex.test($("input").val())) {
      $(".cta span").text("Thank you!");
      $(".cta").removeClass("active").addClass("sent");
    }
  });

})(jQuery); // End of use strict
