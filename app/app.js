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
  swipeHandler('.About', '.aboutSections', '.aboutCarouselButtons button');
  swipeHandlerMobile('.About', '.aboutSections', '.aboutCarouselButtons button');
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
//about carousel swipe handler
const swipeHandler = (container, moveableSelector, buttonsSelector) => {
  let isInProgress = false;
  let isDragging = false;
  let isCursorDown = false;
  let cursorPosStart = null;
  let cursorPosEnd = null;
  let aboutWidth = null;
  let margLeftInit = null;
  const threshold = 50;
  $(container)
    .mousedown(function (event) {
      isDragging = false;
      isCursorDown = true;
      cursorPosStart = event.pageX;
      aboutWidth = $(container).width();
      margLeftInit = $(moveableSelector).css('margin-left');
    })
    .mousemove(function (event) {
      if (isCursorDown) {
        isDragging = true;
        $(moveableSelector).css({
          marginLeft: parseInt(margLeftInit) - (cursorPosStart - event.pageX) + 'px'
        })
      }
    })
    .mouseup(function (event) {
      let wasDragging = isDragging;
      isDragging = false;
      isCursorDown = false;
      cursorPosEnd = event.pageX;
      if (wasDragging && !isInProgress) {
        let dragged = cursorPosStart - cursorPosEnd;
        const activeItem = $(buttonsSelector+'.active');
        const buttons = $(buttonsSelector);
        const activeBtnIndex = buttons.index(activeItem);

        let newMargin = parseInt(margLeftInit) / parseInt(aboutWidth) * 100;
        if (dragged > threshold && (activeBtnIndex + 1) < buttons.length) {
          buttons.removeClass("active");
          buttons.eq(activeBtnIndex + 1).addClass("active");
          newMargin = -100 * (activeBtnIndex + 1);
        }
        else if (dragged < -50 && (activeBtnIndex - 1) >= 0) {
          buttons.removeClass("active");
          buttons.eq(activeBtnIndex - 1).addClass("active");
          newMargin = -100 * (activeBtnIndex - 1);
        }

        //animate
        isInProgress = true;
        $(moveableSelector).animate({
          marginLeft: newMargin + '%'
        },
        500,
        function () {
          isInProgress = false;
        })
      }
    })
    //reset on mouseleave
    .mouseleave(function (event) {
      let wasDragging = isDragging;
      isDragging = false;
      isCursorDown = false;
      cursorPosEnd = event.pageX;
      if (wasDragging && !isInProgress) {
        isInProgress = true;
        $(moveableSelector).animate({
          marginLeft: parseInt(margLeftInit) / parseInt(aboutWidth) * 100 + '%'
        },
          500,
          function () {
            isInProgress = false;
          })
      }
    })
}
const swipeHandlerMobile = (container, moveableSelector, buttonsSelector) => {
  let isInProgress = false;
  let isDragging = false;
  let isCursorDown = false;
  let cursorPosStart = null;
  let cursorPosEnd = null;
  let aboutWidth = null;
  let margLeftInit = null;
  const threshold = 50;
  $(container)
    .bind('touchstart', function (event) {
      isDragging = false;
      isCursorDown = true;
      cursorPosStart = event.pageX;
      aboutWidth = $(container).width();
      margLeftInit = $(moveableSelector).css('margin-left');
    })
    .bind('touchmove',function (event) {
      if (isCursorDown) {
        isDragging = true;
        $(moveableSelector).css({
          marginLeft: parseInt(margLeftInit) - (cursorPosStart - event.pageX) + 'px'
        })
      }
    })
    .bind('touchend', function (event) {
      let wasDragging = isDragging;
      isDragging = false;
      isCursorDown = false;
      cursorPosEnd = event.pageX;
      if (wasDragging && !isInProgress) {
        let dragged = cursorPosStart - cursorPosEnd;
        const activeItem = $(buttonsSelector+'.active');
        const buttons = $(buttonsSelector);
        const activeBtnIndex = buttons.index(activeItem);

        let newMargin = parseInt(margLeftInit) / parseInt(aboutWidth) * 100;
        if (dragged > threshold && (activeBtnIndex + 1) < buttons.length) {
          buttons.removeClass("active");
          buttons.eq(activeBtnIndex + 1).addClass("active");
          newMargin = -100 * (activeBtnIndex + 1);
        }
        else if (dragged < -50 && (activeBtnIndex - 1) >= 0) {
          buttons.removeClass("active");
          buttons.eq(activeBtnIndex - 1).addClass("active");
          newMargin = -100 * (activeBtnIndex - 1);
        }

        //animate
        isInProgress = true;
        $(moveableSelector).animate({
          marginLeft: newMargin + '%'
        },
        500,
        function () {
          isInProgress = false;
        })
      }
    })
}

//swap intro text content on click
const introHandler = () => {

  $('.Intro .Accordion .titles a:not(active)')
    .click(function (event) {
      const index = $(this).index();

      $('.Intro .Accordion .titles a').removeClass('active');
      $(this).addClass('active');

      const textsArray = $('.Intro .Accordion .texts p');
      textsArray.removeClass('active');
      $(`.Intro .Accordion .texts p:nth-of-type(${index + 1})`).addClass('active');
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
      $(querySelector)
        .html(
          `<p>"` + quotesArray[localIndex].quote + `"</br>` +
          `<span>(` + quotesArray[localIndex].author + `)</span></p>`
        )
        .animate({
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
