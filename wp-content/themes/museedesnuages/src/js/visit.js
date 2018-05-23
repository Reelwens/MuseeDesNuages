on('/visit', arg => {
    /*
     * Set data scroll state
     */
    let scrollable = 10,
        count = 0,
        lastScroll = Date.now();

    document.querySelector('body').addEventListener('mousewheel', e => {
        if (Date.now() - lastScroll < 600) return;

        lastScroll = Date.now();

        if (e.wheelDelta / 120 > 0) {
            if (scrollable >= count && count > 0) {
                count--
                document.querySelector('body').dataset.scrollState = count;
            } else {
                return false;
            }
        } else {
            if (scrollable > count) {
                count++
                document.querySelector('body').dataset.scrollState = count;
            } else {
                return false;
            }
        }
    });



    /*
     * Overflow hide html
     */

    // document.querySelector('html').style.overflow = "hidden";
});
