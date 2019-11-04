<?php
/**
* The template for displaying the footer
*
* @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
*
* @package RapidWP WordPress Theme
* @copyright Copyright (C) 2018 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/
?>

</div>

</div><!--/#rapidwp-content-wrapper -->
</div><!--/#rapidwp-wrapper -->


<?php if ( !(rapidwp_get_option('hide_footer_widgets')) ) { ?>
<?php if ( is_active_sidebar( 'rapidwp-footer-1' ) || is_active_sidebar( 'rapidwp-footer-2' ) || is_active_sidebar( 'rapidwp-footer-3' ) || is_active_sidebar( 'rapidwp-footer-4' ) || is_active_sidebar( 'rapidwp-top-footer' ) || is_active_sidebar( 'rapidwp-bottom-footer' ) ) : ?>
<div class="rapidwp-outer-wrapper">
<div class='clearfix' id='rapidwp-footer-blocks' itemscope='itemscope' itemtype='http://schema.org/WPFooter' role='contentinfo'>
<div class='rapidwp-container clearfix'>

<?php if ( is_active_sidebar( 'rapidwp-top-footer' ) ) : ?>
<div class='clearfix'>
<div class='rapidwp-top-footer-block'>
<?php dynamic_sidebar( 'rapidwp-top-footer' ); ?>
</div>
</div>
<?php endif; ?>

<?php if ( is_active_sidebar( 'rapidwp-footer-1' ) || is_active_sidebar( 'rapidwp-footer-2' ) || is_active_sidebar( 'rapidwp-footer-3' ) || is_active_sidebar( 'rapidwp-footer-4' ) ) : ?>
<div class='rapidwp-footer-block-cols clearfix'>

<div class="rapidwp-footer-block-col <?php echo esc_attr( rapidwp_footer_grid_cols() ); ?>" id="rapidwp-footer-block-1">
<?php dynamic_sidebar( 'rapidwp-footer-1' ); ?>
</div>

<div class="rapidwp-footer-block-col <?php echo esc_attr( rapidwp_footer_grid_cols() ); ?>" id="rapidwp-footer-block-2">
<?php dynamic_sidebar( 'rapidwp-footer-2' ); ?>
</div>

<div class="rapidwp-footer-block-col <?php echo esc_attr( rapidwp_footer_grid_cols() ); ?>" id="rapidwp-footer-block-3">
<?php dynamic_sidebar( 'rapidwp-footer-3' ); ?>
</div>

<div class="rapidwp-footer-block-col <?php echo esc_attr( rapidwp_footer_grid_cols() ); ?>" id="rapidwp-footer-block-4">
<?php dynamic_sidebar( 'rapidwp-footer-4' ); ?>
</div>

</div>
<?php endif; ?>

<?php if ( is_active_sidebar( 'rapidwp-bottom-footer' ) ) : ?>
<div class='clearfix'>
<div class='rapidwp-bottom-footer-block'>
<?php dynamic_sidebar( 'rapidwp-bottom-footer' ); ?>
</div>
</div>
<?php endif; ?>

</div>
</div><!--/#rapidwp-footer-blocks-->
</div>
<?php endif; ?>
<?php } ?>


<div class="rapidwp-outer-wrapper">
<div class='clearfix' id='rapidwp-footer'>
<div class='rapidwp-foot-wrap rapidwp-container'>

<?php if ( rapidwp_get_option('footer_text') ) : ?>
  <p class='rapidwp-copyright'><?php echo esc_html(rapidwp_get_option('footer_text')); ?></p>
<?php else : ?>
  <p class='rapidwp-copyright'><?php /* translators: %s: Year and site name. */ printf( esc_html__( 'Copyright &copy; %s', 'rapidwp' ), esc_html(date_i18n(__('Y','rapidwp'))) . ' ' . esc_html(get_bloginfo( 'name' ))  ); ?></p>
<?php endif; ?>
<p class='rapidwp-credit'><a href="<?php echo esc_url( 'https://themesdna.com/' ); ?>"><?php /* translators: %s: Theme author. */ printf( esc_html__( 'Design by %s', 'rapidwp' ), 'ThemesDNA.com' ); ?></a></p>

</div>
</div><!--/#rapidwp-footer -->
</div>

<button class="rapidwp-scroll-top" title="<?php esc_attr_e('Scroll to Top','rapidwp'); ?>"><span class="fa fa-arrow-up" aria-hidden="true"></span><span class="screen-reader-text"><?php esc_html__('Scroll to Top', 'rapidwp'); ?></span></button>

<?php wp_footer(); ?>
</body>
</html>