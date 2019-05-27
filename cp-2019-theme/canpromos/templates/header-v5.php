<?php
/**
 * Header-v5 template.
 *
 * @author     ThemeFusion
 * @copyright  (c) Copyright by ThemeFusion
 * @link       http://theme-fusion.com
 * @package    Avada
 * @subpackage Core
 */

// Do not allow directly accessing this file.
if ( ! defined( 'ABSPATH' ) ) {
	exit( 'Direct script access denied.' );
}
?>
<div class="fusion-header-sticky-height"></div>
<div class="fusion-sticky-header-wrapper"> <!-- start fusion sticky header wrapper -->
	<div class="fusion-header">
		<div class="fusion-row">		
			<?php if ( 'flyout' === Avada()->settings->get( 'mobile_menu_design' ) ) : ?>
				<div class="fusion-header-has-flyout-menu-content">
			<?php endif; ?>
			<?php avada_logo(); ?>

			
			
			<div class="header-search">
			   <?php //get_search_form(); ?>
               
               <?php //echo do_shortcode('[yith_woocommerce_ajax_search]');?>

			   <?php echo do_shortcode('[woocommerce_product_search]');?>

			   <?php //echo do_shortcode('[yith_wcwl_wishlist]'); ?>
			</div>

			<div class="login-section">
			<?php if ( is_user_logged_in() ) { ?>
				<!-- <a href="<?php //echo get_permalink( get_option('woocommerce_myaccount_page_id') ); ?>" title="<?php //_e('My Account','woothemes'); ?>"><?php //_e('My Account','woothemes'); ?></a> -->
			<?php } 
			else { ?>
				<a class="login-links" href="<?php echo get_permalink( get_option('woocommerce_myaccount_page_id') ); ?>" title="<?php _e('Sign In / Register Your Account','woothemes'); ?>"><?php _e('Sign In / Register Your Account','woothemes'); ?></a>
			<?php } ?>
			</div>


			<!-- <div class="cart-totals">
				<a class="cart-customlocation" href="<?php //echo wc_get_cart_url(); ?>" title="<?php //_e( 'View your shopping cart' ); ?>"><?php //echo sprintf ( _n( '%d item', '%d items', WC()->cart->get_cart_contents_count() ), WC()->cart->get_cart_contents_count() ); ?> - <?php //echo WC()->cart->get_cart_total(); ?></a>
			</div> -->

			<div class="currency-switcher">
			<?php echo do_shortcode('[woocs]'); ?>
			</div>


			<?php if ( 'flyout' === Avada()->settings->get( 'mobile_menu_design' ) ) : ?>
				<?php get_template_part( 'templates/menu-mobile-flyout' ); ?>
			<?php else : ?>
				<?php get_template_part( 'templates/menu-mobile-modern' ); ?>
			<?php endif; ?>

			<?php if ( 'flyout' === Avada()->settings->get( 'mobile_menu_design' ) ) : ?>
				</div>
			<?php endif; ?>
		</div>
	</div>