on('/', arg => {
    /*
     * Dynamic fade out pathImg
     */
    const path = document.querySelector('.pathImg');
    const doc = document.documentElement;

    let offsetTop;
    let offsetBottom;

    let onScroll = () => {
        let scrollTop = Math.max(window.pageYOffset, document.documentElement.scrollTop, document.body.scrollTop);
        let percent = (scrollTop + doc.clientHeight - offsetTop) * 100 / (doc.scrollHeight - offsetTop - offsetBottom);

        path.style['-webkit-mask-image'] = `linear-gradient(to bottom, black ${percent - 3}%, transparent ${percent - 2}%, transparent 100%)`;
    }

    let setOffset = () => {
        let docRect = doc.getBoundingClientRect();
        let pathRect = path.getBoundingClientRect();

        offsetTop = pathRect.top - docRect.top;
        offsetBottom = docRect.bottom - pathRect.bottom;
        onScroll();
    }

    setOffset();

    window.onresize = setOffset;
    document.body.onscroll = onScroll;




    /*
     * Sound play/stop
     */


    var sound = true;

    document.querySelector(".toggleSound").onclick = e => {
        document.querySelector(".toggleSound").classList.toggle("pause");
        if (sound === true) {
            document.querySelector("#sound").volume = 0;
            sound = false;
        }
        else {
            // Fix chrome refresh-no-sound bug
            document.querySelector("#sound").play();

            document.querySelector("#sound").volume = 1;
            sound = true;
        }
    }





    /*
     * Interactions
     */

    document.querySelectorAll('.backButton').forEach(button => {
        button.onclick = e => {
            let interaction = button.parentElement.parentElement;

            interaction.classList.remove('visible');
        }
    })

    document.querySelector(".point-5").onclick = e => {
        document.querySelector(".artInteraction").classList.toggle("visible");
    }

    document.querySelector(".point-9").onclick = e => {
        document.querySelector(".climatInteraction").classList.toggle("visible");
    }

    document.querySelector(".point-15").onclick = e => {
        document.querySelector(".shareInteraction").classList.toggle("visible");
    }




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


    new ScrollMagic.Scene({triggerElement: "#triggerGradient", triggerHook: 'onLeave', offset: -150})
    	.setClassToggle(".toggleMenu", "black") // add class toggle
    	.addTo(controller);

    new ScrollMagic.Scene({triggerElement: "#triggerGradient", triggerHook: 'onLeave', offset: -150})
    	.setClassToggle(".toggleSound", "black") // add class toggle
    	.addTo(controller);

    new ScrollMagic.Scene({triggerElement: ".heading", triggerHook: 'onEnter', offset: 200})
        .setClassToggle(".heading", "visible") // add class toggle
        .addTo(controller);

    new ScrollMagic.Scene({triggerElement: ".point-1", triggerHook: 'onEnter', offset: 250})
        .setClassToggle(".point-1", "visible") // add class toggle
        .addTo(controller);

    new ScrollMagic.Scene({triggerElement: ".point-1", triggerHook: 'onEnter', offset: 250})
        .setClassToggle(".paragraph-1", "visible") // add class toggle
        .addTo(controller);

    new ScrollMagic.Scene({triggerElement: ".point-2", triggerHook: 'onEnter', offset: 250})
        .setClassToggle(".point-2", "visible") // add class toggle
        .addTo(controller);

    new ScrollMagic.Scene({triggerElement: ".point-2", triggerHook: 'onEnter', offset: 250})
        .setClassToggle(".paragraph-2", "visible") // add class toggle
        .addTo(controller);

    new ScrollMagic.Scene({triggerElement: ".point-3", triggerHook: 'onEnter', offset: 250})
        .setClassToggle(".point-3", "visible") // add class toggle
        .addTo(controller);

    new ScrollMagic.Scene({triggerElement: ".point-3", triggerHook: 'onEnter', offset: 250})
        .setClassToggle(".paragraph-3", "visible") // add class toggle
        .addTo(controller);

    new ScrollMagic.Scene({triggerElement: ".point-4", triggerHook: 'onEnter', offset: 250})
        .setClassToggle(".point-4", "visible") // add class toggle
        .addTo(controller);

    new ScrollMagic.Scene({triggerElement: ".point-4", triggerHook: 'onEnter', offset: 250})
        .setClassToggle(".paragraph-4", "visible") // add class toggle
        .addTo(controller);

    new ScrollMagic.Scene({triggerElement: ".point-5", triggerHook: 'onEnter', offset: 250})
        .setClassToggle(".point-5", "visible") // add class toggle
        .addTo(controller);

    new ScrollMagic.Scene({triggerElement: ".point-5", triggerHook: 'onEnter', offset: 250})
        .setClassToggle(".paragraph-5", "visible") // add class toggle
        .addTo(controller);

    new ScrollMagic.Scene({triggerElement: ".point-6", triggerHook: 'onEnter', offset: 250})
        .setClassToggle(".point-6", "visible") // add class toggle
        .addTo(controller);

    new ScrollMagic.Scene({triggerElement: ".point-6", triggerHook: 'onEnter', offset: 250})
        .setClassToggle(".paragraph-6", "visible") // add class toggle
        .addTo(controller);

    new ScrollMagic.Scene({triggerElement: ".point-7", triggerHook: 'onEnter', offset: 250})
        .setClassToggle(".point-7", "visible") // add class toggle
        .addTo(controller);

    new ScrollMagic.Scene({triggerElement: ".point-7", triggerHook: 'onEnter', offset: 250})
        .setClassToggle(".paragraph-7", "visible") // add class toggle
        .addTo(controller);

    new ScrollMagic.Scene({triggerElement: ".point-8", triggerHook: 'onEnter', offset: 250})
        .setClassToggle(".point-8", "visible") // add class toggle
        .addTo(controller);

    new ScrollMagic.Scene({triggerElement: ".point-8", triggerHook: 'onEnter', offset: 250})
        .setClassToggle(".paragraph-8", "visible") // add class toggle
        .addTo(controller);

    new ScrollMagic.Scene({triggerElement: ".point-9", triggerHook: 'onEnter', offset: 250})
        .setClassToggle(".point-9", "visible") // add class toggle
        .addTo(controller);

    new ScrollMagic.Scene({triggerElement: ".point-9", triggerHook: 'onEnter', offset: 250})
        .setClassToggle(".paragraph-9", "visible") // add class toggle
        .addTo(controller);

    new ScrollMagic.Scene({triggerElement: ".point-10", triggerHook: 'onEnter', offset: 250})
        .setClassToggle(".point-10", "visible") // add class toggle
        .addTo(controller);

    new ScrollMagic.Scene({triggerElement: ".point-10", triggerHook: 'onEnter', offset: 250})
        .setClassToggle(".paragraph-10", "visible") // add class toggle
        .addTo(controller);

    new ScrollMagic.Scene({triggerElement: ".point-11", triggerHook: 'onEnter', offset: 250})
        .setClassToggle(".point-11", "visible") // add class toggle
        .addTo(controller);

    new ScrollMagic.Scene({triggerElement: ".point-11", triggerHook: 'onEnter', offset: 250})
        .setClassToggle(".paragraph-11", "visible") // add class toggle
        .addTo(controller);

    new ScrollMagic.Scene({triggerElement: ".point-12", triggerHook: 'onEnter', offset: 250})
        .setClassToggle(".point-12", "visible") // add class toggle
        .addTo(controller);

    new ScrollMagic.Scene({triggerElement: ".point-12", triggerHook: 'onEnter', offset: 250})
        .setClassToggle(".paragraph-12", "visible") // add class toggle
        .addTo(controller);

    new ScrollMagic.Scene({triggerElement: ".point-13", triggerHook: 'onEnter', offset: 250})
        .setClassToggle(".point-13", "visible") // add class toggle
        .addTo(controller);

    new ScrollMagic.Scene({triggerElement: ".point-13", triggerHook: 'onEnter', offset: 250})
        .setClassToggle(".paragraph-13", "visible") // add class toggle
        .addTo(controller);

    new ScrollMagic.Scene({triggerElement: ".point-14", triggerHook: 'onEnter', offset: 250})
        .setClassToggle(".point-14", "visible") // add class toggle
        .addTo(controller);

    new ScrollMagic.Scene({triggerElement: ".point-14", triggerHook: 'onEnter', offset: 250})
        .setClassToggle(".paragraph-14", "visible") // add class toggle
        .addTo(controller);

    new ScrollMagic.Scene({triggerElement: ".point-15", triggerHook: 'onEnter', offset: 250})
        .setClassToggle(".point-15", "visible") // add class toggle
        .addTo(controller);

    new ScrollMagic.Scene({triggerElement: ".point-15", triggerHook: 'onEnter', offset: 250})
        .setClassToggle(".paragraph-15", "visible") // add class toggle
        .addTo(controller);

    new ScrollMagic.Scene({triggerElement: ".point-16", triggerHook: 'onEnter', offset: 250})
        .setClassToggle(".point-16", "visible") // add class toggle
        .addTo(controller);

    new ScrollMagic.Scene({triggerElement: ".point-16", triggerHook: 'onEnter', offset: 250})
        .setClassToggle(".paragraph-16", "visible") // add class toggle
        .addTo(controller);

    new ScrollMagic.Scene({triggerElement: ".point-17", triggerHook: 'onEnter', offset: 250})
        .setClassToggle(".point-17", "visible") // add class toggle
        .addTo(controller);

    new ScrollMagic.Scene({triggerElement: ".point-17", triggerHook: 'onEnter', offset: 250})
        .setClassToggle(".paragraph-17", "visible") // add class toggle
        .addTo(controller);

    new ScrollMagic.Scene({triggerElement: ".point-18", triggerHook: 'onEnter', offset: 250})
        .setClassToggle(".point-18", "visible") // add class toggle
        .addTo(controller);

    new ScrollMagic.Scene({triggerElement: ".point-18", triggerHook: 'onEnter', offset: 250})
        .setClassToggle(".paragraph-18", "visible") // add class toggle
        .addTo(controller);

    new ScrollMagic.Scene({triggerElement: ".point-19", triggerHook: 'onEnter', offset: 250})
        .setClassToggle(".point-19", "visible") // add class toggle
        .addTo(controller);

    new ScrollMagic.Scene({triggerElement: ".point-19", triggerHook: 'onEnter', offset: 250})
        .setClassToggle(".paragraph-19", "visible") // add class toggle
        .addTo(controller);

    new ScrollMagic.Scene({triggerElement: ".point-20", triggerHook: 'onEnter', offset: 250})
        .setClassToggle(".point-20", "visible") // add class toggle
        .addTo(controller);

    new ScrollMagic.Scene({triggerElement: ".point-20", triggerHook: 'onEnter', offset: 250})
        .setClassToggle(".paragraph-20", "visible") // add class toggle
        .addTo(controller);

    new ScrollMagic.Scene({triggerElement: ".point-21", triggerHook: 'onEnter', offset: 250})
        .setClassToggle(".point-21", "visible") // add class toggle
        .addTo(controller);

    new ScrollMagic.Scene({triggerElement: ".point-21", triggerHook: 'onEnter', offset: 250})
        .setClassToggle(".paragraph-21", "visible") // add class toggle
        .addTo(controller);

    new ScrollMagic.Scene({triggerElement: ".seeRealizations", triggerHook: 'onEnter', offset: 200})
        .setClassToggle(".seeRealizations", "visible") // add class toggle
        .addTo(controller);

    new ScrollMagic.Scene({triggerElement: ".takeContact", triggerHook: 'onEnter', offset: 200})
        .setClassToggle(".takeContact", "visible") // add class toggle
        .addTo(controller);



    /*
     * Loading handle
     */

    window.onload = function() {
        setTimeout(function() {
            document.querySelector("body").classList.remove("loading");

            setTimeout(function() {
                document.querySelector("body").classList.remove("loadingEnding");
            }, 850);

        }, 500);
    };
});
