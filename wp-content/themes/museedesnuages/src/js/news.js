on('/news', arg => {

    const tabContent = document.querySelectorAll(".listArticles");
    const tabLinks = document.querySelectorAll(".termLink");
    const subTab = document.querySelectorAll(".subMenu .termLink");
    const tab = document.querySelectorAll(".termsLinks");

    let displayArticles = (event, theme) => {

        // Get all elements with class="tabcontent" and hide them
        for (var i = 0; i < tabContent.length; i++) {
            tabContent[i].style.display = "none";
        }

        // Get all elements with class="tablinks" and remove the class "activeterm"
        for (var i = 0; i < tabLinks.length; i++) {
            tabLinks[i].className = tabLinks[i].className.replace("activeTerm", "");
        }

        // Show the current tab, and add an "activeTerm" class to the button that opened the tab
        document.getElementById(theme).style.display = "flex";
        event.currentTarget.className += " activeTerm";
    };

    tabLinks.forEach(function(elem) {
        elem.addEventListener("click", function() {
            displayArticles(event, elem.dataset.attribute);
        });
    });

    let displayMenu = (event, menu) => {

        // Get all the sub menus and hide them
        for (var i = 0; i < tab.length; i++) {
            tab[i].style.display = "none";
        }

        // Get all elements with class="tablinks" and remove the class "activeterm"
        for (var i = 0; i < subTab.length; i++) {
            subTab[i].className = subTab[i].className.replace("activeTerm", "");
        }

        // Show the current tab, and add an "activeTerm" class to the button that opened the tab
        document.getElementById(menu).style.display = "flex";
        event.currentTarget.className += " activeTerm";
    };

    subTab.forEach(function(elem) {
        elem.addEventListener("click", function() {
            displayMenu(event, elem.dataset.type);
        });
    });
});
