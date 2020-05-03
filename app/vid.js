/* Play an animation on each click */
let iconSkipForward = document.getElementById('bm');

let animationSkipForward = bodymovin.loadAnimation({
        container: iconSkipForward,
        renderer: 'svg',
        loop: false,
        autoplay: false,
        path: './tourgo.web/video/data.json'
});

  iconSkipForward.addEventListener('click', function() {
  animationSkipForward.play();
  animationSkipForward.addEventListener('complete', ()=>animationSkipForward.goToAndStop(0, true));
});