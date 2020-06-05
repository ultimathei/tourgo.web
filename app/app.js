/**
 * APPLICATION ENGINE
 * using jQuery javascript library
 */
$(document).ready(function () {
  $('.goToFormBtn').click(handleFormSubmit);
  toggleHeaderHandler();
  carouselBtnHandler(".aboutCarouselButtons button", ".aboutSections");
  carouselBtnHandler(".quoteCarouselButtons button", ".quotesList");
  onClickScrollTo(".watchVideoBtn", ".Intro");
  autoSwapQuote('.testQuote', 5000, 0);
  introHandler();
  swipeHandler('.About', '.aboutSections', '.aboutCarouselButtons button');
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
    .bind('mousedown touchstart', function (event) {
      isDragging = false;
      isCursorDown = true;
      cursorPosStart = event.pageX;
      aboutWidth = $(container).width();
      margLeftInit = $(moveableSelector).css('margin-left');
    })
    .bind('mousemove touchmove', function (event) {
      if (isCursorDown) {
        isDragging = true;
        $(moveableSelector).css({
          marginLeft: parseInt(margLeftInit) - (cursorPosStart - event.pageX) + 'px'
        })
      }
    })
    .bind('mouseup touchend', function (event) {
      let wasDragging = isDragging;
      isDragging = false;
      isCursorDown = false;
      cursorPosEnd = event.pageX;
      if (wasDragging && !isInProgress) {
        let dragged = cursorPosStart - cursorPosEnd;
        const activeItem = $(buttonsSelector + '.active');
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
    .bind('mouseleave ', function (event) {
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

//email validation on client side
const validateEmail = (email) => {
  const re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
  return re.test(String(email).toLowerCase());
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

//handle click on submit button
const handleFormSubmit = (e) => {
  e.preventDefault();
  const email = $('#email')[0].value;
  const accepted = $('#acceptAll')[0].checked;
  let errorMsg = [];
  console.log(errorMsg);


  if (!validateEmail(email))
    errorMsg.push('Please type in a valid email address!');
  if (!accepted)
    errorMsg.push('You have to accept our T&C and Privacy Policy to participate!');

  return (errorMsg.length === 0) ?
    submitForm(email) :
    displayErrorMsg(errorMsg);
}

//displaying form errors to client
let errorMsgTimeout;
const displayErrorMsg = (msg) => {
  let messageBox = document.createElement("a");
  msg.map(item => {
    let p = document.createElement("p");
    p.innerHTML = item;
    messageBox.appendChild(p);
  })
  messageBox.id = "errorMsg";
  messageBox.href = "#";
  messageBox.onclick = (e) => {
    e.preventDefault();
    clearTimeout(errorMsgTimeout);
    removeErrorMsg();
  };

  if ($('#errorMsg').length > 0) $('#errorMsg').replaceWith(messageBox);
  else $('body')[0].append(messageBox);

  //slide up
  $('#errorMsg').animate({
    bottom: '3vh',
    opacity: 1
  }, 500);

  if (errorMsgTimeout) clearTimeout(errorMsgTimeout);
  //hide message after 5 seconds
  errorMsgTimeout = setTimeout(() => {
    removeErrorMsg();
  }, 5000);
}

//slide up element
const removeErrorMsg = () => {
  $('#errorMsg').animate({
    bottom: '-20vh',
    opacity: 0
  }, 500, () => {
    $('#errorMsg').remove();
  });
}

//submit the form here
const submitForm = (email) => {
  console.log('submiting form..');

  removeErrorMsg();

  $.ajax({
    url: 'process.php',
    type: 'post',
    data: {
      ajax: 1,
      //form data added below:
      email: email
    },
    success: function (response) {
      //$('#response').text('name : ' + response);
      //TODO based on response from server render message
      console.log(response);

      const tempResponse = 'success';
      if (tempResponse) {
        let messageBox = document.createElement("div");
        let h2 = document.createElement("h2");
        h2.innerHTML = 'Thank you';
        messageBox.appendChild(h2);
        let p = document.createElement("p");
        p.innerHTML = 'for signing up!';
        messageBox.appendChild(p);
        messageBox.id = 'signUpResponse';

        $('.HomeRightTop').html(messageBox);

      }

      //$('.HomeRightTop').remove();
    }
  });
}