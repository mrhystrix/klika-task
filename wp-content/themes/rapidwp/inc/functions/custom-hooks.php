<?php
/**
* Custom Hooks
*
* @package RapidWP WordPress Theme
* @copyright Copyright (C) 2018 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/

function rapidwp_before_header() {
    do_action('rapidwp_before_header');
}

function rapidwp_after_header() {
    do_action('rapidwp_after_header');
}

function rapidwp_after_primary_menu() {
    do_action('rapidwp_after_primary_menu');
}

function rapidwp_before_slider() {
    do_action('rapidwp_before_slider');
}

function rapidwp_after_slider() {
    do_action('rapidwp_after_slider');
}

function rapidwp_before_main_content() {
    do_action('rapidwp_before_main_content');
}
add_action('rapidwp_before_main_content', 'rapidwp_slider_area', 10 );
add_action('rapidwp_before_main_content', 'rapidwp_top_widgets', 20 );

function rapidwp_after_main_content() {
    do_action('rapidwp_after_main_content');
}
add_action('rapidwp_after_main_content', 'rapidwp_bottom_widgets', 10 );

function rapidwp_sidebar_one() {
    do_action('rapidwp_sidebar_one');
}
add_action('rapidwp_sidebar_one', 'rapidwp_sidebar_one_widgets', 10 );

function rapidwp_sidebar_two() {
    do_action('rapidwp_sidebar_two');
}
add_action('rapidwp_sidebar_two', 'rapidwp_sidebar_two_widgets', 10 );

function rapidwp_before_single_post() {
    do_action('rapidwp_before_single_post');
}

function rapidwp_before_single_post_title() {
    do_action('rapidwp_before_single_post_title');
}

function rapidwp_after_single_post_title() {
    do_action('rapidwp_after_single_post_title');
}

function rapidwp_after_single_post_content() {
    do_action('rapidwp_after_single_post_content');
}

function rapidwp_after_single_post() {
    do_action('rapidwp_after_single_post');
}

function rapidwp_before_single_page() {
    do_action('rapidwp_before_single_page');
}

function rapidwp_before_single_page_title() {
    do_action('rapidwp_before_single_page_title');
}

function rapidwp_after_single_page_title() {
    do_action('rapidwp_after_single_page_title');
}

function rapidwp_after_single_page_content() {
    do_action('rapidwp_after_single_page_content');
}

function rapidwp_after_single_page() {
    do_action('rapidwp_after_single_page');
}

function rapidwp_before_comments() {
    do_action('rapidwp_before_comments');
}

function rapidwp_after_comments() {
    do_action('rapidwp_after_comments');
}