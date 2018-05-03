on('/', () => {
    /*
     * Dynamic fade out pathImg
     */

    const path = document.querySelector('.pathImg');
    const doc = document.documentElement;

    let offset;

    let onScroll = () => {
        let percent = (doc.scrollTop + doc.clientHeight - offset) * 100 / (doc.scrollHeight - offset);

        path.style['-webkit-mask-image'] = `linear-gradient(to bottom, black ${percent - 3}%, transparent ${percent - 2}%, transparent 100%)`;
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
     * TweenMax home
     */

    // Init
    var controller = new ScrollMagic.Controller();

    // Build scene
    var scene = new ScrollMagic.Scene({
                        triggerElement: "#triggerGradient",
                        duration: 100
                    })
                    .setTween("#gradient", {opacity: 1})
                    .addTo(controller);


    new ScrollMagic.Scene({triggerElement: "#triggerGradient"})
    				.setClassToggle(".toggleMenu", "click") // add class toggle
    				.addTo(controller);

    new ScrollMagic.Scene({triggerElement: "#triggerGradient"})
    				.setClassToggle(".toggleSound", "click") // add class toggle
    				.addTo(controller);
});
