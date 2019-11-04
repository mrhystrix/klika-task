<?php
/**
* The template for displaying archive pages.
*
* @link https://developer.wordpress.org/themes/basics/template-hierarchy/
*
* @package RapidWP WordPress Theme
* @copyright Copyright (C) 2018 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/

get_header(); ?>

<div class="rapidwp-main-wrapper clearfix" id="rapidwp-main-wrapper" itemscope="itemscope" itemtype="http://schema.org/Blog" role="main">
<div class="theiaStickySidebar">
<div class="rapidwp-main-wrapper-inside clearfix">

<?php rapidwp_before_main_content(); ?>

<div class="rapidwp-posts-wrapper" id="rapidwp-posts-wrapper">

<div class="rapidwp-posts rapidwp-box">
<div class="rapidwp-box-inside">

<header class="rapidwp-page-header">
<div class="rapidwp-page-header-inside">
<?php the_archive_title( '<h1 class="page-title">', '</h1>' ); ?>
<?php the_archive_description( '<div class="taxonomy-description">', '</div>' ); ?>
</div>
</header>

<div class="rapidwp-posts-content">

<?php if (have_posts()) : ?>

    <div class="rapidwp-posts-container">
    <?php $rapidwp_total_posts = $wp_query->post_count; ?>
    <?php $rapidwp_post_counter=1; while (have_posts()) : the_post(); ?>

        <?php get_template_part( 'template-parts/content', rapidwp_post_style() ); ?>

    <?php $rapidwp_post_counter++; endwhile; ?>
    </div>
    <div class="clear"></div>

    <?php rapidwp_posts_navigation(); ?>

<?php else : ?>

  <?php get_template_part( 'template-parts/content', 'none' ); ?>

<?php endif; ?>

</div>

</div>
</div>

</div><!--/#rapidwp-posts-wrapper -->

<?php rapidwp_after_main_content(); ?>

</div>
</div>
</div><!-- /#rapidwp-main-wrapper -->

<?php get_sidebar(); ?>

<?php get_footer(); ?>