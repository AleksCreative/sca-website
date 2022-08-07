/**
 * File navigation.js.
 *
 * Handles toggling the navigation menu for small screens and enables TAB key
 * navigation support for dropdown menus.
 */
(function() {
    var container, button, menu, links, i, len;

    container = document.getElementById('main-nav');
    if (!container) {
        return;
    }

    button = container.getElementsByTagName('button')[0];
    if ('undefined' === typeof button) {
        return;
    }

    menu = container.getElementsByTagName('ul')[0];

    // Hide menu toggle button if menu is empty and return early.
    if ('undefined' === typeof menu) {
        button.style.display = 'none';
        return;
    }

    menu.setAttribute('aria-expanded', 'false');
    if (-1 === menu.className.indexOf('nav-menu')) {
        menu.className += ' nav-menu';
    }

    button.onclick = function() {
        if (-1 !== container.className.indexOf('toggled')) {
            container.className = container.className.replace(' toggled', '');
            button.setAttribute('aria-expanded', 'false');
            menu.setAttribute('aria-expanded', 'false');
        } else {
            container.className += ' toggled';
            button.setAttribute('aria-expanded', 'true');
            menu.setAttribute('aria-expanded', 'true');
        }
    };

    // Get all the link elements within the menu.
    links = menu.getElementsByTagName('a');

    // Each time a menu link is focused or blurred, toggle focus.
    for (i = 0, len = links.length; i < len; i++) {
        links[i].addEventListener('focus', toggleFocus, true);
        links[i].addEventListener('blur', toggleFocus, true);
    }

    /**
     * Sets or removes .focus class on an element.
     */
    function toggleFocus() {
        var self = this;

        // Move up through the ancestors of the current link until we hit .nav-menu.
        while (-1 === self.className.indexOf('nav-menu')) {

            // On li elements toggle the class .focus.
            if ('li' === self.tagName.toLowerCase()) {
                if (-1 !== self.className.indexOf('focus')) {
                    self.className = self.className.replace(' focus', '');
                } else {
                    self.className += ' focus';
                }
            }

            self = self.parentElement;
        }
    }

    /**
     * Toggles `focus` class to allow submenu access on tablets.
     */
    (function(container) {
        var touchStartFn, i,
            parentLink = container.querySelectorAll('.menu-item-has-children > a, .page_item_has_children > a');

        if ('ontouchstart' in window) {
            touchStartFn = function(e) {
                var menuItem = this.parentNode,
                    i;

                if (!menuItem.classList.contains('focus')) {
                    e.preventDefault();
                    for (i = 0; i < menuItem.parentNode.children.length; ++i) {
                        if (menuItem === menuItem.parentNode.children[i]) {
                            continue;
                        }
                        menuItem.parentNode.children[i].classList.remove('focus');
                    }
                    menuItem.classList.add('focus');
                } else {
                    menuItem.classList.remove('focus');
                }
            };

            for (i = 0; i < parentLink.length; ++i) {
                parentLink[i].addEventListener('touchstart', touchStartFn, false);
            }
        }
    }(container));
})();

/* 3 bars to x */

function myFunction(x) {
    x.classList.toggle("change");
}

/* Submenu dropdown on click */

var primaryMenu = document.getElementById('primary-menu');
var parents = document.getElementsByClassName('menu-parent-item');
 var subparents = document.getElementsByClassName('current-menu-item page_item current_page_item menu-item-has-children menu-parent-item')
var parentsArray = Array.from(parents);
 var subparentsArray = Array.from(subparents);


parentsArray[1].innerHTML += '<span class="plus">+</span>';

 function addPlus() {

    for (let i = 0; i < parentsArray.length; i++) {
        parentsArray[i].innerHTML += '<span class="plus">+</span>';

    }
}
addPlus();

/* function addPlusTwo() {

    for (let i = 0; i < subparentsArray.length; i++) {
        subparentsArray[i].innerHTML += '<span class="plus">+</span>';

    }
}
addPlusTwo(); */

/*parentsArray.forEach(function(parentA) {
    parentA.innerHTML += '<span class="plus">+</span>';
});*/






primaryMenu.addEventListener('click', showUl);

function showUl(e) {

    if (e.target.classList.contains('plus')) {

        e.target.parentElement.firstElementChild.nextElementSibling.classList.toggle('show-submenu');

    }
}
/*
menu-item menu-item-type-post_type menu-item-object-page current-menu-ancestor current-menu-parent current_page_parent current_page_ancestor menu-item-has-children menu-parent-item menu-item-744

menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-184 current_page_item menu-item-has-children menu-parent-item menu-item-1220

current-menu-item page_item current_page_item menu-item-has-children menu-parent-item*/