/**
 * APPLICATION ENGINE
 * using jQuery javascript library
 */
$(document).ready(function () {
  toggleHeaderHandler();
  carouselBtnHandler(".aboutCarouselButtons button", ".aboutSections");
  carouselBtnHandler(".quoteCarouselButtons button", ".quotesList");
  onClickScrollTo(".watchVideoBtn", ".Intro");
  autoSwapQuote('.testQuote', 5000, 0);
  introHandler();
});

/******************************************** 
* GLOBAL VARS
********************************************/
const quotesArray = [
  {
    quote: `Let us make our future now, and let us make our dreams tomorrow’s reality`,
    author: `Malala Yousafzai`
  },
  {
    quote: `The future starts today, not tomorrow`,
    author: `Pope John Paul II`
  },
  {
    quote: `Yesterday is not ours to recover, but tomorrow is ours to win or lose`,
    author: `Lyndon B. Johnson`
  },
  {
    quote: `Tomorrow belongs to those who prepare for it today`,
    author: `Malcolm X`
  },
];

/******************************************** 
* FUNCTIONS *********************************
********************************************/
//swap intro text content on click
const introHandler = () => {
  console.log($('.Intro .Accordion .titles a'));

  $('.Intro .Accordion .titles a:not(active)').click(function (event) {
    const index = $(this).index();

    $('.Intro .Accordion .titles a').removeClass('active');
    $(this).addClass('active');

    const textsArray = $('.Intro .Accordion .texts p');
    textsArray.removeClass('active');
    $(`.Intro .Accordion .texts p:nth-of-type(${index+1})`).addClass('active');
  });
}

//auto swap quotes
const autoSwapQuote = (querySelector, duration, quoteIndex) => {

  const localIndex = (quoteIndex >= quotesArray.length) ? 0 : quoteIndex;

  setTimeout(() => {
    $(querySelector).animate({
      opacity: 0
    }, 100);
    setTimeout(() => {
      $(querySelector).html(
        `<p>"` + quotesArray[localIndex].quote + `"</br>` +
        `<span>(` + quotesArray[localIndex].author + `)</span></p>`
      ).animate({
        opacity: 1
      }, 250);
      autoSwapQuote(querySelector, duration, localIndex + 1);
    }, 250);
  }, duration - 500);
}

//go to subPage
function onClickScrollTo(buttonSelector, subPageSelector) {
  $(buttonSelector).click(() => {
    $('html, body').animate({
      scrollTop: $(subPageSelector).offset().top
    }, 1000);
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

    //switch on/off moving animation
    const i = $(buttonSelector).index(this);
    const items = $(moveableSelector + ">*");
    items.removeClass("moving");
    $(items[i]).addClass("moving");

    //animate to selected section
    $(moveableSelector).animate({
      marginLeft: (-100 * $(this).index()) + "%"
    })
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
