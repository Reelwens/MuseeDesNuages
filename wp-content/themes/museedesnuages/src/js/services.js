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
<<<<<<< HEAD
            anchorsMenu.classList.remove('headerAnchorsFixed');
=======
            anchorsList.classList.remove('headerAnchorsFixed');
>>>>>>> b1af7911f857b1d9e22437b665ca359e47684a27
        }
    };

    let sectionIsVisible = () => {
        for (let i = 0; i < services.length; i++){
            let rect          = services.item(i).getBoundingClientRect(),
                sectionSize   = services.item(i).offsetHeight,
                sectionBottom = rect.bottom;

            let translateX = 95*i;

            if((sectionBottom < sectionSize) && (sectionBottom >= 0 )){
                anchors.item(i).classList.add('activeAnchor');
                // different display for mobile
                if(window.innerWidth < 380){
                    anchorsLinks.item(0).style.transform = 'translateX(' + -translateX + '%)';
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
            console.log('vieux');
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
                    behavior: 'smooth'
                });
            });
        });
    }
});
