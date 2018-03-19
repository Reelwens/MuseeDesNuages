function toggleClass(clickEl, animateEl) {
    document.querySelector('.' + clickEl).onclick = function() {
        document.querySelector("#" + animateEl).classList.toggle("active");
    };
};

toggleClass('toggleHeader', 'header');

window.addEventListener('scroll', function(event) {
  const topDistance = this.pageYOffset;
  const layers = document.querySelectorAll("[data-type='parallax']");

  for (let layer of Array.from(layers)) {
    const depth = layer.getAttribute('data-depth');
    const movement = (topDistance * depth);
    const translate3d = `translate3d(0, ${movement}px, 0)`;
    layer.style['-webkit-transform'] = translate3d;
    layer.style['-moz-transform'] = translate3d;
    layer.style['-ms-transform'] = translate3d;
    layer.style['-o-transform'] = translate3d;
    layer.style.transform = translate3d;
  }
});
