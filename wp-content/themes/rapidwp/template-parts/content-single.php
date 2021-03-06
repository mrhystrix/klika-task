<?php
/**
* Template part for displaying single posts.
*
* @link https://developer.wordpress.org/themes/basics/template-hierarchy/
*
* @package RapidWP WordPress Theme
* @copyright Copyright (C) 2018 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/
?>

<?php rapidwp_before_single_post(); ?>

<article id="post-<?php the_ID(); ?>" <?php post_class('rapidwp-post-singular rapidwp-box'); ?>>
<div class="rapidwp-box-inside">

    <header class="entry-header">
    <div class="entry-header-inside">
        <?php if ( !(rapidwp_get_option('hide_post_categories')) ) { ?><?php rapidwp_single_cats(); ?><?php } ?>

        <?php the_title( sprintf( '<h1 class="post-title entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h1>' ); ?>

        <?php rapidwp_single_postmeta(); ?>
    </div>
    </header><!-- .entry-header -->

    <?php rapidwp_after_single_post_title(); ?>

    <div class="entry-content clearfix">
            <?php
            if ( has_post_thumbnail() ) {
                if ( !(rapidwp_get_option('hide_thumbnail')) ) {
                    if ( !(rapidwp_get_option('hide_thumbnail_single')) ) {
                        if ( rapidwp_get_option('thumbnail_link') == 'no' ) { ?>
                            <div class="rapidwp-post-thumbnail-single-holder">
                            <?php
                            if ( is_page_template( array( 'template-full-width-post.php', 'template-full-width-post-sidebar.php' ) ) ) {
                                the_post_thumbnail('rapidwp-fullwidth-image', array('class' => 'rapidwp-post-thumbnail-single', 'title' => the_title_attribute('echo=0')));
                            } elseif ( is_page_template( array( 'template-c-s1-post.php', 'template-c-s2-post.php', 'template-s1-c-post.php', 'template-s2-c-post.php' ) ) ) {
                                the_post_thumbnail('rapidwp-large-image', array('class' => 'rapidwp-post-thumbnail-single', 'title' => the_title_attribute('echo=0')));
                            } else {
                                the_post_thumbnail('rapidwp-featured-image', array('class' => 'rapidwp-post-thumbnail-single', 'title' => the_title_attribute('echo=0')));
                            }
                            ?>
                            </div>
                        <?php } else { ?>
                            <div class="rapidwp-post-thumbnail-single-holder">
                            <?php if ( is_page_template( array( 'template-full-width-post.php', 'template-full-width-post-sidebar.php' ) ) ) { ?>
                                <a href="<?php echo esc_url( get_permalink() ); ?>" title="<?php /* translators: %s: post title. */ echo esc_attr( sprintf( __( 'Permanent Link to %s', 'rapidwp' ), the_title_attribute( 'echo=0' ) ) ); ?>"><?php the_post_thumbnail('rapidwp-fullwidth-image', array('class' => 'rapidwp-post-thumbnail-single', 'title' => the_title_attribute('echo=0'))); ?></a>
                            <?php } elseif ( is_page_template( array( 'template-c-s1-post.php', 'template-c-s2-post.php', 'template-s1-c-post.php', 'template-s2-c-post.php' ) ) ) { ?>
                                <a href="<?php echo esc_url( get_permalink() ); ?>" title="<?php /* translators: %s: post title. */ echo esc_attr( sprintf( __( 'Permanent Link to %s', 'rapidwp' ), the_title_attribute( 'echo=0' ) ) ); ?>"><?php the_post_thumbnail('rapidwp-large-image', array('class' => 'rapidwp-post-thumbnail-single', 'title' => the_title_attribute('echo=0'))); ?></a>
                            <?php } else { ?>
                                <a href="<?php echo esc_url( get_permalink() ); ?>" title="<?php /* translators: %s: post title. */ echo esc_attr( sprintf( __( 'Permanent Link to %s', 'rapidwp' ), the_title_attribute( 'echo=0' ) ) ); ?>"><?php the_post_thumbnail('rapidwp-featured-image', array('class' => 'rapidwp-post-thumbnail-single', 'title' => the_title_attribute('echo=0'))); ?></a>
                            <?php } ?>
                            </div>
                <?php   }
                    }
                }
            }

            the_content( sprintf(
                wp_kses(
                    /* translators: %s: Name of current post. Only visible to screen readers */
                    __( 'Continue reading<span class="screen-reader-text"> "%s"</span> <span class="meta-nav">&rarr;</span>', 'rapidwp' ),
                    array(
                        'span' => array(
                            'class' => array(),
                        ),
                    )
                ),
                get_the_title()
            ) );

            wp_link_pages( array(
             'before'      => '<div class="page-links"><span class="page-links-title">' . esc_html__( 'Pages:', 'rapidwp' ) . '</span>',
             'after'       => '</div>',
             'link_before' => '<span>',
             'link_after'  => '</span>',
             ) );
             ?>
    </div><!-- .entry-content -->

    <?php rapidwp_after_single_post_content(); ?>

    <?php if ( !(rapidwp_get_option('hide_post_tags')) ) { ?>
    <footer class="entry-footer">
        <?php rapidwp_post_tags(); ?>
    </footer><!-- .entry-footer -->
    <?php } ?>

    <?php if ( !(rapidwp_get_option('hide_author_bio_box')) ) { echo wp_kses_post( force_balance_tags( rapidwp_add_author_bio_box() ) ); } ?>

</div>
</article>

<?php rapidwp_after_single_post(); ?>