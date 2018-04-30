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
document.querySelector(".toggleMenu").onclick = e => {
    document.querySelector(".menu").classList.toggle("click");
    document.querySelector(".toggleMenu").classList.toggle("click");
    document.querySelector(".toggleMenu").classList.toggle("bgVisible");
    document.querySelector(".toggleSound").classList.toggle("click");
    document.querySelector("body").classList.toggle("noOverflow");

    setTimeout( e => {
        document.querySelector(".menu").classList.toggle("open");
        document.querySelector(".toggleMenu").classList.toggle("open");
    }, 300);

    setTimeout( e => { // After all is loaded + 50ms
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

document.querySelector(".toggleSound").onclick = e => {
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
 * Dynamic fade out pathImg
 */

const path = document.querySelector('.pathImg');
const doc = document.documentElement;

let offset;

let onScroll = () => {
    let percent = (doc.scrollTop + doc.clientHeight - offset) * 100 / (doc.scrollHeight - offset);

    path.style['-webkit-mask-image'] = `linear-gradient(to bottom, black ${percent - 3 + (percent*2/100)}%, transparent ${percent - 2 + (percent*2/100)}%, transparent 100%)`;
}

let setOffset = () => {
    let docRect = doc.getBoundingClientRect();
    let pathRect = path.getBoundingClientRect();

    offset = pathRect.top - docRect.top;
    onScroll();
}

setOffset();

window.onresize = setOffset;
document.body.onscroll = onScroll;



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
