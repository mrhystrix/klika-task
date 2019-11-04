<?php
/**
* Header options
*
* @package RapidWP WordPress Theme
* @copyright Copyright (C) 2018 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/

function rapidwp_header_options($wp_customize) {

    // Header
    $wp_customize->add_section( 'rapidwp_section_header', array( 'title' => esc_html__( 'Header Options', 'rapidwp' ), 'panel' => 'rapidwp_main_options_panel', 'priority' => 240 ) );

    $wp_customize->add_setting( 'rapidwp_options[hide_header_content]', array( 'default' => false, 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'rapidwp_sanitize_checkbox', ) );

    $wp_customize->add_control( 'rapidwp_hide_header_content_control', array( 'label' => esc_html__( 'Hide Header Content', 'rapidwp' ), 'section' => 'rapidwp_section_header', 'settings' => 'rapidwp_options[hide_header_content]', 'type' => 'checkbox', ) );

    $wp_customize->add_setting( 'rapidwp_options[hide_header_image_title]', array( 'default' => false, 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'rapidwp_sanitize_checkbox', ) );

    $wp_customize->add_control( 'rapidwp_hide_header_image_title_control', array( 'label' => esc_html__( 'Hide Site Title and Description from Header Image', 'rapidwp' ), 'section' => 'header_image', 'settings' => 'rapidwp_options[hide_header_image_title]', 'type' => 'checkbox', ) );

}