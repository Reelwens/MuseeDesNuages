/*
 * Menu class animation
 */

// Listen active menu page
let items = document.querySelectorAll(".menuItem");

let activePage = 0;
if (location.pathname.substr(1, 5) == "visit") {
    activePage = 1;
}
else if (location.pathname.substr(1, 4) == "news") {
    activePage = 2;
}
else if (location.pathname.substr(1, 8) == "services") {
    activePage = 3;
}
else if (location.pathname.substr(1, 7) == "contact") {
    activePage = 4;
}

// Toggle classes necessary for animations
document.querySelector(".toggleMenu").onclick = function() {
    document.querySelector(".menu").classList.toggle("click");
    document.querySelector(".toggleMenu").classList.toggle("click");
    document.querySelector(".toggleSound").classList.toggle("click");
    document.querySelector("body").classList.toggle("noOverflow");

    setTimeout(function() {
        document.querySelector(".menu").classList.toggle("open");
        document.querySelector(".toggleMenu").classList.toggle("open");
    }, 300);

    setTimeout(function() { // After all is loaded + 50ms
        document.querySelector(".menu_" + activePage).classList.toggle("active");
    }, 650);
};

items.forEach(item => { // Remove active menu layout on hover
    if (item == items[activePage]) return;

    item.onmouseenter = e => {
        items[activePage].classList.remove("active");
    }

    item.onmouseleave = e => {
        items[activePage].classList.add("active");
    }
})




/*
 * Sound play/stop
 */

document.querySelector(".toggleSound").onclick = function() {
    document.querySelector(".toggleSound").classList.toggle("pause");
}




/*
 * Parallax
 */

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




/*
 * Loading handle
 */

window.onload = function() {
    setTimeout(function() {
        document.querySelector("body").classList.remove("loading");

        setTimeout(function() {
            document.querySelector(".loader").classList.remove("display");
        }, 500);

    }, 500);
};
