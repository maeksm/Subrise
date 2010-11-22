<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head profile="http://gmpg.org/xfn/11">
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
	<meta name="description" content="<?php bloginfo('description'); ?>" />
	<title><?php bloginfo('name'); ?> &raquo; <?php echo $this->g_opt['mamo_pagetitle']; ?></title>
	
	<style type="text/css">
		<!--
		* { margin: 0; 	padding: 0; }
		body { font-family: Georgia, Arial, Helvetica, Sans Serif; font-size: 65.5%; }
		a { color: #08658F; }
		a:hover { color: #0092BF; }
		#header h2
		{
			background:url(<?php bloginfo('template_url'); ?>/images/subrise-logo.png) no-repeat;
			width:294px;
			height:300px;
			margin:0 auto;
		}
		
		#header h2 a
		{
			display:block;
			width:294px;
			height:300px;
			text-indent:-9000px;
		}
		#content { font-size: 150%; width:80%; margin:0 auto; padding: 0; text-align: center; }
		#content p { font-size: 1em; padding: .8em 0; }
		h1, h2 { color: #08658F; }
		h1 { font-size: 300%; padding: .5em 0; }
		#menu { position: absolute; font-family: Arial, Helvetica, Sans Serif; bottom: 2em; width: 100%; }
		#menu #pluginauthor { padding-left: .3em; }
		#menu #admin { float: right; padding-right: .3em; }
		-->
	</style>
	
</head>

<body>

	<div id="header">
		<h2><a title="<?php bloginfo('name'); ?>" href="<?php echo get_settings('home'); ?>"><?php bloginfo('name'); ?></a></h2>
	</div>
	
	<div id="content">
		<?php echo $this->mamo_template_tag_message(); ?>		
	</div>

	<div id="menu">

		<p id="admin"><?php	echo $this->mamo_template_tag_login_logout(); ?></p>

	</div>

</body>
</html>