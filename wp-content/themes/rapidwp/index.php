<?php
/**
* The main template file.
*
* This is the most generic template file in a WordPress theme
* and one of the two required files for a theme (the other being style.css).
* It is used to display a page when nothing more specific matches a query.
* E.g., it puts together the home page when no home.php file exists.
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

<?php if ( !(rapidwp_get_option('hide_posts_heading')) ) { ?>
<?php if(is_home() && !is_paged()) { ?>
<?php if ( rapidwp_get_option('posts_heading') ) : ?>
<h2 class="rapidwp-posts-heading"><span><?php echo esc_html( rapidwp_get_option('posts_heading') ); ?></span></h2>
<?php else : ?>
<h2 class="rapidwp-posts-heading"><span><?php esc_html_e( 'Recent Posts', 'rapidwp' ); ?></span></h2>
<?php endif; ?>
<?php } ?>
<?php } ?>

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