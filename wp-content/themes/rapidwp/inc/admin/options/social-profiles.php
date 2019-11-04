<?php
/**
* Social profiles options
*
* @package RapidWP WordPress Theme
* @copyright Copyright (C) 2018 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/

function rapidwp_social_profiles($wp_customize) {

    $wp_customize->add_section( 'rapidwp_section_social', array( 'title' => esc_html__( 'Social Links', 'rapidwp' ), 'panel' => 'rapidwp_main_options_panel', 'priority' => 400, ));

    $wp_customize->add_setting( 'rapidwp_options[hide_header_social_buttons]', array( 'default' => false, 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'rapidwp_sanitize_checkbox', ) );

    $wp_customize->add_control( 'rapidwp_hide_header_social_buttons_control', array( 'label' => esc_html__( 'Hide Header Social Buttons', 'rapidwp' ), 'section' => 'rapidwp_section_social', 'settings' => 'rapidwp_options[hide_header_social_buttons]', 'type' => 'checkbox', ) );

    $wp_customize->add_setting( 'rapidwp_options[hide_header_search_button]', array( 'default' => false, 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'rapidwp_sanitize_checkbox', ) );

    $wp_customize->add_control( 'rapidwp_hide_header_search_button_control', array( 'label' => esc_html__( 'Hide Header Search Button', 'rapidwp' ), 'section' => 'rapidwp_section_social', 'settings' => 'rapidwp_options[hide_header_search_button]', 'type' => 'checkbox', ) );

    $wp_customize->add_setting( 'rapidwp_options[hide_header_login_button]', array( 'default' => false, 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'rapidwp_sanitize_checkbox', ) );

    $wp_customize->add_control( 'rapidwp_hide_header_login_button_control', array( 'label' => esc_html__( 'Hide Header Login Button', 'rapidwp' ), 'section' => 'rapidwp_section_social', 'settings' => 'rapidwp_options[hide_header_login_button]', 'type' => 'checkbox', ) );

    $wp_customize->add_setting( 'rapidwp_options[twitterlink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'rapidwp_twitterlink_control', array( 'label' => esc_html__( 'Twitter URL', 'rapidwp' ), 'section' => 'rapidwp_section_social', 'settings' => 'rapidwp_options[twitterlink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'rapidwp_options[facebooklink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'rapidwp_facebooklink_control', array( 'label' => esc_html__( 'Facebook URL', 'rapidwp' ), 'section' => 'rapidwp_section_social', 'settings' => 'rapidwp_options[facebooklink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'rapidwp_options[googlelink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) ); 

    $wp_customize->add_control( 'rapidwp_googlelink_control', array( 'label' => esc_html__( 'Google Plus URL', 'rapidwp' ), 'section' => 'rapidwp_section_social', 'settings' => 'rapidwp_options[googlelink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'rapidwp_options[pinterestlink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'rapidwp_pinterestlink_control', array( 'label' => esc_html__( 'Pinterest URL', 'rapidwp' ), 'section' => 'rapidwp_section_social', 'settings' => 'rapidwp_options[pinterestlink]', 'type' => 'text' ) );
    
    $wp_customize->add_setting( 'rapidwp_options[linkedinlink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'rapidwp_linkedinlink_control', array( 'label' => esc_html__( 'Linkedin Link', 'rapidwp' ), 'section' => 'rapidwp_section_social', 'settings' => 'rapidwp_options[linkedinlink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'rapidwp_options[instagramlink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'rapidwp_instagramlink_control', array( 'label' => esc_html__( 'Instagram Link', 'rapidwp' ), 'section' => 'rapidwp_section_social', 'settings' => 'rapidwp_options[instagramlink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'rapidwp_options[vklink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'rapidwp_vklink_control', array( 'label' => esc_html__( 'VK Link', 'rapidwp' ), 'section' => 'rapidwp_section_social', 'settings' => 'rapidwp_options[vklink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'rapidwp_options[flickrlink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'rapidwp_flickrlink_control', array( 'label' => esc_html__( 'Flickr Link', 'rapidwp' ), 'section' => 'rapidwp_section_social', 'settings' => 'rapidwp_options[flickrlink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'rapidwp_options[youtubelink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'rapidwp_youtubelink_control', array( 'label' => esc_html__( 'Youtube URL', 'rapidwp' ), 'section' => 'rapidwp_section_social', 'settings' => 'rapidwp_options[youtubelink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'rapidwp_options[vimeolink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'rapidwp_vimeolink_control', array( 'label' => esc_html__( 'Vimeo URL', 'rapidwp' ), 'section' => 'rapidwp_section_social', 'settings' => 'rapidwp_options[vimeolink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'rapidwp_options[soundcloudlink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'rapidwp_soundcloudlink_control', array( 'label' => esc_html__( 'Soundcloud URL', 'rapidwp' ), 'section' => 'rapidwp_section_social', 'settings' => 'rapidwp_options[soundcloudlink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'rapidwp_options[lastfmlink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'rapidwp_lastfmlink_control', array( 'label' => esc_html__( 'Lastfm URL', 'rapidwp' ), 'section' => 'rapidwp_section_social', 'settings' => 'rapidwp_options[lastfmlink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'rapidwp_options[githublink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'rapidwp_githublink_control', array( 'label' => esc_html__( 'Github URL', 'rapidwp' ), 'section' => 'rapidwp_section_social', 'settings' => 'rapidwp_options[githublink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'rapidwp_options[bitbucketlink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'rapidwp_bitbucketlink_control', array( 'label' => esc_html__( 'Bitbucket URL', 'rapidwp' ), 'section' => 'rapidwp_section_social', 'settings' => 'rapidwp_options[bitbucketlink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'rapidwp_options[tumblrlink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'rapidwp_tumblrlink_control', array( 'label' => esc_html__( 'Tumblr URL', 'rapidwp' ), 'section' => 'rapidwp_section_social', 'settings' => 'rapidwp_options[tumblrlink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'rapidwp_options[digglink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'rapidwp_digglink_control', array( 'label' => esc_html__( 'Digg URL', 'rapidwp' ), 'section' => 'rapidwp_section_social', 'settings' => 'rapidwp_options[digglink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'rapidwp_options[deliciouslink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'rapidwp_deliciouslink_control', array( 'label' => esc_html__( 'Delicious URL', 'rapidwp' ), 'section' => 'rapidwp_section_social', 'settings' => 'rapidwp_options[deliciouslink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'rapidwp_options[stumblelink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'rapidwp_stumblelink_control', array( 'label' => esc_html__( 'Stumbleupon Link', 'rapidwp' ), 'section' => 'rapidwp_section_social', 'settings' => 'rapidwp_options[stumblelink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'rapidwp_options[redditlink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'rapidwp_redditlink_control', array( 'label' => esc_html__( 'Reddit Link', 'rapidwp' ), 'section' => 'rapidwp_section_social', 'settings' => 'rapidwp_options[redditlink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'rapidwp_options[dribbblelink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'rapidwp_dribbblelink_control', array( 'label' => esc_html__( 'Dribbble Link', 'rapidwp' ), 'section' => 'rapidwp_section_social', 'settings' => 'rapidwp_options[dribbblelink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'rapidwp_options[behancelink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'rapidwp_behancelink_control', array( 'label' => esc_html__( 'Behance Link', 'rapidwp' ), 'section' => 'rapidwp_section_social', 'settings' => 'rapidwp_options[behancelink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'rapidwp_options[codepenlink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'rapidwp_codepenlink_control', array( 'label' => esc_html__( 'Codepen Link', 'rapidwp' ), 'section' => 'rapidwp_section_social', 'settings' => 'rapidwp_options[codepenlink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'rapidwp_options[jsfiddlelink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'rapidwp_jsfiddlelink_control', array( 'label' => esc_html__( 'JSFiddle Link', 'rapidwp' ), 'section' => 'rapidwp_section_social', 'settings' => 'rapidwp_options[jsfiddlelink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'rapidwp_options[stackoverflowlink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'rapidwp_stackoverflowlink_control', array( 'label' => esc_html__( 'Stack Overflow Link', 'rapidwp' ), 'section' => 'rapidwp_section_social', 'settings' => 'rapidwp_options[stackoverflowlink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'rapidwp_options[stackexchangelink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'rapidwp_stackexchangelink_control', array( 'label' => esc_html__( 'Stack Exchange Link', 'rapidwp' ), 'section' => 'rapidwp_section_social', 'settings' => 'rapidwp_options[stackexchangelink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'rapidwp_options[bsalink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'rapidwp_bsalink_control', array( 'label' => esc_html__( 'BuySellAds Link', 'rapidwp' ), 'section' => 'rapidwp_section_social', 'settings' => 'rapidwp_options[bsalink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'rapidwp_options[slidesharelink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'rapidwp_slidesharelink_control', array( 'label' => esc_html__( 'SlideShare Link', 'rapidwp' ), 'section' => 'rapidwp_section_social', 'settings' => 'rapidwp_options[slidesharelink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'rapidwp_options[skypeusername]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'sanitize_text_field' ) );

    $wp_customize->add_control( 'rapidwp_skypeusername_control', array( 'label' => esc_html__( 'Skype Username', 'rapidwp' ), 'section' => 'rapidwp_section_social', 'settings' => 'rapidwp_options[skypeusername]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'rapidwp_options[emailaddress]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'rapidwp_sanitize_email' ) );

    $wp_customize->add_control( 'rapidwp_emailaddress_control', array( 'label' => esc_html__( 'Email Address', 'rapidwp' ), 'section' => 'rapidwp_section_social', 'settings' => 'rapidwp_options[emailaddress]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'rapidwp_options[rsslink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'rapidwp_rsslink_control', array( 'label' => esc_html__( 'RSS Feed URL', 'rapidwp' ), 'section' => 'rapidwp_section_social', 'settings' => 'rapidwp_options[rsslink]', 'type' => 'text' ) );

}