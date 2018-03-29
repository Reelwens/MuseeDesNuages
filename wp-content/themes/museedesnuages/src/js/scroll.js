// Init
var controller = new ScrollMagic.Controller();

// Build scene
var scene = new ScrollMagic.Scene({
                    triggerElement: "#triggerGradient",
                    duration: 100
                })
                .setTween("#gradient", {opacity: 1})
                .addTo(controller);
