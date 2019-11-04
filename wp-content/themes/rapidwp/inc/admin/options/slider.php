<?php
/**
* Slider options
*
* @package RapidWP WordPress Theme
* @copyright Copyright (C) 2018 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/

function rapidwp_slider_options($wp_customize) {

    $wp_customize->add_section( 'rapidwp_section_slider', array( 'title' => esc_html__( 'Slider', 'rapidwp' ), 'panel' => 'rapidwp_main_options_panel', 'priority' => 250 ) );

    $wp_customize->add_setting( 'rapidwp_options[enable_slider]', array( 'default' => false, 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'rapidwp_sanitize_checkbox', ) );

    $wp_customize->add_control( 'rapidwp_enable_slider_control', array( 'label' => esc_html__( 'Enable Slider', 'rapidwp' ), 'section' => 'rapidwp_section_slider', 'settings' => 'rapidwp_options[enable_slider]', 'type' => 'checkbox', ) );

    $wp_customize->add_setting( 'rapidwp_options[slider_display]', array( 'default' => 'front-page', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'rapidwp_sanitize_slider_display' ) );

    $wp_customize->add_control( 'rapidwp_slider_display_control', array( 'label' => esc_html__( 'Slider Display Location', 'rapidwp' ), 'description' => esc_html__('Select the slider display location.', 'rapidwp'), 'section' => 'rapidwp_section_slider', 'settings' => 'rapidwp_options[slider_display]', 'type' => 'select', 'choices' => array( 'front-page' => esc_html__('Home Page', 'rapidwp'), 'front-page-static' => esc_html__('Static Home Page', 'rapidwp') ) ) );

    $wp_customize->add_setting( 'rapidwp_options[slider_length]', array( 'default' => 5, 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'rapidwp_sanitize_positive_integer' ) );

    $wp_customize->add_control( 'rapidwp_slider_length_control', array( 'label' => esc_html__( 'Number of Slider Posts', 'rapidwp' ), 'description' => esc_html__('Enter the number of posts you need to display in the slider area. Default is 5 posts.', 'rapidwp'), 'section' => 'rapidwp_section_slider', 'settings' => 'rapidwp_options[slider_length]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'rapidwp_options[slider_post_type]', array( 'default' => 'recent-posts', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'rapidwp_sanitize_slider_type' ) );

    $wp_customize->add_control( 'rapidwp_slider_post_type_control', array( 'label' => esc_html__( 'Slider Posts Type', 'rapidwp' ), 'description' => esc_html__('Select a post type to display in slider.', 'rapidwp'), 'section' => 'rapidwp_section_slider', 'settings' => 'rapidwp_options[slider_post_type]', 'type' => 'select', 'choices' => array( 'recent-posts' => esc_html__('Recent Posts', 'rapidwp'), 'category-posts' => esc_html__('Category Posts', 'rapidwp') ) ) );

    $wp_customize->add_setting( 'rapidwp_options[slider_cat]', array( 'default' => 0, 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'absint' ) );

    $wp_customize->add_control( new RapidWP_Customize_Category_Control( $wp_customize, 'rapidwp_slider_cat_control', array( 'label' => esc_html__( 'Slider Posts Category', 'rapidwp' ), 'section' => 'rapidwp_section_slider', 'settings' => 'rapidwp_options[slider_cat]', 'description' => esc_html__( 'Select a category if Posts Type option is Category Posts', 'rapidwp' ) ) ) );

}