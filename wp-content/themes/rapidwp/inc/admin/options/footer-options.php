<?php
/**
* Footer options
*
* @package RapidWP WordPress Theme
* @copyright Copyright (C) 2018 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/

function rapidwp_footer_options($wp_customize) {

    $wp_customize->add_section( 'rapidwp_section_footer', array( 'title' => esc_html__( 'Footer', 'rapidwp' ), 'panel' => 'rapidwp_main_options_panel', 'priority' => 440 ) );

    $wp_customize->add_setting( 'rapidwp_options[footer_text]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'rapidwp_sanitize_html', ) );

    $wp_customize->add_control( 'rapidwp_footer_text_control', array( 'label' => esc_html__( 'Footer copyright notice', 'rapidwp' ), 'section' => 'rapidwp_section_footer', 'settings' => 'rapidwp_options[footer_text]', 'type' => 'text', ) );

    $wp_customize->add_setting( 'rapidwp_options[hide_footer_widgets]', array( 'default' => false, 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'rapidwp_sanitize_checkbox', ) );

    $wp_customize->add_control( 'rapidwp_hide_footer_widgets_control', array( 'label' => esc_html__( 'Hide Footer Widgets', 'rapidwp' ), 'section' => 'rapidwp_section_footer', 'settings' => 'rapidwp_options[hide_footer_widgets]', 'type' => 'checkbox', ) );

}