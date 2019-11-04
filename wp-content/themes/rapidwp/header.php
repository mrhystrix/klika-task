<?php
/**
* The header for RapidWP theme.
*
* @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
*
* @package RapidWP WordPress Theme
* @copyright Copyright (C) 2018 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php wp_head(); ?>
</head>

<body <?php body_class('rapidwp-animated rapidwp-fadein'); ?> id="rapidwp-site-body" itemscope="itemscope" itemtype="http://schema.org/WebPage">
<?php wp_body_open(); ?>
<a class="skip-link screen-reader-text" href="#rapidwp-posts-wrapper"><?php esc_html_e( 'Skip to content', 'rapidwp' ); ?></a>

<?php if ( !(rapidwp_get_option('disable_secondary_menu')) ) { ?>
<div class="rapidwp-container rapidwp-secondary-menu-container clearfix">
<div class="rapidwp-outer-wrapper">
<div class="rapidwp-secondary-menu-container-inside clearfix">
<nav class="rapidwp-nav-secondary" id="rapidwp-secondary-navigation" itemscope="itemscope" itemtype="http://schema.org/SiteNavigationElement" role="navigation" aria-label="<?php esc_attr_e( 'Secondary Menu', 'rapidwp' ); ?>">
<button class="rapidwp-secondary-responsive-menu-icon" aria-controls="rapidwp-menu-secondary-navigation" aria-expanded="false"><?php esc_html_e( 'Menu', 'rapidwp' ); ?></button>
<?php wp_nav_menu( array( 'theme_location' => 'secondary', 'menu_id' => 'rapidwp-menu-secondary-navigation', 'menu_class' => 'rapidwp-secondary-nav-menu rapidwp-menu-secondary', 'fallback_cb' => 'rapidwp_top_fallback_menu', 'container' => '', ) ); ?>
<?php if ( !(rapidwp_get_option('hide_header_date')) ) { ?><div class="rapidwp-header-date"><?php echo esc_html(date_i18n(get_option( 'date_format' ))); ?></div><?php } ?>
</nav>
</div>
</div>
</div>
<?php } ?>

<div class="rapidwp-outer-wrapper">

<?php rapidwp_before_header(); ?>

<div class="rapidwp-container" id="rapidwp-header" itemscope="itemscope" itemtype="http://schema.org/WPHeader" role="banner">
<div class="rapidwp-head-content clearfix" id="rapidwp-head-content">

<?php if ( get_header_image() ) : ?>
<div class="rapidwp-header-image clearfix">
<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="rapidwp-header-img-link">
    <img src="<?php header_image(); ?>" width="<?php echo esc_attr(get_custom_header()->width); ?>" height="<?php echo esc_attr(get_custom_header()->height); ?>" alt="" class="rapidwp-header-img"/>
</a>
<?php if ( !(rapidwp_get_option('hide_header_image_title')) ) { ?>
<div class="rapidwp-header-image-info">
<div class="rapidwp-header-image-info-inside">
    <p class="rapidwp-site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
    <p class="rapidwp-site-description"><span><?php bloginfo( 'description' ); ?></span></p>
</div>
</div>
<?php } ?>
</div>
<?php endif; ?>

<?php if ( !(rapidwp_get_option('hide_header_content')) ) { ?>
<div class="rapidwp-header-inside clearfix">
<div class="rapidwp-header-inside-content clearfix">

<div class="rapidwp-logo">
<?php if ( has_custom_logo() ) : ?>
    <div class="site-branding">
    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="rapidwp-logo-img-link">
        <img src="<?php echo esc_url( rapidwp_custom_logo() ); ?>" alt="" class="rapidwp-logo-img"/>
    </a>
    <div class="rapidwp-custom-logo-info"><?php rapidwp_site_title(); ?></div>
    </div>
<?php else: ?>
    <div class="site-branding">
      <?php rapidwp_site_title(); ?>
    </div>
<?php endif; ?>
</div>

<div class="rapidwp-header-ad">
<?php dynamic_sidebar( 'rapidwp-header-banner' ); ?>
</div>

</div>
</div>
<?php } else { ?>
<div class="rapidwp-no-header-content">
  <?php rapidwp_site_title(); ?>
</div>
<?php } ?>

</div><!--/#rapidwp-head-content -->
</div><!--/#rapidwp-header -->

<?php rapidwp_after_header(); ?>

</div>

<?php if ( !(rapidwp_get_option('disable_primary_menu')) ) { ?>
<div class="rapidwp-container rapidwp-primary-menu-container clearfix">
<div class="rapidwp-outer-wrapper">
<div class="rapidwp-primary-menu-container-inside clearfix">

<nav class="rapidwp-nav-primary" id="rapidwp-primary-navigation" itemscope="itemscope" itemtype="http://schema.org/SiteNavigationElement" role="navigation" aria-label="<?php esc_attr_e( 'Primary Menu', 'rapidwp' ); ?>">
<button class="rapidwp-primary-responsive-menu-icon" aria-controls="rapidwp-menu-primary-navigation" aria-expanded="false"><?php esc_html_e( 'Menu', 'rapidwp' ); ?></button>
<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'rapidwp-menu-primary-navigation', 'menu_class' => 'rapidwp-primary-nav-menu rapidwp-menu-primary', 'fallback_cb' => 'rapidwp_fallback_menu', 'container' => '', ) ); ?>
<?php if ( !(rapidwp_get_option('hide_header_social_buttons')) ) { rapidwp_header_social_buttons(); } ?>
</nav>

</div>
</div>
</div>
<?php } ?>

<div id="rapidwp-search-overlay-wrap" class="rapidwp-search-overlay">
  <button class="rapidwp-search-closebtn" aria-label="<?php esc_attr_e( 'Close Search', 'rapidwp' ); ?>" title="<?php esc_attr_e('Close Search','rapidwp'); ?>">&#xD7;</button>
  <div class="rapidwp-search-overlay-content">
    <?php get_search_form(); ?>
  </div>
</div>

<?php rapidwp_after_primary_menu(); ?>

<div class="rapidwp-outer-wrapper">
<?php rapidwp_top_wide_widgets(); ?>
</div>

<div class="rapidwp-outer-wrapper">

<div class="rapidwp-container clearfix" id="rapidwp-wrapper">
<div class="rapidwp-content-wrapper clearfix" id="rapidwp-content-wrapper">