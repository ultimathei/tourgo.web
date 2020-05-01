/**
 * APPLICATION ENGINE
 * using jQuery javascript library
 */
$(document).ready(function () {
  toggleHeaderHandler();
  carouselBtnHandler(".aboutCarouselButtons button", ".aboutSections");
  carouselBtnHandler(".quoteCarouselButtons button", ".quotesList");
  carouselStepperHandler(".quoteStepperBtns a", ".quotesList");
  onClickScrollTo(".watchVideoBtn", ".Intro");

  /*
  //TODO
  const e = $(".quotesCarousel");
  e.touch();
  //e.on('swipe', swipeHandler)
  */
});

/******************************************** 
* FUNCTIONS *********************************
********************************************/
//go to subPage
function onClickScrollTo(buttonSelector, subPageSelector) {
  $(buttonSelector).click(function () {
    $('html, body').animate({
      scrollTop: $(subPageSelector).offset().top
    }, 1000);
  });
}

//slide carousel to next/prev item
function carouselStepperHandler(buttonSelector, moveableSelector) {
  $(buttonSelector).click(function () {
    const adder = (this.classList.contains("nextItem")) ? 1 : -1;
    const carBtns = $(".quoteCarouselButtons button");

    //get index of new active element
    let i = 0;
    while (i < carBtns.length) {
      if (carBtns[i].classList.contains("active")) break;
      i++;
    }
    i += adder;
    if (i < 0) i = carBtns.length - 1;
    else if (i >= carBtns.length) i = 0;

    //add class active to clicked element
    carBtns.removeClass("active");
    $(carBtns[i]).addClass("active");

    //animate to selected section
    $(moveableSelector).animate({
      marginLeft: (-100 * i) + "%"
    })
  });
}

//slide carousel to correct position
function carouselBtnHandler(buttonSelector, moveableSelector) {
  $(buttonSelector).click(function () {
    if ($(this).hasClass("active")) {
      return
    }

    //add class active to clicked element
    $(buttonSelector).removeClass("active");
    $(this).addClass("active");

    //animate to selected section
    $(moveableSelector).animate({
      marginLeft: (-100 * $(this).index()) + "%"
    })
  });
}

//TODO swipe on carousel
function swipeHandler(event) {
  console.log("what");
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