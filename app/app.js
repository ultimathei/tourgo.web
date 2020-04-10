/**
 * APPLICATION ENGINE
 * using jQuery javascript library
 */
$(document).ready(function () {
  toggleHeaderHandler();
  formBtnHandler();
  aboutCarouselHandler();
  toggleVideoPlayer();
});

/******************************************** 
* FUNCTIONS *********************************
********************************************/

//toggle video player visibility
function toggleVideoPlayer(){
  $(".watchVideoBtn, .closeVideoPlayerBtn").click(function(){
    console.log("clicked");
    $(".videoPlayer").toggleClass("hiddenElement");
  })
}

//slide carousel to correct position
function aboutCarouselHandler() {
  $(".aboutCarouselButtons button").click(function () {
    if ($(this).hasClass("active")) {
      return
    }

    //add class active to clicked element
    $(".aboutCarouselButtons button").removeClass("active");
    $(this).addClass("active");

    //animate to selected section
    $(".aboutSections").animate({
      marginLeft: (-100 * $(this).index()) + "vw"
    })
  });
}

//Scroll to form on button click
function formBtnHandler() {
  $(".goToFormBtn").click(function () {
    $('html, body').animate({
      scrollTop: $(".Register").offset().top
    }, 1000);
  });
}

//toggle header visibility on scroll
function toggleHeaderHandler() {
  //Hide Header on scroll down
  var didScroll;
  var lastScrollTop = 0;
  var delta = 5;
  var navbarHeight = $('header').outerHeight();

  $(window).scroll(function (event) {
    didScroll = true;
  });

  //as scroll listeners are very expensive =>
  //check only on intervals
  setInterval(function () {
    if (didScroll) {
      hasScrolled();
      didScroll = false;
    }
  }, 250);


  function hasScrolled() {
    var st = $(this).scrollTop();

    // Make sure they scroll more than delta
    if (Math.abs(lastScrollTop - st) <= delta)
      return;

    // If they scrolled down and are past the navbar, add class .nav-up.
    // This is necessary so you never see what is "behind" the navbar.
    if (st <= (window.innerHeight / 2) || (st > lastScrollTop && st > navbarHeight)) {
      // Scroll Down
      $('header').removeClass('nav-down').addClass('nav-up');
    } else {
      // Scroll Up
      if (st + $(window).height() < $(document).height()) {
        $('header').removeClass('nav-up').addClass('nav-down');
      }
    }

    lastScrollTop = st;
  }
}