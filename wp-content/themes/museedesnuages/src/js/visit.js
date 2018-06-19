on('/visit', arg => {

    let caseOpened = false;

    if ( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
        let cssLink = document.querySelector('#main_style-css');
        cssLink.href = cssLink.href.replace('app', 'mobileApp');

        /*
         * Adapt color menuButton on mobile
         */
        var controller = new ScrollMagic.Controller();

        var scene = new ScrollMagic.Scene({triggerElement: ".frame-2", triggerHook: 'onLeave', offset: -100})
        	.setClassToggle(".toggleMenu", "black") // add class toggle
        	.addTo(controller);

    } else {
        /*
         * Set data scroll state
         */

        // Scroll
        var lethargy = new Lethargy();
        let scrollLimit = 19,
            count = 0,
            lastScroll = Date.now();

        $(window).bind('mousewheel DOMMouseScroll wheel MozMousePixelScroll', e => {

            if (caseOpened) return;

            e.preventDefault();
            e.stopPropagation();

            if (Date.now() - lastScroll < 1200) return;
            lastScroll = Date.now();

            let scrollValue = lethargy.check(e);

            if (scrollValue === 1 && count > 0) {
                count--;
                document.querySelector('body').dataset.scrollState = count;
            } else if (scrollValue === -1 && scrollLimit > count) {
                count++;
                document.querySelector('body').dataset.scrollState = count;
            }
        });

        // Arrow
        document.onkeydown = checkKey;

        function checkKey(e) {
            e = e || window.event;

            if (e.keyCode == '38' && count > 0) {
                count--
                document.querySelector('body').dataset.scrollState = count;
            } else if (e.keyCode == '40' && scrollLimit > count) {
                count++
                document.querySelector('body').dataset.scrollState = count;
            }
        }

        /*
         * Overflow hide html
         */

        document.querySelector('html').style.overflow = "hidden";
    }

    /*
     * Open/close case study
     */

    document.querySelectorAll('.buttonDetail').forEach((button, i) => {
        button.onclick = e => {
            caseOpened = true;

            let caseStudy = document.querySelector('.caseStudy-' + (i + 1));

            caseStudy.classList.add('display');
            window.requestAnimationFrame(() => {
                caseStudy.classList.add('visible');
            });
        }
    });

    document.querySelectorAll('.goBack').forEach(goBack => {
        goBack.onclick = e => {
            caseOpened = false;

            let caseStudy = goBack.parentElement.parentElement;

            caseStudy.classList.remove('visible');
            setTimeout(() => {
                caseStudy.classList.remove('display');
            }, 350);
        };
    })
});
