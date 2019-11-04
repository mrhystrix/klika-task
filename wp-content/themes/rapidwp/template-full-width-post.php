<?php
/**
* The template for displaying full-width post.
*
* @package RapidWP WordPress Theme
* @copyright Copyright (C) 2018 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*
* Template Name: Full Width, no sidebar
* Template Post Type: post
*/

get_header(); ?>

<div class="rapidwp-main-wrapper clearfix" id="rapidwp-main-wrapper" itemscope="itemscope" itemtype="http://schema.org/Blog" role="main">
<div class="theiaStickySidebar">
<div class="rapidwp-main-wrapper-inside clearfix">

<?php rapidwp_before_main_content(); ?>

<div class="rapidwp-posts-wrapper" id="rapidwp-posts-wrapper">

<?php while (have_posts()) : the_post();

    get_template_part( 'template-parts/content', 'single' );

    rapidwp_post_navigation();

    rapidwp_post_bottom_widgets();

    // If comments are open or we have at least one comment, load up the comment template
    if ( comments_open() || get_comments_number() ) :
            comments_template();
    endif;

endwhile; ?>

<div class="clear"></div>
</div><!--/#rapidwp-posts-wrapper -->

<?php rapidwp_after_main_content(); ?>

</div>
</div>
</div><!-- /#rapidwp-main-wrapper -->

<?php get_footer(); ?>