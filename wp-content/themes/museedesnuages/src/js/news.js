on('/news', arg => {

    const tabContent = document.querySelectorAll(".listArticles");
    const tabLinks = document.querySelectorAll(".headerPage .termLink");
    const subTab = document.querySelectorAll(".subMenu .termLink");
    const tab = document.querySelectorAll(".termsLinks");
    const socialLinks = document.querySelectorAll('#socialNetworks .termLink');
    const socialFeed = document.querySelectorAll('.socialFeed');

    let displayContent = (event, theme, elem1, elem2) => {

        // Get all elements with class="tabcontent" and hide them
        for (var i = 0; i < elem1.length; i++) {
            elem1[i].style.display = "none";
        }

        // Get all elements with class="tablinks" and remove the class "activeterm"
        for (var i = 0; i < elem2.length; i++) {
            elem2[i].className = elem2[i].className.replace("activeTerm", "");
        }

        // Show the current tab, and add an "activeTerm" class to the button that opened the tab
        document.getElementById(theme).style.display = "flex";
        event.currentTarget.className += " activeTerm";
    };

    tabLinks.forEach(function(elem) {
        elem.addEventListener("click", function() {
            displayContent(event, elem.dataset.attribute, tabContent, tabLinks);
            subTab[0].className += " activeTerm";
        });
    });

    subTab.forEach(function(elem) {
        elem.addEventListener("click", function() {
            displayContent(event, elem.dataset.menu, tab, subTab);
        });
    });

    socialLinks.forEach(function(elem) {
        elem.addEventListener("click", function() {
            displayContent(event, elem.dataset.attribute, socialFeed, socialLinks);
        });
    });

    document.querySelector('.subMenu .termLink:first-child').addEventListener("click", function() {
            // for(var i=0; i < socialLinks.length; i++){
            //     socialLinks[i].classList.remove('activeTerm');
            // }
            document.querySelector('#articles .termLink:first-child').className += " activeTerm";
    });

    document.querySelector('.subMenu .termLink:last-child').addEventListener("click", function() {
            document.getElementById('facebookFeed').style.display = "flex";
            for(var i=0; i < socialLinks.length; i++){
                socialLinks[i].classList.remove('activeTerm');
            }
            socialLinks[0].className += " activeTerm";
        });



    var controller = new ScrollMagic.Controller();

    var scene = new ScrollMagic.Scene({triggerElement: ".subMenu", triggerHook: 'onLeave', offset: -75})
    	.setClassToggle(".toggleMenu", "black") // add class toggle
    	.addTo(controller);
});
