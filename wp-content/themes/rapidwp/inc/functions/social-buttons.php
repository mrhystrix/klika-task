<?php
/**
* Social buttons
*
* @package RapidWP WordPress Theme
* @copyright Copyright (C) 2018 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/

function rapidwp_header_social_buttons() { ?>

<div class='rapidwp-top-social-icons'>
    <?php if ( rapidwp_get_option('twitterlink') ) : ?>
            <a href="<?php echo esc_url( rapidwp_get_option('twitterlink') ); ?>" target="_blank" rel="nofollow" class="rapidwp-social-icon-twitter" title="<?php esc_attr_e('Twitter','rapidwp'); ?>"><i class="fa fa-twitter" aria-hidden="true"></i></a><?php endif; ?>
    <?php if ( rapidwp_get_option('facebooklink') ) : ?>
            <a href="<?php echo esc_url( rapidwp_get_option('facebooklink') ); ?>" target="_blank" rel="nofollow" class="rapidwp-social-icon-facebook" title="<?php esc_attr_e('Facebook','rapidwp'); ?>"><i class="fa fa-facebook" aria-hidden="true"></i></a><?php endif; ?>
    <?php if ( rapidwp_get_option('googlelink') ) : ?>
            <a href="<?php echo esc_url( rapidwp_get_option('googlelink') ); ?>" target="_blank" rel="nofollow" class="rapidwp-social-icon-google-plus" title="<?php esc_attr_e('Google Plus','rapidwp'); ?>"><i class="fa fa-google-plus" aria-hidden="true"></i></a><?php endif; ?>
    <?php if ( rapidwp_get_option('pinterestlink') ) : ?>
            <a href="<?php echo esc_url( rapidwp_get_option('pinterestlink') ); ?>" target="_blank" rel="nofollow" class="rapidwp-social-icon-pinterest" title="<?php esc_attr_e('Pinterest','rapidwp'); ?>"><i class="fa fa-pinterest" aria-hidden="true"></i></a><?php endif; ?>
    <?php if ( rapidwp_get_option('linkedinlink') ) : ?>
            <a href="<?php echo esc_url( rapidwp_get_option('linkedinlink') ); ?>" target="_blank" rel="nofollow" class="rapidwp-social-icon-linkedin" title="<?php esc_attr_e('Linkedin','rapidwp'); ?>"><i class="fa fa-linkedin" aria-hidden="true"></i></a><?php endif; ?>
    <?php if ( rapidwp_get_option('instagramlink') ) : ?>
            <a href="<?php echo esc_url( rapidwp_get_option('instagramlink') ); ?>" target="_blank" rel="nofollow" class="rapidwp-social-icon-instagram" title="<?php esc_attr_e('Instagram','rapidwp'); ?>"><i class="fa fa-instagram" aria-hidden="true"></i></a><?php endif; ?>
    <?php if ( rapidwp_get_option('flickrlink') ) : ?>
            <a href="<?php echo esc_url( rapidwp_get_option('flickrlink') ); ?>" target="_blank" rel="nofollow" class="rapidwp-social-icon-flickr" title="<?php esc_attr_e('Flickr','rapidwp'); ?>"><i class="fa fa-flickr" aria-hidden="true"></i></a><?php endif; ?>
    <?php if ( rapidwp_get_option('youtubelink') ) : ?>
            <a href="<?php echo esc_url( rapidwp_get_option('youtubelink') ); ?>" target="_blank" rel="nofollow" class="rapidwp-social-icon-youtube" title="<?php esc_attr_e('Youtube','rapidwp'); ?>"><i class="fa fa-youtube" aria-hidden="true"></i></a><?php endif; ?>
    <?php if ( rapidwp_get_option('vimeolink') ) : ?>
            <a href="<?php echo esc_url( rapidwp_get_option('vimeolink') ); ?>" target="_blank" rel="nofollow" class="rapidwp-social-icon-vimeo" title="<?php esc_attr_e('Vimeo','rapidwp'); ?>"><i class="fa fa-vimeo" aria-hidden="true"></i></a><?php endif; ?>
    <?php if ( rapidwp_get_option('soundcloudlink') ) : ?>
            <a href="<?php echo esc_url( rapidwp_get_option('soundcloudlink') ); ?>" target="_blank" rel="nofollow" class="rapidwp-social-icon-soundcloud" title="<?php esc_attr_e('SoundCloud','rapidwp'); ?>"><i class="fa fa-soundcloud" aria-hidden="true"></i></a><?php endif; ?>
    <?php if ( rapidwp_get_option('lastfmlink') ) : ?>
            <a href="<?php echo esc_url( rapidwp_get_option('lastfmlink') ); ?>" target="_blank" rel="nofollow" class="rapidwp-social-icon-lastfm" title="<?php esc_attr_e('Lastfm','rapidwp'); ?>"><i class="fa fa-lastfm" aria-hidden="true"></i></a><?php endif; ?>
    <?php if ( rapidwp_get_option('githublink') ) : ?>
            <a href="<?php echo esc_url( rapidwp_get_option('githublink') ); ?>" target="_blank" rel="nofollow" class="rapidwp-social-icon-github" title="<?php esc_attr_e('Github','rapidwp'); ?>"><i class="fa fa-github" aria-hidden="true"></i></a><?php endif; ?>
    <?php if ( rapidwp_get_option('bitbucketlink') ) : ?>
            <a href="<?php echo esc_url( rapidwp_get_option('bitbucketlink') ); ?>" target="_blank" rel="nofollow" class="rapidwp-social-icon-bitbucket" title="<?php esc_attr_e('Bitbucket','rapidwp'); ?>"><i class="fa fa-bitbucket" aria-hidden="true"></i></a><?php endif; ?>
    <?php if ( rapidwp_get_option('tumblrlink') ) : ?>
            <a href="<?php echo esc_url( rapidwp_get_option('tumblrlink') ); ?>" target="_blank" rel="nofollow" class="rapidwp-social-icon-tumblr" title="<?php esc_attr_e('Tumblr','rapidwp'); ?>"><i class="fa fa-tumblr" aria-hidden="true"></i></a><?php endif; ?>
    <?php if ( rapidwp_get_option('digglink') ) : ?>
            <a href="<?php echo esc_url( rapidwp_get_option('digglink') ); ?>" target="_blank" rel="nofollow" class="rapidwp-social-icon-digg" title="<?php esc_attr_e('Digg','rapidwp'); ?>"><i class="fa fa-digg" aria-hidden="true"></i></a><?php endif; ?>
    <?php if ( rapidwp_get_option('deliciouslink') ) : ?>
            <a href="<?php echo esc_url( rapidwp_get_option('deliciouslink') ); ?>" target="_blank" rel="nofollow" class="rapidwp-social-icon-delicious" title="<?php esc_attr_e('Delicious','rapidwp'); ?>"><i class="fa fa-delicious" aria-hidden="true"></i></a><?php endif; ?>
    <?php if ( rapidwp_get_option('stumblelink') ) : ?>
            <a href="<?php echo esc_url( rapidwp_get_option('stumblelink') ); ?>" target="_blank" rel="nofollow" class="rapidwp-social-icon-stumbleupon" title="<?php esc_attr_e('Stumbleupon','rapidwp'); ?>"><i class="fa fa-stumbleupon" aria-hidden="true"></i></a><?php endif; ?>
    <?php if ( rapidwp_get_option('redditlink') ) : ?>
            <a href="<?php echo esc_url( rapidwp_get_option('redditlink') ); ?>" target="_blank" rel="nofollow" class="rapidwp-social-icon-reddit" title="<?php esc_attr_e('Reddit','rapidwp'); ?>"><i class="fa fa-reddit" aria-hidden="true"></i></a><?php endif; ?>
    <?php if ( rapidwp_get_option('dribbblelink') ) : ?>
            <a href="<?php echo esc_url( rapidwp_get_option('dribbblelink') ); ?>" target="_blank" rel="nofollow" class="rapidwp-social-icon-dribbble" title="<?php esc_attr_e('Dribbble','rapidwp'); ?>"><i class="fa fa-dribbble" aria-hidden="true"></i></a><?php endif; ?>
    <?php if ( rapidwp_get_option('behancelink') ) : ?>
            <a href="<?php echo esc_url( rapidwp_get_option('behancelink') ); ?>" target="_blank" rel="nofollow" class="rapidwp-social-icon-behance" title="<?php esc_attr_e('Behance','rapidwp'); ?>"><i class="fa fa-behance" aria-hidden="true"></i></a><?php endif; ?>
    <?php if ( rapidwp_get_option('vklink') ) : ?>
            <a href="<?php echo esc_url( rapidwp_get_option('vklink') ); ?>" target="_blank" rel="nofollow" class="rapidwp-social-icon-vk" title="<?php esc_attr_e('VK','rapidwp'); ?>"><i class="fa fa-vk" aria-hidden="true"></i></a><?php endif; ?>
    <?php if ( rapidwp_get_option('codepenlink') ) : ?>
            <a href="<?php echo esc_url( rapidwp_get_option('codepenlink') ); ?>" target="_blank" rel="nofollow" class="rapidwp-social-icon-codepen" title="<?php esc_attr_e('Codepen','rapidwp'); ?>"><i class="fa fa-codepen" aria-hidden="true"></i></a><?php endif; ?>
    <?php if ( rapidwp_get_option('jsfiddlelink') ) : ?>
            <a href="<?php echo esc_url( rapidwp_get_option('jsfiddlelink') ); ?>" target="_blank" rel="nofollow" class="rapidwp-social-icon-jsfiddle" title="<?php esc_attr_e('JSFiddle','rapidwp'); ?>"><i class="fa fa-jsfiddle" aria-hidden="true"></i></a><?php endif; ?>
    <?php if ( rapidwp_get_option('stackoverflowlink') ) : ?>
            <a href="<?php echo esc_url( rapidwp_get_option('stackoverflowlink') ); ?>" target="_blank" rel="nofollow" class="rapidwp-social-icon-stackoverflow" title="<?php esc_attr_e('Stack Overflow','rapidwp'); ?>"><i class="fa fa-stack-overflow" aria-hidden="true"></i></a><?php endif; ?>
    <?php if ( rapidwp_get_option('stackexchangelink') ) : ?>
            <a href="<?php echo esc_url( rapidwp_get_option('stackexchangelink') ); ?>" target="_blank" rel="nofollow" class="rapidwp-social-icon-stackexchange" title="<?php esc_attr_e('Stack Exchange','rapidwp'); ?>"><i class="fa fa-stack-exchange" aria-hidden="true"></i></a><?php endif; ?>
    <?php if ( rapidwp_get_option('bsalink') ) : ?>
            <a href="<?php echo esc_url( rapidwp_get_option('bsalink') ); ?>" target="_blank" rel="nofollow" class="rapidwp-social-icon-buysellads" title="<?php esc_attr_e('BuySellAds','rapidwp'); ?>"><i class="fa fa-buysellads" aria-hidden="true"></i></a><?php endif; ?>
    <?php if ( rapidwp_get_option('slidesharelink') ) : ?>
            <a href="<?php echo esc_url( rapidwp_get_option('slidesharelink') ); ?>" target="_blank" rel="nofollow" class="rapidwp-social-icon-slideshare" title="<?php esc_attr_e('SlideShare','rapidwp'); ?>"><i class="fa fa-slideshare" aria-hidden="true"></i></a><?php endif; ?>
    <?php if ( rapidwp_get_option('skypeusername') ) : ?>
            <a href="skype:<?php echo esc_html( rapidwp_get_option('skypeusername') ); ?>?chat" class="rapidwp-social-icon-skype" title="<?php esc_attr_e('Skype','rapidwp'); ?>"><i class="fa fa-skype" aria-hidden="true"></i></a><?php endif; ?>
    <?php if ( rapidwp_get_option('emailaddress') ) : ?>
            <a href="mailto:<?php echo esc_html( rapidwp_get_option('emailaddress') ); ?>" class="rapidwp-social-icon-email" title="<?php esc_attr_e('Email Us','rapidwp'); ?>"><i class="fa fa-envelope" aria-hidden="true"></i></a><?php endif; ?>
    <?php if ( rapidwp_get_option('rsslink') ) : ?>
            <a href="<?php echo esc_url( rapidwp_get_option('rsslink') ); ?>" target="_blank" rel="nofollow" class="rapidwp-social-icon-rss" title="<?php esc_attr_e('RSS','rapidwp'); ?>"><i class="fa fa-rss" aria-hidden="true"></i></a><?php endif; ?>
    <?php if ( !(rapidwp_get_option('hide_header_search_button')) ) { ?><a href="<?php echo esc_url( '#' ); ?>" title="<?php esc_attr_e('Search','rapidwp'); ?>" class="rapidwp-social-icon-search"><i class="fa fa-search" aria-hidden="true"></i></a><?php } ?>
    <?php if ( !(rapidwp_get_option('hide_header_login_button')) ) { ?><?php if (is_user_logged_in()) : ?><a href="<?php echo esc_url( wp_logout_url( get_permalink() ) ); ?>" title="<?php esc_attr_e( 'Logout', 'rapidwp' ); ?>" class="rapidwp-social-icon-login"><i class="fa fa-sign-out" aria-hidden="true"></i></a><?php else : ?><a href="<?php echo esc_url( wp_login_url( get_permalink() ) ); ?>" title="<?php esc_attr_e( 'Login / Register', 'rapidwp' ); ?>" class="rapidwp-social-icon-login"><i class="fa fa-sign-in" aria-hidden="true"></i></a><?php endif;?><?php } ?>
</div>

<?php }