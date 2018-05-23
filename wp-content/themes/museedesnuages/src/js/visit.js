on('/visit', arg => {
    /*
     * Set data scroll state
     */
    var lethargy = new Lethargy();
    let scrollable = 10,
        count = 0;

    $(window).bind('mousewheel DOMMouseScroll wheel MozMousePixelScroll', function(e){
        e.preventDefault()
        e.stopPropagation();
        if(lethargy.check(e) == 1 && count > 0) {
            count--
            document.querySelector('body').dataset.scrollState = count;
        }
        else if (lethargy.check(e) == -1 && scrollable > count) {
            count++
            document.querySelector('body').dataset.scrollState = count;
        }
    });



    /*
     * Overflow hide html
     */

    document.querySelector('html').style.overflow = "hidden";
});
