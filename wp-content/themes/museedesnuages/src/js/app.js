/*
 * Split JS
 */

let here = window.location.pathname.split('/');

if (here[here.length - 1] === '') {
    here.pop();
}

function on(path, cb) {
    let routes = path.split('/');

    if (routes[routes.length - 1] === '') {
        routes.pop();
    }

    let block = routes.find((route, i) => route !== here[i] && route[0] !== '*' && route[0] !== ':');

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
    on('/', () => {
        document.querySelector(".toggleSound").classList.toggle("click");
    });

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
});
