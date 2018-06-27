on('/news', arg => {

    const tabContent = document.querySelectorAll(".listArticles");
    const subTab = document.querySelectorAll(".subMenu .termLink");
    const tab = document.querySelectorAll(".termsLinks");
    const articlesLinks = document.querySelectorAll("#articles .termLink");
    const socialLinks = document.querySelectorAll('#socialNetworks .termLink');
    const socialFeed = document.querySelectorAll('.socialFeed');

    let displayContent = (event, theme, elem1, elem2, display) => {

        // Get all elements with class="tabcontent" and hide them
        for (var i = 0; i < elem1.length; i++) {
            elem1[i].style.display = "none";
        }

        // Get all elements with class="tablinks" and remove the class "activeterm"
        for (var i = 0; i < elem2.length; i++) {
            elem2[i].className = elem2[i].className.replace("activeTerm", "");
        }

        // Show the current tab, and add an "activeTerm" class to the button that opened the tab
        document.getElementById(theme).style.display = display;
        event.currentTarget.className += " activeTerm";
    };

    // On click on an element of the first tab, display the second tab
    subTab.forEach(function(elem) {
        elem.addEventListener("click", function() {

            for(var i=0; i < subTab.length; i++){
                subTab[i].classList.remove('activeTerm');
            }

            displayContent(event, elem.dataset.menu, tab, subTab, 'flex');
        });
    });

    articlesLinks.forEach(function(elem) {
        elem.addEventListener("click", function() {
            displayContent(event, elem.dataset.attribute, tabContent, articlesLinks, 'flex');
        });
    });

    socialLinks.forEach(function(elem) {
        elem.addEventListener("click", function() {
            displayContent(event, elem.dataset.attribute, socialFeed, socialLinks, 'block');
        });
    });

    // on click on articles, hide the social feed
    subTab[0].addEventListener("click", function() {

            document.querySelector('.listArticles').style.display = 'flex';

            for(var i=0; i < socialFeed.length; i++){
                socialFeed[i].style.display = 'none';
            }

            subTab[0].className += " activeTerm";
    });

    subTab[1].addEventListener("click", function() {
            document.getElementById('facebookFeed').style.display = 'block';

            for( var i = 0; i < tabContent.length; i++){
                tabContent[i].style.display = 'none';
            }
        });

    var controller = new ScrollMagic.Controller();

    var scene = new ScrollMagic.Scene({triggerElement: ".subMenu", triggerHook: 'onLeave', offset: -75})
    	.setClassToggle(".toggleMenu", "black") // add class toggle
    	.addTo(controller);
});
