<?php
/**
* Enqueue scripts and styles
*
* @package RapidWP WordPress Theme
* @copyright Copyright (C) 2018 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/

function rapidwp_scripts() {
    wp_enqueue_style('rapidwp-maincss', get_stylesheet_uri(), array(), NULL);
    wp_enqueue_style('font-awesome', get_template_directory_uri() . '/assets/css/font-awesome.min.css', array(), NULL );
    wp_enqueue_style('rapidwp-webfont', '//fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,700i|Domine:400,700|Oswald:400,700', array(), NULL);
    wp_enqueue_script('fitvids', get_template_directory_uri() .'/assets/js/jquery.fitvids.min.js', array( 'jquery' ), NULL, true);

    $rapidwp_primary_menu_active = FALSE;
    if ( !rapidwp_get_option('disable_primary_menu') ) {
        $rapidwp_primary_menu_active = TRUE;
    }
    $rapidwp_secondary_menu_active = FALSE;
    if ( !rapidwp_get_option('disable_secondary_menu') ) {
        $rapidwp_secondary_menu_active = TRUE;
    }

    $rapidwp_sticky_menu = TRUE;
    $rapidwp_sticky_mobile_menu = TRUE;
    if ( !rapidwp_get_option('enable_sticky_mobile_menu') ) {
        $rapidwp_sticky_mobile_menu = FALSE;
    }

    $rapidwp_sticky_sidebar = TRUE;
    if ( is_page_template( array( 'template-full-width-page.php', 'template-full-width-post.php' ) ) ) {
       $rapidwp_sticky_sidebar = FALSE;
    }
    if ( is_404() ) {
        $rapidwp_sticky_sidebar = FALSE;
    }
    if ( $rapidwp_sticky_sidebar ) {
        wp_enqueue_script('ResizeSensor', get_template_directory_uri() .'/assets/js/ResizeSensor.min.js', array( 'jquery' ), NULL, true);
        wp_enqueue_script('theia-sticky-sidebar', get_template_directory_uri() .'/assets/js/theia-sticky-sidebar.min.js', array( 'jquery' ), NULL, true);
    }

    $rapidwp_slider_active = FALSE;
    if ( rapidwp_get_option('enable_slider') ) {
        $rapidwp_slider_active = TRUE;
    }
    if ( $rapidwp_slider_active ) {
        wp_enqueue_style('owl-carousel', get_template_directory_uri() . '/assets/css/owl.carousel.min.css', array(), NULL );
        wp_enqueue_script('owl-carousel', get_template_directory_uri() .'/assets/js/owl.carousel.min.js', array( 'jquery', 'imagesloaded' ), NULL, true);
    }

    wp_enqueue_script('rapidwp-navigation', get_template_directory_uri() . '/assets/js/navigation.js', array(), NULL, true );
    wp_enqueue_script('rapidwp-skip-link-focus-fix', get_template_directory_uri() . '/assets/js/skip-link-focus-fix.js', array(), NULL, true );
    wp_enqueue_script('rapidwp-customjs', get_template_directory_uri() .'/assets/js/custom.js', array( 'jquery' ), NULL, true);
    wp_localize_script( 'rapidwp-customjs', 'rapidwp_ajax_object',
        array(
            'ajaxurl' => admin_url( 'admin-ajax.php' ),
            'primary_menu_active' => $rapidwp_primary_menu_active,
            'secondary_menu_active' => $rapidwp_secondary_menu_active,
            'sticky_menu' => $rapidwp_sticky_menu,
            'sticky_menu_mobile' => $rapidwp_sticky_mobile_menu,
            'sticky_sidebar' => $rapidwp_sticky_sidebar,
            'slider_active' => $rapidwp_slider_active,
        )
    );

    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}
add_action( 'wp_enqueue_scripts', 'rapidwp_scripts' );

/**
 * Enqueue IE compatible scripts and styles.
 */
function rapidwp_ie_scripts() {
    wp_enqueue_script( 'html5shiv', get_template_directory_uri(). '/assets/js/html5shiv.min.js', array(), NULL, false);
    wp_script_add_data( 'html5shiv', 'conditional', 'lt IE 9' );

    wp_enqueue_script( 'respond', get_template_directory_uri(). '/assets/js/respond.min.js', array(), NULL, false );
    wp_script_add_data( 'respond', 'conditional', 'lt IE 9' );
}
add_action( 'wp_enqueue_scripts', 'rapidwp_ie_scripts' );

/**
 * Enqueue customizer styles.
 */
function rapidwp_enqueue_customizer_styles() {
    wp_enqueue_style( 'rapidwp-customizer-styles', get_template_directory_uri() . '/inc/admin/css/customizer-style.css', array(), NULL );
    wp_enqueue_style('font-awesome', get_template_directory_uri() . '/assets/css/font-awesome.min.css', array(), NULL );
}
add_action( 'customize_controls_enqueue_scripts', 'rapidwp_enqueue_customizer_styles' );