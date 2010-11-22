<!doctype html>  

<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ --> 
<!--[if lt IE 7 ]> <html lang="en" class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
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

	<!--  Mobile viewport optimized: j.mp/bplateviewport -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />

	<!-- Place favicon.ico & apple-touch-icon.png in the root of your domain and delete these references -->
	<link rel="shortcut icon" href="<?php echo bloginfo('template_url'); ?>/images/des/favicon.png" />
	<link rel="apple-touch-icon" href="/apple-touch-icon.png" />


	<!-- CSS : implied media="all" -->
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/front-page.css" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

	<!-- Uncomment if you are specifically targeting less enabled mobile browsers
	<link rel="stylesheet" media="handheld" href="css/handheld.css?v=2">  -->
	
	<!-- All JavaScript at the bottom, except for Modernizr which enables HTML5 elements & feature detects -->
	<script src="<?php bloginfo('template_url'); ?>/js/libs/modernizr-1.6.min.js"></script>
</head>

<body>
	<div id="branding">
		<h1 id="logo"><a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>

		<?php $args = array(
			'child_of' => 2,
			'sort_order' => 'ASC',
			'sort_column' => 'menu_order',
			'hierarchical' => 1,
			//'exclude' => ,
			//'include' => ,
			//'meta_key' => ,
			//'meta_value' => ,
			//'authors' => ,
			'parent' => -1,
			//'exclude_tree' => ,
			//'number' => ,
			'offset' => 0 ); ?>

		<?php $arrayPages = get_pages($args); ?>
		<?php if ( ! empty($arrayPages) ): ?>
			<ul id="nav">
				<?php $i = 0; ?>
				<?php $class = ' class="active"';?>
			<?php foreach ($arrayPages as $tPage): ?>
				<li><a id="nav-<?=$i?>" href="<?=$tPage->guid?>"<?=$class?>><?=$tPage->post_title?></a></li>
				<?php $i++; ?>
				<?php $class = ''; ?>
			<?php endforeach; ?>
			</ul>
		<?php endif; ?>
	</div><!-- /branding -->

	<?php if ( ! empty($arrayPages) ): ?>
		<ul id="contentCarousel">
			<a href="#" id="btnLeft">&larr;</a>
			<a href="#" id="btnRight">&rarr;</a>
			<?php foreach ($arrayPages as $tPage): ?>
				<li id="rbBox-<?=$tPage->post_name?>">
					<div class="content">
						<?=apply_filters('the_content', $tPage->post_content)?>
					</div>
				</li>
			<?php endforeach; ?>
		</ul>
	<?php endif; ?>
		
		
	<div id="footer">
		<div class="column">
		</div><!-- /column -->
		
		<div class="column">
			<h1 class="rss">RSS Feed</h1>
			<p>Subscribe to our RSS feed to receive all the latest news and blog updates.</p>
			<p><a href="#">&gt; Subscribe</a></p>
			
			<h1 class="facebook">Facebook</h1>
			<p>Check us out on Facebook for all kinds of updates, behind the scene pictures and more.</p>
			<p><a href="#">&gt; Become our fan</a></p>
		</div><!-- /column -->
		
		<div class="column">
			<h1 class="blog"><a href="<?=get_permalink(get_option('page_for_posts'))?>">Developers Blog</a></h1>
			<p>Read our latest game developments and news on our Developers Blog.</p>
			<p><a href="<?=get_permalink(get_option('page_for_posts'))?>">&gt; Check our blog</a></p>
		</div><!-- /column -->
		
		<div class="column">
			<h1 class="twitter"><a href="http://twitter.com/SubriseGames">Twitter</a></h1>
		</div><!-- /column -->
	</div><!-- /footer -->



	<!-- Javascript at the bottom for fast page loading -->

	<!-- Grab Google CDN's jQuery. fall back to local if necessary -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.js"></script>
	<script>!window.jQuery && document.write(unescape('%3Cscript src="<?php bloginfo('template_url'); ?>/js/libs/jquery-1.4.2.js"%3E%3C/script%3E'))</script>
	
	<!-- roundabout: http://fredhq.com/projects/roundabout -->
	<script src="<?php bloginfo('template_url'); ?>/js/libs/jquery.roundabout.js" type="text/javascript" charset="utf-8"></script>
	
	<!-- scripts concatenated and minified via ant build script-->
	<script src="<?php bloginfo('template_url'); ?>/js/plugins.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/js/script.js"></script>
	<!-- end concatenated and minified scripts-->

	
</body>
</html>