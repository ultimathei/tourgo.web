$.getJSON('/video/data.json', (data) => {
  /* Play an animation on each click */
  let iconSkipForward = document.getElementById('bm');

  let animationSkipForward = bodymovin.loadAnimation({
    container: iconSkipForward,
    renderer: 'svg',
    loop: false,
    autoplay: false,
    //path: '/video/data.json',
    animationData: data
  });

  iconSkipForward.addEventListener('click', function () {
    animationSkipForward.play();
    animationSkipForward.addEventListener('complete', () => animationSkipForward.goToAndStop(0, true));
  });
});

