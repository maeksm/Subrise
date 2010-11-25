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
?>

			<div id="footer-widget-area" role="complementary">

<?php //if ( is_active_sidebar( 'first-footer-widget-area' ) ) : ?>
				<div id="footerOne" class="column">
					<?php dynamic_sidebar( 'first-footer-widget-area' ); ?>
				</div><!-- #footerOne .column -->
<?php //endif; ?>

<?php //if ( is_active_sidebar( 'second-footer-widget-area' ) ) : ?>
				<div id="footerTwo" class="column">
					<?php dynamic_sidebar( 'second-footer-widget-area' ); ?>
				</div><!-- #footerTwo .column -->
<?php //endif; ?>

<?php //if ( is_active_sidebar( 'third-footer-widget-area' ) ) : ?>
				<div id="footerThree" class="column">
					<div id="srw_highlights-3" class="widget-container srw_highlights">
						<h3 class="widget-title"><a href="<?=get_permalink(get_option('page_for_posts'))?>">Developers Blog</a></h3>
						<div class="srw_text">Read our latest game developments and news on our Developers Blog.</div>
						<div class="srw_link"><a href="<?=get_permalink(get_option('page_for_posts'))?>">> Check our blog</a></div>
					</div>
					
					<?php dynamic_sidebar( 'third-footer-widget-area' ); ?>
				</div><!-- #footerThree .column -->
<?php //endif; ?>

<?php //if ( is_active_sidebar( 'fourth-footer-widget-area' ) ) : ?>
				<div id="footerFour" class="column">
					<?php dynamic_sidebar( 'fourth-footer-widget-area' ); ?>
				</div><!-- #footerFour .column -->
<?php //endif; ?>

			</div><!-- #footer-widget-area -->
