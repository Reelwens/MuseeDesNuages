/*
 * Split JS
 */

let here = window.location.pathname.split('/');

function on(path, cb) {
    let routes = path.split('/');

    let block = routes.find((route, i) => route !== here[i] && route[0] !== '*' && route[0] !== ':');

    if (here[here.length - 1] === '' && routes[here.length - 1] !== '') {
        here.pop();
    }

    if (block === undefined && routes.length === here.length) {
        let data = {};
        routes.forEach((route, i) => {
            if (route[0] === ':') {
                data[route.substring(1)] = here[i];
            }
        });
        cb(data);
    }
}




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
 * Parallax
 */

window.addEventListener('scroll', event => {
    const layers = document.querySelectorAll("[data-type='parallax']");

    layers.forEach(layer => {
        const topDistance = window.pageYOffset - layer.parentElement.offsetTop;
        const depth = layer.getAttribute('data-depth');
        const movement = (topDistance * depth);
        const translateY = `translateY(${movement}px)`;
        layer.style['-webkit-transform'] = translateY;
        layer.style['-moz-transform'] = translateY;
        layer.style['-ms-transform'] = translateY;
        layer.style['-o-transform'] = translateY;
        layer.style.transform = translateY;
    });
});




/*
 * Sound play/stop
 */

document.querySelector(".toggleSound").onclick = e => {
    document.querySelector(".toggleSound").classList.toggle("pause");
}



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
