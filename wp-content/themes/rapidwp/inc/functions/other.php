<?php
/**
* More Custom Functions
*
* @package RapidWP WordPress Theme
* @copyright Copyright (C) 2018 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/

// Get custom-logo URL
function rapidwp_custom_logo() {
    if ( ! has_custom_logo() ) {return;}
    $rapidwp_custom_logo_id = get_theme_mod( 'custom_logo' );
    $rapidwp_logo = wp_get_attachment_image_src( $rapidwp_custom_logo_id , 'full' );
    return $rapidwp_logo[0];
}

// Site Title
function rapidwp_site_title() {
    if ( is_front_page() && is_home() ) { ?>
            <h1 class="rapidwp-site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
            <p class="rapidwp-site-description"><span><?php bloginfo( 'description' ); ?></span></p>
    <?php } elseif ( is_home() ) { ?>
            <h1 class="rapidwp-site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
            <p class="rapidwp-site-description"><span><?php bloginfo( 'description' ); ?></span></p>
    <?php } elseif ( is_singular() ) { ?>
            <p class="rapidwp-site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
            <p class="rapidwp-site-description"><span><?php bloginfo( 'description' ); ?></span></p>
    <?php } elseif ( is_category() ) { ?>
            <p class="rapidwp-site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
            <p class="rapidwp-site-description"><span><?php bloginfo( 'description' ); ?></span></p>
    <?php } elseif ( is_tag() ) { ?>
            <p class="rapidwp-site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
            <p class="rapidwp-site-description"><span><?php bloginfo( 'description' ); ?></span></p>
    <?php } elseif ( is_author() ) { ?>
            <p class="rapidwp-site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
            <p class="rapidwp-site-description"><span><?php bloginfo( 'description' ); ?></span></p>
    <?php } elseif ( is_archive() && !is_category() && !is_tag() && !is_author() ) { ?>
            <p class="rapidwp-site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
            <p class="rapidwp-site-description"><span><?php bloginfo( 'description' ); ?></span></p>
    <?php } elseif ( is_search() ) { ?>
            <p class="rapidwp-site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
            <p class="rapidwp-site-description"><span><?php bloginfo( 'description' ); ?></span></p>
    <?php } elseif ( is_404() ) { ?>
            <p class="rapidwp-site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
            <p class="rapidwp-site-description"><span><?php bloginfo( 'description' ); ?></span></p>
    <?php } else { ?>
            <h1 class="rapidwp-site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
            <p class="rapidwp-site-description"><span><?php bloginfo( 'description' ); ?></span></p>
    <?php }
}

function rapidwp_read_more_text() {
       $readmoretext = esc_html__( 'Continue Reading', 'rapidwp' );
        if ( rapidwp_get_option('read_more_text') ) {
                $readmoretext = rapidwp_get_option('read_more_text');
        }
       return $readmoretext;
}

// Category ids in post class
function rapidwp_category_id_class($classes) {
        global $post;
        foreach((get_the_category($post->ID)) as $category) {
            $classes [] = 'wpcat-' . $category->cat_ID . '-id';
        }
        return $classes;
}
add_filter('post_class', 'rapidwp_category_id_class');

// Change excerpt length
function rapidwp_excerpt_length($length) {
    if ( is_admin() ) {
        return $length;
    }
    $read_more_length = 25;
    if ( rapidwp_get_option('read_more_length') ) {
        $read_more_length = rapidwp_get_option('read_more_length');
    }
    return $read_more_length;
}
add_filter('excerpt_length', 'rapidwp_excerpt_length');

// Change excerpt more word
function rapidwp_excerpt_more($more) {
       if ( is_admin() ) {
         return $more;
       }
       return '...';
}
add_filter('excerpt_more', 'rapidwp_excerpt_more');

// Adds custom classes to the array of body classes.
function rapidwp_body_classes( $classes ) {
    // Adds a class of group-blog to blogs with more than 1 published author.
    if ( is_multi_author() ) {
        $classes[] = 'rapidwp-group-blog';
    }

    if ( get_header_image() ) {
        $classes[] = 'rapidwp-header-image-active';
    }

    if ( has_custom_logo() ) {
        $classes[] = 'rapidwp-custom-logo-active';
    }

    if ( is_page_template( array( 'template-full-width-page.php', 'template-full-width-post.php' ) ) ) {
       $classes[] = 'rapidwp-layout-full-width';
    }

    if ( is_404() ) {
        $classes[] = 'rapidwp-layout-full-width';
    }

    if ( !(rapidwp_get_option('disable_primary_menu')) ) {
        $classes[] = 'rapidwp-primary-menu-active';
    }
    if ( !(rapidwp_get_option('disable_secondary_menu')) ) {
        $classes[] = 'rapidwp-secondary-menu-active';
    }

    return $classes;
}
add_filter( 'body_class', 'rapidwp_body_classes' );

function rapidwp_post_style() {
       $post_style = 'style-5';
        if ( rapidwp_get_option('post_style') ) {
                $post_style = rapidwp_get_option('post_style');
        }
       return $post_style;
}

function rapidwp_footer_grid_cols() {
       $footer_column = 'rapidwp-footer-4-col';
       return $footer_column;
}

if ( ! function_exists( 'wp_body_open' ) ) :
    /**
     * Fire the wp_body_open action.
     *
     * Added for backwards compatibility to support pre 5.2.0 WordPress versions.
     */
    function wp_body_open() { /* phpcs:ignore WPThemeReview.CoreFunctionality.PrefixAllGlobals.NonPrefixedFunctionFound */
        /**
         * Triggered after the opening <body> tag.
         */
        do_action( 'wp_body_open' ); /* phpcs:ignore WPThemeReview.CoreFunctionality.PrefixAllGlobals.NonPrefixedHooknameFound */
    }
endif;