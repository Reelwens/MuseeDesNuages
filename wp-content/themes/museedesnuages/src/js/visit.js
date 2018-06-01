on('/visit', arg => {
    /*
     * Set data scroll state
     */

    // Scroll
    var lethargy = new Lethargy();
    let scrollLimit = 11,
        count = 0,
        lastScroll = Date.now();

    $(window).bind('mousewheel DOMMouseScroll wheel MozMousePixelScroll', e => {
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
});
