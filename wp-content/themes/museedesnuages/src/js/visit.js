on('/visit', arg => {
    /*
     * Set data scroll state
     */

    // Scroll
    var lethargy = new Lethargy();
    let scrollable = 11,
        count = 0,
        lastScroll = Date.now();

    $(window).bind('mousewheel DOMMouseScroll wheel MozMousePixelScroll', function(e){
        e.preventDefault()
        e.stopPropagation();

        if (Date.now() - lastScroll < 1200) return;
        lastScroll = Date.now();

        if(lethargy.check(e) == 1 && count > 0) {
            count--
            document.querySelector('body').dataset.scrollState = count;
        }
        else if (lethargy.check(e) == -1 && scrollable > count) {
            count++
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
        }
        else if (e.keyCode == '40' && scrollable > count) {
            count++
            document.querySelector('body').dataset.scrollState = count;
        }
    }



    /*
     * Overflow hide html
     */

    document.querySelector('html').style.overflow = "hidden";
});
