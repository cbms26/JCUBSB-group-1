/**
 * File navigation.js.
 *
 * Handles toggling the navigation menu for small screens and enables TAB key
 * navigation support for dropdown menus.
 */
( function() {
	const siteNavigation = document.getElementById( 'site-navigation' );

	// Return early if the navigation doesn't exist.
	if ( ! siteNavigation ) {
		return;
	}

	const button = siteNavigation.getElementsByTagName( 'button' )[ 0 ];

	// Return early if the button doesn't exist.
	if ( 'undefined' === typeof button ) {
		return;
	}

	const menu = siteNavigation.getElementsByTagName( 'ul' )[ 0 ];

	// Hide menu toggle button if menu is empty and return early.
	if ( 'undefined' === typeof menu ) {
		button.style.display = 'none';
		return;
	}

	if ( ! menu.classList.contains( 'nav-menu' ) ) {
		menu.classList.add( 'nav-menu' );
	}

	// Toggle the .toggled class and the aria-expanded value each time the button is clicked.
	button.addEventListener( 'click', function() {
		siteNavigation.classList.toggle( 'toggled' );

		if ( button.getAttribute( 'aria-expanded' ) === 'true' ) {
			button.setAttribute( 'aria-expanded', 'false' );
			menu.style.display = 'none';
		} else {
			button.setAttribute( 'aria-expanded', 'true' );
			menu.style.display = 'block';
		}
	} );

	// Remove the .toggled class and set aria-expanded to false when the user clicks outside the navigation.
	document.addEventListener( 'click', function( event ) {
		const isClickInside = siteNavigation.contains( event.target );

		if ( ! isClickInside ) {
			siteNavigation.classList.remove( 'toggled' );
			button.setAttribute( 'aria-expanded', 'false' );
			menu.style.display = 'none';
		}
	} );
}() );

/**
 * Custom script for handling hamburger menu toggle.
 */
document.addEventListener('DOMContentLoaded', function() {
    const siteHeader = document.querySelector('.site-header');
    const logoImage = document.querySelector('.logo-image img');
    const hamburger = document.getElementById('hamburger');
    const fullscreenMenu = document.getElementById('fullscreen-menu');
    const closeMenu = document.getElementById('close-menu');

    // Handling shrinking header
    window.addEventListener('scroll', function() {
        if (window.scrollY > 100) {
            siteHeader.classList.add('shrink');
            logoImage.style.height = '50px';
        } else {
            siteHeader.classList.remove('shrink');
            logoImage.style.height = '90px';
        }
    });

    // Handling hamburger menu toggle
    hamburger.addEventListener('click', function() {
        fullscreenMenu.classList.toggle('active');
        hamburger.classList.toggle('active');
    });

    // Handling close button in fullscreen menu
    if (closeMenu) {
        closeMenu.addEventListener('click', function() {
            fullscreenMenu.classList.remove('active');
            hamburger.classList.remove('active');
        });
    }

    // Close menu when clicking outside of it
    document.addEventListener('click', function(event) {
        if (!fullscreenMenu.contains(event.target) && !hamburger.contains(event.target) && !event.target.matches('#close-menu')) {
            fullscreenMenu.classList.remove('active');
            hamburger.classList.remove('active');
        }
    });
});


