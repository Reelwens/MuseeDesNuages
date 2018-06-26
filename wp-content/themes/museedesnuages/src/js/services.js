on('/services', arg => {
    /*
     * Anchors handlers
     */

    const anchorsMenu   = document.querySelector('.headerAnchors'),
          headerPage    = document.querySelector('.headerPage'),
          services      = document.querySelectorAll('.service'),
          anchorsLinks  = document.querySelectorAll('.anchorsLinks'),
          anchors       = document.querySelectorAll('.anchor'),
          anchorsHeight = anchorsMenu.offsetHeight;

    // Anchors fixed at scroll
    let onScroll = () => {
        let headerOffset = headerPage.getBoundingClientRect().bottom;

        if (headerOffset < anchorsHeight) {
            anchorsMenu.classList.add('headerAnchorsFixed');
        }
        else{
            anchorsMenu.classList.remove('headerAnchorsFixed');
        }
    };

    let sectionIsVisible = () => {
        for (let i = 0; i < services.length; i++){
            let rect          = services.item(i).getBoundingClientRect(),
                sectionSize   = services.item(i).offsetHeight,
                sectionBottom = rect.bottom;

            let translateXPhone = 100*i,
                translateXTablet = 50*i;

            if((sectionBottom < sectionSize) && (sectionBottom >= 0 )){
                anchors.item(i).classList.add('activeAnchor');
                // different display for mobile
                if(window.innerWidth < 380){
                    anchorsLinks.item(0).style.transform = 'translateX(' + -translateXPhone + 'vw)';
                }
                // different display for tablet
                if(window.innerWidth > 380 && window.innerWidth < 770){
                    anchorsLinks.item(0).style.transform = 'translateX(' + -translateXTablet + '%)';
                }
            }
            else{
                anchors.item(i).classList.remove('activeAnchor');
            }
        }
    };

    window.addEventListener('scroll', function(event) {
        event.preventDefault();
        onScroll();
        sectionIsVisible();
    })

    // Anchors smooth scroll
    // For older browsers
    if ( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
        $(document).on('click', 'a[href^="#"]', function (event) {
            event.preventDefault();
            $('html, body').animate({
                scrollTop: $($.attr(this, 'href')).offset().top
            }, 500);
        });
    }
    else{
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (event) {
                event.preventDefault();

                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth',
                    block: 'start',
                });
            });
        });
    };

    var controller = new ScrollMagic.Controller();

    var scene = new ScrollMagic.Scene({triggerElement: ".headerAnchors", triggerHook: 'onLeave', offset: -75})
        .setClassToggle(".toggleMenu", "black") // add class toggle
        .addTo(controller);
});
