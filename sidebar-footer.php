<?php
/**
 * The Footer widget areas.
 *
 * @package WordPress
 * @subpackage Subrise
 * @since Subrise 0.1
 */
?>

<?php
	/* The footer widget area is triggered if any of the areas
	 * have widgets. So let's check that first.
	 *
	 * If none of the sidebars have widgets, then let's bail early.
	 */
	if (   ! is_active_sidebar( 'first-footer-widget-area'  )
		&& ! is_active_sidebar( 'second-footer-widget-area' )
		&& ! is_active_sidebar( 'third-footer-widget-area'  )
		&& ! is_active_sidebar( 'fourth-footer-widget-area' )
	)
		return;
	// If we get this far, we have widgets. Let do this.
	
	// Sammy: I personally want all my widget areas to be loaded. 
?>

	<div id="footer-widget-area" role="complementary">
		<div id="footerOne" class="column">
			<?php dynamic_sidebar( 'first-footer-widget-area' ); ?>
		</div><!-- #footerOne .column -->

		<div id="footerTwo" class="column">
			<?php dynamic_sidebar( 'second-footer-widget-area' ); ?>
		</div><!-- #footerTwo .column -->

		<div id="footerThree" class="column">
			<?php dynamic_sidebar( 'third-footer-widget-area' ); ?>
		</div><!-- #footerThree .column -->

		<div id="footerFour" class="column">
			<?php dynamic_sidebar( 'fourth-footer-widget-area' ); ?>
		</div><!-- #footerFour .column -->

	</div><!-- #footer-widget-area -->
