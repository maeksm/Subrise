<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Subrise
 * @since Subrise 0.1
 */
?><!DOCTYPE html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ --> 
<!--[if lt IE 7 ]> <html <?php language_attributes(); ?> class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html <?php language_attributes(); ?> class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html <?php language_attributes(); ?> class="no-js ie8"> <![endif]-->
<!--[if IE 9 ]>    <html <?php language_attributes(); ?> class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html <?php language_attributes(); ?>class="no-js"> <!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'twentyten' ), max( $paged, $page ) );

	?></title>
	
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="shortcut icon" href="<?php echo bloginfo('template_url'); ?>/images/des/favicon.png" />
<link rel="apple-touch-icon" href="<?php bloginfo('template_url'); ?>/images/des/apple-touch-icon.png" />

<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<script src="<?php bloginfo('template_url'); ?>/js/libs/modernizr-1.6.min.js"></script>

<?php
	/* We add some JavaScript to pages with the comment form
	 * to support sites with threaded comments (when in use).
	 */
	if ( is_singular() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );

	/* Always have wp_head() just before the closing </head>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to add elements to <head> such
	 * as styles, scripts, and meta tags.
	 */
	wp_head();
?>
</head>

<body <?php body_class(); ?>>

	<div id="branding" role="banner">
		<h1 id="logo">
				<a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
		</h1>
	</div><!-- /branding -->
	
	<div id="masthead">	
		<div id="headerOne" class="column">
			<div class="widget-container widget_twitter">
				<h3 class="widget-title"><a href="http://twitter.com/SubriseGames">Twitter</a></h3>
				<div class="srw_text">
				<?php	if ($xml=file_get_contents('http://twitter.com/users/show.xml?screen_name=SubriseGames'))
						{
							if (preg_match('/followers_count>(.*)</', $xml, $match) != 0)
								echo '<p><em>' . $match[1] . '</em> followers</p>';
						}
				?>
				</div>
				<div class="srw_link"><a href="http://twitter.com/SubriseGames">> Follow us on Twitter</a></div>
			</div>
		</div><!-- /column -->	
		
		<div id="headerTwo" class="column"> 
			<div id="srw_rss-3" class="widget-container srw_rss">
				<h3 class="widget-title"><a href="http://subrise.dev/feeds">RSS Feed</a></h3>
				<div class="srw_text">Subscribe to our RSS feed to receive all the latest news and blog updates.</div>
				<div class="srw_link"><a href="http://subrise.dev/feed">> Subscribe</a></div>
			</div>				
		</div><!-- #headerTwo .column --> 

		<div id="headerThree" class="column"> 
			<div id="srw_facebook-3" class="widget-container srw_facebook">
				<h3 class="widget-title"><a href="#">Facebook</a></h3>
				<div class="srw_text">Check us out on Facebook for all kinds of updates, pictures and more.</div>
				<div class="srw_link"><a href="#">> Become our fan</a></div>
			</div>
		</div><!-- #headerThree .column --> 

		<div id="headerFour" class="column"> 
			<div id="srw_highlights-3" class="widget-container srw_highlights"> 
				<h3 class="widget-title">Search</h3> 
				<div class="srw_text"><?php get_search_form(); ?></div> 
			</div> 
		</div><!-- #headerFour .column -->
	</div><!-- #masthead -->


	<div id="main">
