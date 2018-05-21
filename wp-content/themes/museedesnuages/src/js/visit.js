//on('/visit', () => {
    /*
     * Set data scroll state
     */

    let scrollable = 10,
        count = 0;

    document.querySelector('body').addEventListener('mousewheel', (e) => {
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
//});
