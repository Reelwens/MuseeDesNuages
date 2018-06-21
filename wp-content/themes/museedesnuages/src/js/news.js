on('/news', arg => {

    const tabContent = document.querySelectorAll(".listArticles");
    const tabLinks = document.querySelectorAll(".termLink");
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
        });
    });

    subTab.forEach(function(elem) {
        elem.addEventListener("click", function() {
            displayContent(event, elem.dataset.type, tab, subTab);
        });
    });

    socialLinks.forEach(function(elem) {
        elem.addEventListener("click", function() {
            displayContent(event, elem.dataset.attribute, socialFeed, socialLinks);
        });
    });

});
