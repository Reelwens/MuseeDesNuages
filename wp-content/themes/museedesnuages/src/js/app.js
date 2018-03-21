document.querySelector(".toggleMenu").onclick = function() {
    document.querySelector(".menu").classList.toggle("click");
    document.querySelector(".toggleMenu").classList.toggle("click");
    document.querySelector("body").classList.toggle("noOverflow");

    setTimeout(function() {
        document.querySelector(".menu").classList.toggle("open");
        document.querySelector(".toggleMenu").classList.toggle("open");
    }, 300);
};
