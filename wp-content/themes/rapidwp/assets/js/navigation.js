/**
 * File navigation.js.
 *
 * Handles toggling the navigation menu for small screens and enables TAB key
 * navigation support for dropdown menus.
 */
( function() {
    var rapidwp_secondary_container, rapidwp_secondary_button, rapidwp_secondary_menu, rapidwp_secondary_links, rapidwp_secondary_i, rapidwp_secondary_len;

    rapidwp_secondary_container = document.getElementById( 'rapidwp-secondary-navigation' );
    if ( ! rapidwp_secondary_container ) {
        return;
    }

    rapidwp_secondary_button = rapidwp_secondary_container.getElementsByTagName( 'button' )[0];
    if ( 'undefined' === typeof rapidwp_secondary_button ) {
        return;
    }

    rapidwp_secondary_menu = rapidwp_secondary_container.getElementsByTagName( 'ul' )[0];

    // Hide menu toggle button if menu is empty and return early.
    if ( 'undefined' === typeof rapidwp_secondary_menu ) {
        rapidwp_secondary_button.style.display = 'none';
        return;
    }

    rapidwp_secondary_menu.setAttribute( 'aria-expanded', 'false' );
    if ( -1 === rapidwp_secondary_menu.className.indexOf( 'nav-menu' ) ) {
        rapidwp_secondary_menu.className += ' nav-menu';
    }

    rapidwp_secondary_button.onclick = function() {
        if ( -1 !== rapidwp_secondary_container.className.indexOf( 'rapidwp-toggled' ) ) {
            rapidwp_secondary_container.className = rapidwp_secondary_container.className.replace( ' rapidwp-toggled', '' );
            rapidwp_secondary_button.setAttribute( 'aria-expanded', 'false' );
            rapidwp_secondary_menu.setAttribute( 'aria-expanded', 'false' );
        } else {
            rapidwp_secondary_container.className += ' rapidwp-toggled';
            rapidwp_secondary_button.setAttribute( 'aria-expanded', 'true' );
            rapidwp_secondary_menu.setAttribute( 'aria-expanded', 'true' );
        }
    };

    // Get all the link elements within the menu.
    rapidwp_secondary_links    = rapidwp_secondary_menu.getElementsByTagName( 'a' );

    // Each time a menu link is focused or blurred, toggle focus.
    for ( rapidwp_secondary_i = 0, rapidwp_secondary_len = rapidwp_secondary_links.length; rapidwp_secondary_i < rapidwp_secondary_len; rapidwp_secondary_i++ ) {
        rapidwp_secondary_links[rapidwp_secondary_i].addEventListener( 'focus', rapidwp_secondary_toggleFocus, true );
        rapidwp_secondary_links[rapidwp_secondary_i].addEventListener( 'blur', rapidwp_secondary_toggleFocus, true );
    }

    /**
     * Sets or removes .focus class on an element.
     */
    function rapidwp_secondary_toggleFocus() {
        var self = this;

        // Move up through the ancestors of the current link until we hit .nav-menu.
        while ( -1 === self.className.indexOf( 'nav-menu' ) ) {

            // On li elements toggle the class .focus.
            if ( 'li' === self.tagName.toLowerCase() ) {
                if ( -1 !== self.className.indexOf( 'rapidwp-focus' ) ) {
                    self.className = self.className.replace( ' rapidwp-focus', '' );
                } else {
                    self.className += ' rapidwp-focus';
                }
            }

            self = self.parentElement;
        }
    }

    /**
     * Toggles `focus` class to allow submenu access on tablets.
     */
    ( function( rapidwp_secondary_container ) {
        var touchStartFn, rapidwp_secondary_i,
            parentLink = rapidwp_secondary_container.querySelectorAll( '.menu-item-has-children > a, .page_item_has_children > a' );

        if ( 'ontouchstart' in window ) {
            touchStartFn = function( e ) {
                var menuItem = this.parentNode, rapidwp_secondary_i;

                if ( ! menuItem.classList.contains( 'rapidwp-focus' ) ) {
                    e.preventDefault();
                    for ( rapidwp_secondary_i = 0; rapidwp_secondary_i < menuItem.parentNode.children.length; ++rapidwp_secondary_i ) {
                        if ( menuItem === menuItem.parentNode.children[rapidwp_secondary_i] ) {
                            continue;
                        }
                        menuItem.parentNode.children[rapidwp_secondary_i].classList.remove( 'rapidwp-focus' );
                    }
                    menuItem.classList.add( 'rapidwp-focus' );
                } else {
                    menuItem.classList.remove( 'rapidwp-focus' );
                }
            };

            for ( rapidwp_secondary_i = 0; rapidwp_secondary_i < parentLink.length; ++rapidwp_secondary_i ) {
                parentLink[rapidwp_secondary_i].addEventListener( 'touchstart', touchStartFn, false );
            }
        }
    }( rapidwp_secondary_container ) );
} )();


( function() {
    var rapidwp_primary_container, rapidwp_primary_button, rapidwp_primary_menu, rapidwp_primary_links, rapidwp_primary_i, rapidwp_primary_len;

    rapidwp_primary_container = document.getElementById( 'rapidwp-primary-navigation' );
    if ( ! rapidwp_primary_container ) {
        return;
    }

    rapidwp_primary_button = rapidwp_primary_container.getElementsByTagName( 'button' )[0];
    if ( 'undefined' === typeof rapidwp_primary_button ) {
        return;
    }

    rapidwp_primary_menu = rapidwp_primary_container.getElementsByTagName( 'ul' )[0];

    // Hide menu toggle button if menu is empty and return early.
    if ( 'undefined' === typeof rapidwp_primary_menu ) {
        rapidwp_primary_button.style.display = 'none';
        return;
    }

    rapidwp_primary_menu.setAttribute( 'aria-expanded', 'false' );
    if ( -1 === rapidwp_primary_menu.className.indexOf( 'nav-menu' ) ) {
        rapidwp_primary_menu.className += ' nav-menu';
    }

    rapidwp_primary_button.onclick = function() {
        if ( -1 !== rapidwp_primary_container.className.indexOf( 'rapidwp-toggled' ) ) {
            rapidwp_primary_container.className = rapidwp_primary_container.className.replace( ' rapidwp-toggled', '' );
            rapidwp_primary_button.setAttribute( 'aria-expanded', 'false' );
            rapidwp_primary_menu.setAttribute( 'aria-expanded', 'false' );
        } else {
            rapidwp_primary_container.className += ' rapidwp-toggled';
            rapidwp_primary_button.setAttribute( 'aria-expanded', 'true' );
            rapidwp_primary_menu.setAttribute( 'aria-expanded', 'true' );
        }
    };

    // Get all the link elements within the menu.
    rapidwp_primary_links    = rapidwp_primary_menu.getElementsByTagName( 'a' );

    // Each time a menu link is focused or blurred, toggle focus.
    for ( rapidwp_primary_i = 0, rapidwp_primary_len = rapidwp_primary_links.length; rapidwp_primary_i < rapidwp_primary_len; rapidwp_primary_i++ ) {
        rapidwp_primary_links[rapidwp_primary_i].addEventListener( 'focus', rapidwp_primary_toggleFocus, true );
        rapidwp_primary_links[rapidwp_primary_i].addEventListener( 'blur', rapidwp_primary_toggleFocus, true );
    }

    /**
     * Sets or removes .focus class on an element.
     */
    function rapidwp_primary_toggleFocus() {
        var self = this;

        // Move up through the ancestors of the current link until we hit .nav-menu.
        while ( -1 === self.className.indexOf( 'nav-menu' ) ) {

            // On li elements toggle the class .focus.
            if ( 'li' === self.tagName.toLowerCase() ) {
                if ( -1 !== self.className.indexOf( 'rapidwp-focus' ) ) {
                    self.className = self.className.replace( ' rapidwp-focus', '' );
                } else {
                    self.className += ' rapidwp-focus';
                }
            }

            self = self.parentElement;
        }
    }

    /**
     * Toggles `focus` class to allow submenu access on tablets.
     */
    ( function( rapidwp_primary_container ) {
        var touchStartFn, rapidwp_primary_i,
            parentLink = rapidwp_primary_container.querySelectorAll( '.menu-item-has-children > a, .page_item_has_children > a' );

        if ( 'ontouchstart' in window ) {
            touchStartFn = function( e ) {
                var menuItem = this.parentNode, rapidwp_primary_i;

                if ( ! menuItem.classList.contains( 'rapidwp-focus' ) ) {
                    e.preventDefault();
                    for ( rapidwp_primary_i = 0; rapidwp_primary_i < menuItem.parentNode.children.length; ++rapidwp_primary_i ) {
                        if ( menuItem === menuItem.parentNode.children[rapidwp_primary_i] ) {
                            continue;
                        }
                        menuItem.parentNode.children[rapidwp_primary_i].classList.remove( 'rapidwp-focus' );
                    }
                    menuItem.classList.add( 'rapidwp-focus' );
                } else {
                    menuItem.classList.remove( 'rapidwp-focus' );
                }
            };

            for ( rapidwp_primary_i = 0; rapidwp_primary_i < parentLink.length; ++rapidwp_primary_i ) {
                parentLink[rapidwp_primary_i].addEventListener( 'touchstart', touchStartFn, false );
            }
        }
    }( rapidwp_primary_container ) );
} )();