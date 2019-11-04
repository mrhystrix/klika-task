<?php
/**
* Post meta functions
*
* @package RapidWP WordPress Theme
* @copyright Copyright (C) 2018 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/

if ( ! function_exists( 'rapidwp_post_tags' ) ) :
/**
 * Prints HTML with meta information for the tags.
 */
function rapidwp_post_tags() {
    if ( 'post' == get_post_type() ) {
        /* translators: used between list items, there is a space after the comma */
        $tags_list = get_the_tag_list( '', esc_html_x( ', ', 'list item separator', 'rapidwp' ) );
        if ( $tags_list ) {
            /* translators: 1: list of tags. */
            printf( '<span class="rapidwp-tags-links"><i class="fa fa-tags" aria-hidden="true"></i> ' . esc_html__( 'Tagged %1$s', 'rapidwp' ) . '</span>', $tags_list ); /* phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped */
        }
    }
}
endif;


if ( ! function_exists( 'rapidwp_style_9_cats' ) ) :
function rapidwp_style_9_cats() {
    if ( 'post' == get_post_type() ) {
        /* translators: used between list items, there is a space */
        $categories_list = get_the_category_list( esc_html__( '&nbsp;', 'rapidwp' ) );
        if ( $categories_list ) {
            /* translators: 1: list of categories. */
            printf( '<div class="rapidwp-fp09-post-categories">' . __( '<span class="screen-reader-text">Posted in </span>%1$s', 'rapidwp' ) . '</div>', $categories_list ); /* phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped */
        }
    }
}
endif;


if ( ! function_exists( 'rapidwp_style_9_postmeta' ) ) :
function rapidwp_style_9_postmeta() { ?>
    <?php if ( !(rapidwp_get_option('hide_post_author_home')) || !(rapidwp_get_option('hide_posted_date_home')) || !(rapidwp_get_option('hide_comments_link_home')) ) { ?>
    <div class="rapidwp-fp09-post-footer">
    <?php if ( !(rapidwp_get_option('hide_post_author_home')) ) { ?><span class="rapidwp-fp09-post-author rapidwp-fp09-post-meta"><i class="fa fa-user-circle-o" aria-hidden="true"></i>&nbsp;<a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>"><span class="screen-reader-text"><?php esc_html_e('Author: ', 'rapidwp'); ?></span><?php echo esc_html( get_the_author() ); ?></a></span><?php } ?>
    <?php if ( !(rapidwp_get_option('hide_posted_date_home')) ) { ?><span class="rapidwp-fp09-post-date rapidwp-fp09-post-meta"><i class="fa fa-clock-o" aria-hidden="true"></i><span class="screen-reader-text"><?php esc_html_e('Published Date:', 'rapidwp'); ?></span>&nbsp;<?php echo get_the_date(); ?></span><?php } ?>
    <?php if ( !(rapidwp_get_option('hide_comments_link_home')) ) { ?><?php if ( ! post_password_required() && ( comments_open() || get_comments_number() ) ) { ?>
    <span class="rapidwp-fp09-post-comment rapidwp-fp09-post-meta"><i class="fa fa-comments-o" aria-hidden="true"></i>&nbsp;<?php comments_popup_link( sprintf( wp_kses( /* translators: %s: post title */ __( 'Leave a Comment<span class="screen-reader-text"> on %s</span>', 'rapidwp' ), array( 'span' => array( 'class' => array(), ), ) ), get_the_title() ) ); ?></span>
    <?php } ?><?php } ?>
    </div>
    <?php } ?>
<?php }
endif;



if ( ! function_exists( 'rapidwp_style_4_cats' ) ) :
function rapidwp_style_4_cats() {
    if ( 'post' == get_post_type() ) {
        /* translators: used between list items, there is a space */
        $categories_list = get_the_category_list( esc_html__( '&nbsp;', 'rapidwp' ) );
        if ( $categories_list ) {
            /* translators: 1: list of categories. */
            printf( '<div class="rapidwp-fp04-post-categories">' . __( '<span class="screen-reader-text">Posted in </span>%1$s', 'rapidwp' ) . '</div>', $categories_list ); /* phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped */
        }
    }
}
endif;


if ( ! function_exists( 'rapidwp_style_4_postmeta' ) ) :
function rapidwp_style_4_postmeta() { ?>
    <?php if ( !(rapidwp_get_option('hide_post_author_home')) || !(rapidwp_get_option('hide_posted_date_home')) || !(rapidwp_get_option('hide_comments_link_home')) ) { ?>
    <div class="rapidwp-fp04-post-footer">
    <?php if ( !(rapidwp_get_option('hide_post_author_home')) ) { ?><span class="rapidwp-fp04-post-author rapidwp-fp04-post-meta"><i class="fa fa-user-circle-o" aria-hidden="true"></i>&nbsp;<a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>"><span class="screen-reader-text"><?php esc_html_e('Author: ', 'rapidwp'); ?></span><?php echo esc_html( get_the_author() ); ?></a></span><?php } ?>
    <?php if ( !(rapidwp_get_option('hide_posted_date_home')) ) { ?><span class="rapidwp-fp04-post-date rapidwp-fp04-post-meta"><i class="fa fa-clock-o" aria-hidden="true"></i><span class="screen-reader-text"><?php esc_html_e('Published Date:', 'rapidwp'); ?></span>&nbsp;<?php echo get_the_date(); ?></span><?php } ?>
    <?php if ( !(rapidwp_get_option('hide_comments_link_home')) ) { ?><?php if ( ! post_password_required() && ( comments_open() || get_comments_number() ) ) { ?>
    <span class="rapidwp-fp04-post-comment rapidwp-fp04-post-meta"><i class="fa fa-comments-o" aria-hidden="true"></i>&nbsp;<?php comments_popup_link( sprintf( wp_kses( /* translators: %s: post title */ __( 'Leave a Comment<span class="screen-reader-text"> on %s</span>', 'rapidwp' ), array( 'span' => array( 'class' => array(), ), ) ), get_the_title() ) ); ?></span>
    <?php } ?><?php } ?>
    </div>
    <?php } ?>
<?php }
endif;


if ( ! function_exists( 'rapidwp_style_5_cats' ) ) :
function rapidwp_style_5_cats() {
    if ( 'post' == get_post_type() ) {
        /* translators: used between list items, there is a space */
        $categories_list = get_the_category_list( esc_html__( '&nbsp;', 'rapidwp' ) );
        if ( $categories_list ) {
            /* translators: 1: list of categories. */
            printf( '<div class="rapidwp-fp05-post-categories">' . __( '<span class="screen-reader-text">Posted in </span>%1$s', 'rapidwp' ) . '</div>', $categories_list ); /* phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped */
        }
    }
}
endif;


if ( ! function_exists( 'rapidwp_style_5_postmeta' ) ) :
function rapidwp_style_5_postmeta() { ?>
    <?php if ( !(rapidwp_get_option('hide_post_author_home')) || !(rapidwp_get_option('hide_posted_date_home')) || !(rapidwp_get_option('hide_comments_link_home')) ) { ?>
    <div class="rapidwp-fp05-post-footer">
    <?php if ( !(rapidwp_get_option('hide_post_author_home')) ) { ?><span class="rapidwp-fp05-post-author rapidwp-fp05-post-meta"><i class="fa fa-user-circle-o" aria-hidden="true"></i>&nbsp;<a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>"><span class="screen-reader-text"><?php esc_html_e('Author: ', 'rapidwp'); ?></span><?php echo esc_html( get_the_author() ); ?></a></span><?php } ?>
    <?php if ( !(rapidwp_get_option('hide_posted_date_home')) ) { ?><span class="rapidwp-fp05-post-date rapidwp-fp05-post-meta"><i class="fa fa-clock-o" aria-hidden="true"></i><span class="screen-reader-text"><?php esc_html_e('Published Date:', 'rapidwp'); ?></span>&nbsp;<?php echo get_the_date(); ?></span><?php } ?>
    <?php if ( !(rapidwp_get_option('hide_comments_link_home')) ) { ?><?php if ( ! post_password_required() && ( comments_open() || get_comments_number() ) ) { ?>
    <span class="rapidwp-fp05-post-comment rapidwp-fp05-post-meta"><i class="fa fa-comments-o" aria-hidden="true"></i>&nbsp;<?php comments_popup_link( sprintf( wp_kses( /* translators: %s: post title */ __( 'Leave a Comment<span class="screen-reader-text"> on %s</span>', 'rapidwp' ), array( 'span' => array( 'class' => array(), ), ) ), get_the_title() ) ); ?></span>
    <?php } ?><?php } ?>
    </div>
    <?php } ?>
<?php }
endif;


if ( ! function_exists( 'rapidwp_single_cats' ) ) :
function rapidwp_single_cats() {
    if ( 'post' == get_post_type() ) {
        /* translators: used between list items, there is a space */
        $categories_list = get_the_category_list( esc_html__( ', ', 'rapidwp' ) );
        if ( $categories_list ) {
            /* translators: 1: list of categories. */
            printf( '<div class="rapidwp-entry-meta-single rapidwp-entry-meta-single-top"><span class="rapidwp-entry-meta-single-cats"><i class="fa fa-folder-open-o" aria-hidden="true"></i>&nbsp;' . __( '<span class="screen-reader-text">Posted in </span>%1$s', 'rapidwp' ) . '</span></div>', $categories_list ); /* phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped */
        }
    }
}
endif;


if ( ! function_exists( 'rapidwp_single_postmeta' ) ) :
function rapidwp_single_postmeta() { ?>
    <?php global $post; ?>
    <?php if ( !(rapidwp_get_option('hide_post_author')) || !(rapidwp_get_option('hide_posted_date')) || !(rapidwp_get_option('hide_comments_link')) || !(rapidwp_get_option('hide_post_edit')) ) { ?>
    <div class="rapidwp-entry-meta-single">
    <?php if ( !(rapidwp_get_option('hide_post_author')) ) { ?><span class="rapidwp-entry-meta-single-author"><i class="fa fa-user-circle-o" aria-hidden="true"></i>&nbsp;<span class="author vcard" itemscope="itemscope" itemtype="http://schema.org/Person" itemprop="author"><a class="url fn n" href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>"><span class="screen-reader-text"><?php esc_html_e('Author: ', 'rapidwp'); ?></span><?php echo esc_html( get_the_author() ); ?></a></span></span><?php } ?>
    <?php if ( !(rapidwp_get_option('hide_posted_date')) ) { ?><span class="rapidwp-entry-meta-single-date"><i class="fa fa-clock-o" aria-hidden="true"></i><span class="screen-reader-text"><?php esc_html_e('Published Date:', 'rapidwp'); ?></span>&nbsp;<?php echo get_the_date(); ?></span><?php } ?>
    <?php if ( !(rapidwp_get_option('hide_comments_link')) ) { ?><?php if ( ! post_password_required() && ( comments_open() || get_comments_number() ) ) { ?>
    <span class="rapidwp-entry-meta-single-comments"><i class="fa fa-comments-o" aria-hidden="true"></i>&nbsp;<?php comments_popup_link( sprintf( wp_kses( /* translators: %s: post title */ __( 'Leave a Comment<span class="screen-reader-text"> on %s</span>', 'rapidwp' ), array( 'span' => array( 'class' => array(), ), ) ), get_the_title() ) ); ?></span>
    <?php } ?><?php } ?>
    <?php if ( !(rapidwp_get_option('hide_post_edit')) ) { ?><?php edit_post_link( sprintf( wp_kses( /* translators: %s: Name of current post. Only visible to screen readers */ __( 'Edit<span class="screen-reader-text"> %s</span>', 'rapidwp' ), array( 'span' => array( 'class' => array(), ), ) ), get_the_title() ), '<span class="edit-link">&nbsp;&nbsp;<i class="fa fa-pencil" aria-hidden="true"></i> ', '</span>' ); ?><?php } ?>
    </div>
    <?php } ?>
<?php }
endif;