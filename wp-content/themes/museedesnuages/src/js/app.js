document.querySelector(".toggleMenu").onclick = function() {
    document.querySelector(".menu").classList.toggle("click");
    document.querySelector(".toggleMenu").classList.toggle("click");
    document.querySelector("body").classList.toggle("noOverflow");

    setTimeout(function() {
        document.querySelector(".menu").classList.toggle("open");
        document.querySelector(".toggleMenu").classList.toggle("open");
    }, 300);

    setTimeout(function() {
        document.querySelector(".menu_0").classList.toggle("active");
    }, 650);
};

let items = document.querySelectorAll(".menuItem");

items.forEach(item => {
    if (item == items[0]) return;

    item.onmouseenter = e => {
        items[0].classList.remove("active");
    }

    item.onmouseleave = e => {
        items[0].classList.add("active");
    }
})
