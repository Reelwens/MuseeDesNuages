on('/contact', arg => {
    /*
     * Adapt color menuButton
     */
    var controller = new ScrollMagic.Controller();

    var scene = new ScrollMagic.Scene({triggerElement: ".founders", triggerHook: 'onLeave', offset: -100})
    	.setClassToggle(".toggleMenu", "black") // add class toggle
    	.addTo(controller);
});
