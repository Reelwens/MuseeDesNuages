on('/services', arg => {
    /*
     * Fixed the anchors on scroll
     */

     var anchorsList = document.querySelector('.headerAnchors');
     var headerPage = document.querySelector('.headerPage');

     anchorsHeight = anchorsList.offsetHeight;

     let onScroll = () => {
        // let scrollTop = Math.max(window.pageYOffset, document.documentElement.scrollTop, document.body.scrollTop);

        let headerOffset = headerPage.getBoundingClientRect().bottom;

        if (headerOffset < anchorsHeight) {
            anchorsList.classList.add('headerAnchorsFixed');
        }
        else{
            anchorsList.classList.remove('headerAnchorsFixed');
            console.log('else'+headerOffset);
        }
    }

     document.body.onscroll = onScroll;
});
