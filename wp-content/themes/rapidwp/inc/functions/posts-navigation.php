<?php
/**
* Posts navigation functions
*
* @package RapidWP WordPress Theme
* @copyright Copyright (C) 2018 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/

if ( ! function_exists( 'rapidwp_wp_pagenavi' ) ) :
function rapidwp_wp_pagenavi() {
    ?>
    <nav class="navigation posts-navigation clearfix" role="navigation">
        <?php wp_pagenavi(); ?>
    </nav><!-- .navigation -->
    <?php
}
endif;


if ( ! function_exists( 'rapidwp_posts_navigation' ) ) :
function rapidwp_posts_navigation() {
    if ( function_exists( 'wp_pagenavi' ) ) {
        rapidwp_wp_pagenavi();
    } else {
        if ( rapidwp_get_option('posts_navigation_type') === 'normalnavi' ) {
            the_posts_navigation(array('prev_text' => esc_html__( '&larr; Older posts', 'rapidwp' ), 'next_text' => esc_html__( 'Newer posts &rarr;', 'rapidwp' )));
        } else {
            the_posts_pagination(array('mid_size' => 2, 'prev_text' => esc_html__( '&larr; Older posts', 'rapidwp' ), 'next_text' => esc_html__( 'Newer posts &rarr;', 'rapidwp' )));
        }
    }
}
endif;


if ( ! function_exists( 'rapidwp_post_navigation' ) ) :
function rapidwp_post_navigation() {
global $post;
if ( !(rapidwp_get_option('hide_post_navigation')) ) {
    the_post_navigation(array('prev_text' => esc_html__( '&larr; %title', 'rapidwp' ), 'next_text' => esc_html__( '%title &rarr;', 'rapidwp' )));
}
}
endif;