<?php
/**
* Recommended plugins options
*
* @package RapidWP WordPress Theme
* @copyright Copyright (C) 2018 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/

function rapidwp_recomm_plugin_options($wp_customize) {

    // Customizer Section: Recommended Plugins
    $wp_customize->add_section( 'rapidwp_section_recommended_plugins', array( 'title' => esc_html__( 'Recommended Plugins', 'rapidwp' ), 'panel' => 'rapidwp_main_options_panel', 'priority' => 880 ));

    $wp_customize->add_setting( 'rapidwp_options[recommended_plugins]', array( 'type' => 'option', 'capability' => 'install_plugins', 'sanitize_callback' => 'rapidwp_sanitize_recommended_plugins' ) );

    $wp_customize->add_control( new RapidWP_Customize_Recommended_Plugins( $wp_customize, 'rapidwp_recommended_plugins_control', array( 'label' => esc_html__( 'Recommended Plugins', 'rapidwp' ), 'section' => 'rapidwp_section_recommended_plugins', 'settings' => 'rapidwp_options[recommended_plugins]', 'type' => 'tdna-recommended-wpplugins', 'capability' => 'install_plugins' ) ) );

}