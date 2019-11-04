<?php
/**
* Register widget area.
*
* @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
*
* @package RapidWP WordPress Theme
* @copyright Copyright (C) 2018 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/

function rapidwp_widgets_init() {

register_sidebar(array(
    'id' => 'rapidwp-header-banner',
    'name' => esc_html__( 'Header Banner', 'rapidwp' ),
    'description' => esc_html__( 'This sidebar is located on the header of the web page.', 'rapidwp' ),
    'before_widget' => '<div id="%1$s" class="rapidwp-header-widget widget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h2 class="rapidwp-widget-title">',
    'after_title' => '</h2>'));

register_sidebar(array(
    'id' => 'rapidwp-sidebar-one',
    'name' => esc_html__( 'Sidebar 1', 'rapidwp' ),
    'description' => esc_html__( 'This sidebar is normally located on the left-hand side of web page.', 'rapidwp' ),
    'before_widget' => '<div id="%1$s" class="rapidwp-side-widget widget rapidwp-box %2$s"><div class="rapidwp-box-inside">',
    'after_widget' => '</div></div>',
    'before_title' => '<h2 class="rapidwp-widget-title"><span>',
    'after_title' => '</span></h2>'));

register_sidebar(array(
    'id' => 'rapidwp-sidebar-two',
    'name' => esc_html__( 'Sidebar 2', 'rapidwp' ),
    'description' => esc_html__( 'This sidebar is normally located on the right-hand side of web page.', 'rapidwp' ),
    'before_widget' => '<div id="%1$s" class="rapidwp-side-widget widget rapidwp-box %2$s"><div class="rapidwp-box-inside">',
    'after_widget' => '</div></div>',
    'before_title' => '<h2 class="rapidwp-widget-title"><span>',
    'after_title' => '</span></h2>'));

register_sidebar(array(
    'id' => 'rapidwp-home-fullwidth-widgets',
    'name' => esc_html__( 'Top Full Width Widgets (Home Page Only)', 'rapidwp' ),
    'description' => esc_html__( 'This full-width widget area is located at the top of homepage.', 'rapidwp' ),
    'before_widget' => '<div id="%1$s" class="rapidwp-main-widget widget %2$s"><div class="rapidwp-box-inside">',
    'after_widget' => '</div></div>',
    'before_title' => '<h2 class="rapidwp-widget-title"><span>',
    'after_title' => '</span></h2>'));

register_sidebar(array(
    'id' => 'rapidwp-fullwidth-widgets',
    'name' => esc_html__( 'Top Full Width Widgets (Every Page)', 'rapidwp' ),
    'description' => esc_html__( 'This full-width widget area is located at the top of every page.', 'rapidwp' ),
    'before_widget' => '<div id="%1$s" class="rapidwp-main-widget widget %2$s"><div class="rapidwp-box-inside">',
    'after_widget' => '</div></div>',
    'before_title' => '<h2 class="rapidwp-widget-title"><span>',
    'after_title' => '</span></h2>'));

register_sidebar(array(
    'id' => 'rapidwp-home-top-widgets',
    'name' => esc_html__( 'Top Widgets (Home Page Only)', 'rapidwp' ),
    'description' => esc_html__( 'This widget area is located at the top of homepage.', 'rapidwp' ),
    'before_widget' => '<div id="%1$s" class="rapidwp-main-widget widget rapidwp-box %2$s"><div class="rapidwp-box-inside">',
    'after_widget' => '</div></div>',
    'before_title' => '<h2 class="rapidwp-widget-title"><span>',
    'after_title' => '</span></h2>'));

register_sidebar(array(
    'id' => 'rapidwp-top-widgets',
    'name' => esc_html__( 'Top Widgets (Every Page)', 'rapidwp' ),
    'description' => esc_html__( 'This widget area is located at the top of every page.', 'rapidwp' ),
    'before_widget' => '<div id="%1$s" class="rapidwp-main-widget widget rapidwp-box %2$s"><div class="rapidwp-box-inside">',
    'after_widget' => '</div></div>',
    'before_title' => '<h2 class="rapidwp-widget-title"><span>',
    'after_title' => '</span></h2>'));

register_sidebar(array(
    'id' => 'rapidwp-home-bottom-widgets',
    'name' => esc_html__( 'Bottom Widgets (Home Page Only)', 'rapidwp' ),
    'description' => esc_html__( 'This widget area is located at the bottom of homepage.', 'rapidwp' ),
    'before_widget' => '<div id="%1$s" class="rapidwp-main-widget widget rapidwp-box %2$s"><div class="rapidwp-box-inside">',
    'after_widget' => '</div></div>',
    'before_title' => '<h2 class="rapidwp-widget-title"><span>',
    'after_title' => '</span></h2>'));

register_sidebar(array(
    'id' => 'rapidwp-bottom-widgets',
    'name' => esc_html__( 'Bottom Widgets (Every Page)', 'rapidwp' ),
    'description' => esc_html__( 'This widget area is located at the bottom of every page.', 'rapidwp' ),
    'before_widget' => '<div id="%1$s" class="rapidwp-main-widget widget rapidwp-box %2$s"><div class="rapidwp-box-inside">',
    'after_widget' => '</div></div>',
    'before_title' => '<h2 class="rapidwp-widget-title"><span>',
    'after_title' => '</span></h2>'));

register_sidebar(array(
    'id' => 'rapidwp-single-post-bottom-widgets',
    'name' => esc_html__( 'Post Bottom Widgets', 'rapidwp' ),
    'description' => esc_html__( 'This widget area is located at the bottom of single post. before the comments', 'rapidwp' ),
    'before_widget' => '<div id="%1$s" class="rapidwp-main-widget widget rapidwp-box %2$s"><div class="rapidwp-box-inside">',
    'after_widget' => '</div></div>',
    'before_title' => '<h2 class="rapidwp-widget-title"><span>',
    'after_title' => '</span></h2>'));

register_sidebar(array(
    'id' => 'rapidwp-top-footer',
    'name' => esc_html__( 'Footer Top', 'rapidwp' ),
    'description' => esc_html__( 'This sidebar is located on the top of the footer.', 'rapidwp' ),
    'before_widget' => '<div id="%1$s" class="rapidwp-footer-widget widget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h2 class="rapidwp-widget-title"><span>',
    'after_title' => '</span></h2>'));

register_sidebar(array(
    'id' => 'rapidwp-footer-1',
    'name' => esc_html__( 'Footer 1', 'rapidwp' ),
    'description' => esc_html__( 'This sidebar is located on the left bottom of web page.', 'rapidwp' ),
    'before_widget' => '<div id="%1$s" class="rapidwp-footer-widget widget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h2 class="rapidwp-widget-title"><span>',
    'after_title' => '</span></h2>'));

register_sidebar(array(
    'id' => 'rapidwp-footer-2',
    'name' => esc_html__( 'Footer 2', 'rapidwp' ),
    'description' => esc_html__( 'This sidebar is located on the middle bottom of web page.', 'rapidwp' ),
    'before_widget' => '<div id="%1$s" class="rapidwp-footer-widget widget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h2 class="rapidwp-widget-title"><span>',
    'after_title' => '</span></h2>'));

register_sidebar(array(
    'id' => 'rapidwp-footer-3',
    'name' => esc_html__( 'Footer 3', 'rapidwp' ),
    'description' => esc_html__( 'This sidebar is located on the middle bottom of web page.', 'rapidwp' ),
    'before_widget' => '<div id="%1$s" class="rapidwp-footer-widget widget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h2 class="rapidwp-widget-title"><span>',
    'after_title' => '</span></h2>'));

register_sidebar(array(
    'id' => 'rapidwp-footer-4',
    'name' => esc_html__( 'Footer 4', 'rapidwp' ),
    'description' => esc_html__( 'This sidebar is located on the right bottom of web page.', 'rapidwp' ),
    'before_widget' => '<div id="%1$s" class="rapidwp-footer-widget widget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h2 class="rapidwp-widget-title"><span>',
    'after_title' => '</span></h2>'));

register_sidebar(array(
    'id' => 'rapidwp-bottom-footer',
    'name' => esc_html__( 'Footer Bottom', 'rapidwp' ),
    'description' => esc_html__( 'This sidebar is located on the bottom of the footer.', 'rapidwp' ),
    'before_widget' => '<div id="%1$s" class="rapidwp-footer-widget widget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h2 class="rapidwp-widget-title"><span>',
    'after_title' => '</span></h2>'));

}
add_action( 'widgets_init', 'rapidwp_widgets_init' );


function rapidwp_sidebar_one_widgets() {
    dynamic_sidebar( 'rapidwp-sidebar-one' );
}

function rapidwp_sidebar_two_widgets() {
    dynamic_sidebar( 'rapidwp-sidebar-two' );
}

function rapidwp_top_wide_widgets() { ?>

<?php if ( is_active_sidebar( 'rapidwp-home-fullwidth-widgets' ) || is_active_sidebar( 'rapidwp-fullwidth-widgets' ) ) : ?>
<div class="rapidwp-top-wrapper-outer clearfix">
<div class="rapidwp-featured-posts-area rapidwp-top-wrapper clearfix">
<?php if ( is_front_page() && is_home() && !is_paged() ) { ?>
<?php dynamic_sidebar( 'rapidwp-home-fullwidth-widgets' ); ?>
<?php } ?>

<?php dynamic_sidebar( 'rapidwp-fullwidth-widgets' ); ?>
</div>
</div>
<?php endif; ?>

<?php }


function rapidwp_top_widgets() { ?>

<?php if ( is_active_sidebar( 'rapidwp-home-top-widgets' ) || is_active_sidebar( 'rapidwp-top-widgets' ) ) : ?>
<div class="rapidwp-featured-posts-area rapidwp-featured-posts-area-top clearfix">
<?php if ( is_front_page() && is_home() && !is_paged() ) { ?>
<?php dynamic_sidebar( 'rapidwp-home-top-widgets' ); ?>
<?php } ?>

<?php dynamic_sidebar( 'rapidwp-top-widgets' ); ?>
</div>
<?php endif; ?>

<?php }


function rapidwp_bottom_widgets() { ?>

<?php if ( is_active_sidebar( 'rapidwp-home-bottom-widgets' ) || is_active_sidebar( 'rapidwp-bottom-widgets' ) ) : ?>
<div class='rapidwp-featured-posts-area rapidwp-featured-posts-area-bottom clearfix'>
<?php if ( is_front_page() && is_home() && !is_paged() ) { ?>
<?php dynamic_sidebar( 'rapidwp-home-bottom-widgets' ); ?>
<?php } ?>

<?php dynamic_sidebar( 'rapidwp-bottom-widgets' ); ?>
</div>
<?php endif; ?>

<?php }


function rapidwp_post_bottom_widgets() { ?>

<?php if ( is_active_sidebar( 'rapidwp-single-post-bottom-widgets' ) ) : ?>
<div class="rapidwp-featured-posts-area clearfix">
<?php dynamic_sidebar( 'rapidwp-single-post-bottom-widgets' ); ?>
</div>
<?php endif; ?>

<?php }