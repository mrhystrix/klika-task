<?php
/**
* Upgrade to pro options
*
* @package RapidWP WordPress Theme
* @copyright Copyright (C) 2018 ThemesDNA
* @license licennse URI, for example : http://www.gnu.org/licenses/gpl-2.0.html
* @author ThemesDNA <themesdna@gmail.com>
*/

function rapidwp_upgrade_to_pro($wp_customize) {

    $wp_customize->add_section( 'rapidwp_section_upgrade', array( 'title' => esc_html__( 'Upgrade to Pro Version', 'rapidwp' ), 'priority' => 400 ) );
    
    $wp_customize->add_setting( 'rapidwp_options[upgrade_text]', array( 'default' => '', 'sanitize_callback' => '__return_false', ) );
    
    $wp_customize->add_control( new RapidWP_Customize_Static_Text_Control( $wp_customize, 'rapidwp_upgrade_text_control', array(
        'label'       => esc_html__( 'RapidWP Pro', 'rapidwp' ),
        'section'     => 'rapidwp_section_upgrade',
        'settings' => 'rapidwp_options[upgrade_text]',
        'description' => esc_html__( 'Do you enjoy RapidWP? Upgrade to RapidWP Pro now and get:', 'rapidwp' ).
            '<ul class="rapidwp-customizer-pro-features">' .
                '<li><i class="fa fa-check" aria-hidden="true"></i> ' . esc_html__( 'Color Options', 'rapidwp' ) . '</li>' .
                '<li><i class="fa fa-check" aria-hidden="true"></i> ' . esc_html__( 'Font Options', 'rapidwp' ) . '</li>' .
                '<li><i class="fa fa-check" aria-hidden="true"></i> ' . esc_html__( '10+ Layout Options Posts/Pages', 'rapidwp' ) . '</li>' .
                '<li><i class="fa fa-check" aria-hidden="true"></i> ' . esc_html__( '10+ Layout Options Non-Singular Pages', 'rapidwp' ) . '</li>' .
                '<li><i class="fa fa-check" aria-hidden="true"></i> ' . esc_html__( '10+ Custom Page Templates', 'rapidwp' ) . '</li>' .
                '<li><i class="fa fa-check" aria-hidden="true"></i> ' . esc_html__( '10+ Custom Post Templates', 'rapidwp' ) . '</li>' .
                '<li><i class="fa fa-check" aria-hidden="true"></i> ' . esc_html__( '13 Different Posts Styles', 'rapidwp' ) . '</li>' .
                '<li><i class="fa fa-check" aria-hidden="true"></i> ' . esc_html__( '18 Different Featured Posts Widgets(each widget displays recent/popular/random posts or posts from a given category or tag.)', 'rapidwp' ) . '</li>' .
                '<li><i class="fa fa-check" aria-hidden="true"></i> ' . esc_html__( 'News Ticker with Options', 'rapidwp' ) . '</li>' .
                '<li><i class="fa fa-check" aria-hidden="true"></i> ' . esc_html__( 'Slider with More Options', 'rapidwp' ) . '</li>' .
                '<li><i class="fa fa-check" aria-hidden="true"></i> ' . esc_html__( 'Tabbed Widget', 'rapidwp' ) . '</li>' .
                '<li><i class="fa fa-check" aria-hidden="true"></i> ' . esc_html__( 'Social Profiles Widget and About Me Widget', 'rapidwp' ) . '</li>' .
                '<li><i class="fa fa-check" aria-hidden="true"></i> ' . esc_html__( '3 Header Layouts (full-width header or header+728x90 ad or header+search box)', 'rapidwp' ) . '</li>' .
                '<li><i class="fa fa-check" aria-hidden="true"></i> ' . esc_html__( 'Post Share Buttons with Options', 'rapidwp' ) . '</li>' .
                '<li><i class="fa fa-check" aria-hidden="true"></i> ' . esc_html__( 'Related Posts with Thumbnails with Options', 'rapidwp' ) . '</li>' .
                '<li><i class="fa fa-check" aria-hidden="true"></i> ' . esc_html__( 'Custom Post Meta Box to Control Options in Each Post', 'rapidwp' ) . '</li>' .
                '<li><i class="fa fa-check" aria-hidden="true"></i> ' . esc_html__( 'Author Bio Box with Social Buttons', 'rapidwp' ) . '</li>' .
                '<li><i class="fa fa-check" aria-hidden="true"></i> ' . esc_html__( 'Advanced Post Navigation with Thumbnails', 'rapidwp' ) . '</li>' .
                '<li><i class="fa fa-check" aria-hidden="true"></i> ' . esc_html__( 'Random Posts Button in Header', 'rapidwp' ) . '</li>' .
                '<li><i class="fa fa-check" aria-hidden="true"></i> ' . esc_html__( 'Sticky Menu/Sticky Sidebars with enable/disable capability', 'rapidwp' ) . '</li>' .
                '<li><i class="fa fa-check" aria-hidden="true"></i> ' . esc_html__( 'Footer with Layout Options (1/2/3/4 columns)', 'rapidwp' ) . '</li>' .
                '<li><i class="fa fa-check" aria-hidden="true"></i> ' . esc_html__( 'Built-in Contact Form', 'rapidwp' ) . '</li>' .
                '<li><i class="fa fa-check" aria-hidden="true"></i> ' . esc_html__( 'WooCommerce Support', 'rapidwp' ) . '</li>' .
                '<li><i class="fa fa-check" aria-hidden="true"></i> ' . esc_html__( 'Search Engine Optimized', 'rapidwp' ) . '</li>' .
                '<li><i class="fa fa-check" aria-hidden="true"></i> ' . esc_html__( 'More Customizer options', 'rapidwp' ) . '</li>' .
                '<li><i class="fa fa-check" aria-hidden="true"></i> ' . esc_html__( 'More Features...', 'rapidwp' ) . '</li>' .
            '</ul>'.
            '<strong><a href="'.RAPIDWP_PROURL.'" class="button button-primary" target="_blank"><i class="fa fa-shopping-cart" aria-hidden="true"></i> ' . esc_html__( 'Upgrade To RapidWP PRO', 'rapidwp' ) . '</a></strong>'
    ) ) ); 

}