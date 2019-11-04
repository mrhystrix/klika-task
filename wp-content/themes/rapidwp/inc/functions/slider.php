<?php
/**
* Slider
*
* @package RapidWP WordPress Theme
* @copyright Copyright (C) 2018 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/

if ( ! function_exists( 'rapidwp_slider' ) ) :

function rapidwp_slider() { ?>
<div class="rapidwp-posts-carousel-wrapper">

    <?php
    $slider_length = 5;
    if ( rapidwp_get_option('slider_length') ) {
        $slider_length = rapidwp_get_option('slider_length');
    }

    $slider_post_type = 'recent-posts';
    if ( rapidwp_get_option('slider_post_type') ) {
        $slider_post_type = rapidwp_get_option('slider_post_type');
    }

    $slider_cat = rapidwp_get_option('slider_cat');

    if(($slider_post_type === 'category-posts') && $slider_cat) {
        $slider_query = new WP_Query("orderby=date&posts_per_page=".$slider_length."&nopaging=0&post_status=publish&ignore_sticky_posts=1&post_type=post&cat=$slider_cat");
    } else {
        $slider_query = new WP_Query("orderby=date&posts_per_page=".$slider_length."&nopaging=0&post_status=publish&ignore_sticky_posts=1&post_type=post");
    }

    if ($slider_query->have_posts()) : ?>

    <div class="rapidwp-posts-carousel rapidwp-box">
    <div class="rapidwp-box-inside">
    <div class="owl-carousel">
    <?php while ($slider_query->have_posts()) : $slider_query->the_post();  ?>
    <div class="rapidwp-slide-item">
        <?php if(has_post_thumbnail()) { ?>
            <?php the_post_thumbnail('rapidwp-featured-image', array('class' => 'rapidwp-slider-post-thumbnail-img', 'title' => the_title_attribute('echo=0'))); ?>
        <?php } else { ?>
            <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/no-image-675-360.jpg' ); ?>" class="rapidwp-slider-post-thumbnail-img"/>
        <?php } ?>
        <div class="text-over">
            <?php
            if ( 'post' == get_post_type() ) {
                /* translators: used between list items, there is a space */
                $categories_list = get_the_category_list( ' ' );
                if ( $categories_list ) {
                    /* translators: 1: list of categories. */
                    printf( '<div class="rapidwp-carousel-post-categories">' . __( '<span class="screen-reader-text">Posted in </span>%1$s', 'rapidwp' ) . '</div>', $categories_list ); /* phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped */
                }
            }
            ?>
            <h4 class="rapidwp-carousel-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php /* translators: %s: post title. */ echo esc_attr( sprintf( __( 'Permanent Link to %s', 'rapidwp' ), the_title_attribute( 'echo=0' ) ) ); ?>"><?php the_title(); ?></a></h4>
            <div class="rapidwp-carousel-post-footer">
            <span class="rapidwp-carousel-post-author rapidwp-carousel-post-meta"><i class="fa fa-user-circle-o" aria-hidden="true"></i>&nbsp;<a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>"><span class="screen-reader-text"><?php esc_html_e('Author: ', 'rapidwp'); ?></span><?php echo esc_html( get_the_author() ); ?></a></span>
            <span class="rapidwp-carousel-post-date rapidwp-carousel-post-meta"><i class="fa fa-clock-o" aria-hidden="true"></i><span class="screen-reader-text"><?php esc_html_e('Published Date:', 'rapidwp'); ?></span>&nbsp;<?php echo get_the_date('Y-m-d'); ?></span>
            <span class="rapidwp-carousel-post-comment rapidwp-carousel-post-meta"><i class="fa fa-comments-o" aria-hidden="true"></i>&nbsp;<?php comments_popup_link( sprintf( wp_kses( /* translators: %s: post title */ __( '0 Comments<span class="screen-reader-text"> on %s</span>', 'rapidwp' ), array( 'span' => array( 'class' => array(), ), ) ), get_the_title() ) ); ?></span>
            </div>
            <div class="rapidwp-carousel-post-snippet"><?php the_excerpt(); ?></div>
            <div class='rapidwp-carousel-post-read-more'><a href="<?php echo esc_url( get_permalink() ); ?>"><?php echo esc_html( rapidwp_read_more_text() ); ?><span class="screen-reader-text"> <?php the_title(); ?></span></a></div>
        </div>
    </div>
    <?php endwhile; ?>
    </div>
    </div>
    </div>

    <?php wp_reset_postdata();  // Restore global post data stomped by the_post().
    endif; ?>

</div>
<?php }

endif;


function rapidwp_slider_area() {

if ( rapidwp_get_option('enable_slider') ) {

rapidwp_before_slider();

if ( 'front-page' === rapidwp_get_option('slider_display') ) {
    if ( is_front_page() && is_home() && !is_paged() ) {
        rapidwp_slider();
    }
} elseif ( 'front-page-static' === rapidwp_get_option('slider_display') ) {
    if ( is_front_page() && is_singular() ) {
        rapidwp_slider();
    }
} else {
    if ( is_front_page() && is_home() && !is_paged() ) {
        rapidwp_slider();
    }
}

rapidwp_after_slider();

}

}