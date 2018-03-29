// Init
var controller = new ScrollMagic.Controller();

// Build scene
var scene = new ScrollMagic.Scene({
                    triggerElement: "#triggerGradient",
                    duration: 100
                })
                .setTween("#gradient", {opacity: 1})
                .addTo(controller);


new ScrollMagic.Scene({triggerElement: "#triggerGradient"})
				.setClassToggle(".toggleMenu", "click") // add class toggle
				.addTo(controller);

new ScrollMagic.Scene({triggerElement: "#triggerGradient"})
				.setClassToggle(".toggleSound", "click") // add class toggle
				.addTo(controller);
