<?php
/**
 * The Header widget areas.
 *
 * @package WordPress
 * @subpackage Subrise
 * @since Subrise 0.1
 */
?>
<?php
	/* The header widget area is triggered if any of the areas
	 * have widgets. So let's check that first.
	 *
	 * If none of the sidebars have widgets, then let's bail early.
	 */
	if (   ! is_active_sidebar( 'first-header-widget-area'  )
		&& ! is_active_sidebar( 'second-header-widget-area' )
		&& ! is_active_sidebar( 'third-header-widget-area'  )
		&& ! is_active_sidebar( 'fourth-header-widget-area' )
	)
		return;
	// If we get this far, we have widgets. Let do this.
	
	// Sammy: I personally want all my widget areas to be loaded. 
?>

	<div id="header-widget-area" role="complementary">
		<div id="headerOne" class="column">
			<div class="widget-container widget_twitter">
				<h3 class="widget-title"><a href="http://twitter.com/SubriseGames">Twitter</a></h3>
				<div class="srw_text">
				<?php	//if ($xml=file_get_contents('http://twitter.com/users/show.xml?screen_name=SubriseGames'))
						//{
							//if (preg_match('/followers_count>(.*)</', $xml, $match) != 0)
							//	echo '<p><em>' . $match[1] . '</em> followers</p>';
						//}
				?>
				</div>
				<div class="srw_link"><a href="http://twitter.com/SubriseGames">> Follow us on Twitter</a></div>
			</div>
			<?php dynamic_sidebar( 'first-header-widget-area' ); ?>
		</div><!-- #headerOne .column -->

		<div id="headerTwo" class="column">
			<?php dynamic_sidebar( 'second-header-widget-area' ); ?>
		</div><!-- #headerTwo .column -->

		<div id="headerThree" class="column">
			<?php dynamic_sidebar( 'third-header-widget-area' ); ?>
		</div><!-- #headerThree .column -->

		<div id="headerFour" class="column">
			<?php dynamic_sidebar( 'fourth-header-widget-area' ); ?>
		</div><!-- #headerFour .column -->

	</div><!-- #header-widget-area -->
