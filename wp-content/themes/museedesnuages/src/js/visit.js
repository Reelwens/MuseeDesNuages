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
        let scrollLimit = 19,
            count = 0,
            lastScroll = Date.now();

        window.onwheel = e => {
            console.log(e)

            if (caseOpened) return;

            e.preventDefault();
            e.stopPropagation();

            if (Date.now() - lastScroll < 1200) return;
            lastScroll = Date.now();

            if (e.deltaY < 0 && count > 0) {
                count--;
                document.querySelector('body').dataset.scrollState = count;
            } else if (e.deltaY > 0 && scrollLimit > count) {
                count++;
                document.querySelector('body').dataset.scrollState = count;
            }
        }

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
         * Ariane string
         */

        document.querySelector('.arianeElement.water').onclick = e => {
            count = 1;
            document.querySelector('body').dataset.scrollState = 1;
        }

        document.querySelector('.arianeElement.cloud').onclick = e => {
            count = 7;
            document.querySelector('body').dataset.scrollState = 7;
        }

        document.querySelector('.arianeElement.light').onclick = e => {
            count = 12;
            document.querySelector('body').dataset.scrollState = 12;
        }

        document.querySelector('.arianeElement.flash').onclick = e => {
            count = 17;
            document.querySelector('body').dataset.scrollState = 17;
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
