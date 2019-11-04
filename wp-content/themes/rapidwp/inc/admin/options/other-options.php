<?php
/**
* Other options
*
* @package RapidWP WordPress Theme
* @copyright Copyright (C) 2018 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/

function rapidwp_other_options($wp_customize) {

    $wp_customize->add_section( 'rapidwp_section_other_options', array( 'title' => esc_html__( 'Other Options', 'rapidwp' ), 'panel' => 'rapidwp_main_options_panel', 'priority' => 560 ) );

    $wp_customize->add_setting( 'rapidwp_options[enable_sticky_mobile_menu]', array( 'default' => false, 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'rapidwp_sanitize_checkbox', ) );

    $wp_customize->add_control( 'rapidwp_enable_sticky_mobile_menu_control', array( 'label' => esc_html__( 'Enable Sticky Menu on Small Screen', 'rapidwp' ), 'section' => 'rapidwp_section_other_options', 'settings' => 'rapidwp_options[enable_sticky_mobile_menu]', 'type' => 'checkbox', ) );

    $wp_customize->add_setting( 'rapidwp_options[disable_primary_menu]', array( 'default' => false, 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'rapidwp_sanitize_checkbox', ) );

    $wp_customize->add_control( 'rapidwp_disable_primary_menu_control', array( 'label' => esc_html__( 'Disable Primary Menu', 'rapidwp' ), 'section' => 'rapidwp_section_other_options', 'settings' => 'rapidwp_options[disable_primary_menu]', 'type' => 'checkbox', ) );

    $wp_customize->add_setting( 'rapidwp_options[disable_secondary_menu]', array( 'default' => false, 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'rapidwp_sanitize_checkbox', ) );

    $wp_customize->add_control( 'rapidwp_disable_secondary_menu_control', array( 'label' => esc_html__( 'Disable Secondary Menu', 'rapidwp' ), 'section' => 'rapidwp_section_other_options', 'settings' => 'rapidwp_options[disable_secondary_menu]', 'type' => 'checkbox', ) );

    $wp_customize->add_setting( 'rapidwp_options[hide_header_date]', array( 'default' => false, 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'rapidwp_sanitize_checkbox', ) );

    $wp_customize->add_control( 'rapidwp_hide_header_date_control', array( 'label' => esc_html__( 'Hide Header Date', 'rapidwp' ), 'section' => 'rapidwp_section_other_options', 'settings' => 'rapidwp_options[hide_header_date]', 'type' => 'checkbox', ) );

}