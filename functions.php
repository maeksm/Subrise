<?php
/**
 * Subrise functions and definitions
 *
 * This theme is our first Wordpress theme, the code is mostly based on Twenty Ten
 *
 *
 * <code>
 * add_action( 'after_setup_theme', 'my_child_theme_setup' );
 * function my_child_theme_setup() {
 *     // We are providing our own filter for excerpt_length (or using the unfiltered value)
 *     remove_filter( 'excerpt_length', 'twentyten_excerpt_length' );
 *     ...
 * }
 * </code>
 *
 * For more information on hooks, actions, and filters, see http://codex.wordpress.org/Plugin_API.
 *
 * @package WordPress
 * @subpackage Subrise
 * @since Subrise 0.1
 */


/** Tell WordPress to run twentyten_setup() when the 'after_setup_theme' hook is run. */
add_action( 'after_setup_theme', 'subrise_setup' );

if ( ! function_exists( 'subrise_setup' ) ):
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which runs
 * before the init hook. The init hook is too late for some features, such as indicating
 * support post thumbnails.
 *
 *
 * @uses add_editor_style() To style the visual editor.
 *
 * @since Subrise 0.1
 */
function subrise_setup() {

	// This theme styles the visual editor with editor-style.css to match the theme style.
	add_editor_style();
}
endif;


/**
 * Register widgetized areas, including two sidebars and four widget-ready columns in the footer (frontpage).
 * And four widget-ready columns in the header (blog page)
 *
 * @since Subrise 0.1
 * @uses register_sidebar
 */
function subrise_widgets_init() {
	// Area 1, located at the right side
	register_sidebar( array(
		'name' => __( 'Primary Widget Area', 'subrise' ),
		'id' => 'primary-widget-area',
		'description' => __( 'The primary widget area', 'subrise' ),
		'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );

	// Area 2, located to the left of the Primary Widget Area in the sidebar. 
	register_sidebar( array(
		'name' => __( 'Secondary Widget Area', 'subrise' ),
		'id' => 'secondary-widget-area',
		'description' => __( 'The secondary widget area', 'subrise' ),
		'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );

	// Area 3, located in the footer. 
	register_sidebar( array(
		'name' => __( 'First Footer Widget Area', 'subrise' ),
		'id' => 'first-footer-widget-area',
		'description' => __( 'The first footer widget area', 'subrise' ),
		'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );

	// Area 4, located in the footer.
	register_sidebar( array(
		'name' => __( 'Second Footer Widget Area', 'subrise' ),
		'id' => 'second-footer-widget-area',
		'description' => __( 'The second footer widget area', 'subrise' ),
		'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );

	// Area 5, located in the footer. 
	register_sidebar( array(
		'name' => __( 'Third Footer Widget Area', 'subrise' ),
		'id' => 'third-footer-widget-area',
		'description' => __( 'The third footer widget area', 'subrise' ),
		'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );

	// Area 6, located in the footer.
	register_sidebar( array(
		'name' => __( 'Fourth Footer Widget Area', 'subrise' ),
		'id' => 'fourth-footer-widget-area',
		'description' => __( 'The fourth footer widget area', 'subrise' ),
		'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
	
	// Area 7, located in the header. 
	register_sidebar( array(
		'name' => __( 'First Header Widget Area', 'subrise' ),
		'id' => 'first-header-widget-area',
		'description' => __( 'The first header widget area', 'subrise' ),
		'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
	
	// Area 8, located in the header. 
	register_sidebar( array(
		'name' => __( 'Second Header Widget Area', 'subrise' ),
		'id' => 'second-header-widget-area',
		'description' => __( 'The second header widget area', 'subrise' ),
		'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
	
	// Area 9, located in the header. 
	register_sidebar( array(
		'name' => __( 'Third Header Widget Area', 'subrise' ),
		'id' => 'third-header-widget-area',
		'description' => __( 'The third header widget area', 'subrise' ),
		'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
	
	// Area 10, located in the header. 
	register_sidebar( array(
		'name' => __( 'Fourth Header Widget Area', 'subrise' ),
		'id' => 'fourth-header-widget-area',
		'description' => __( 'The fourth header widget area', 'subrise' ),
		'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
}
/** Register sidebars by running twentyten_widgets_init() on the widgets_init hook. */
add_action( 'widgets_init', 'subrise_widgets_init' );

/**
* RSS Widget
* @since Subrise 0.1
**/
/**
 *  SRW_RSS Class
 */
class SRW_RSS extends WP_Widget {
	/** constructor */
	function SRW_RSS() 
	{
		$widget_ops = array(
			'classname' 	=> 'srw_rss', 
			'description' 	=> __('A RSS link with some text')
		);
		parent::WP_Widget('srw_rss', __('Subrise Widget: RSS'), $widget_ops);
	}

	function widget( $args, $instance ) {
		extract($args);
		$title = apply_filters( 'widget_title', empty($instance['title']) ? '' : $instance['title'], $instance, $this->id_base);
		$text = apply_filters( 'widget_text', $instance['text'], $instance );
		echo $before_widget;
		// echo $title
		if ( ! empty( $title ) ) 
		{ 
			echo $before_title;
			if ( empty($instance['link_url']) ) 
				echo $title;
			else
				echo '<a href="'.$instance['link_url'].'">'.$title.'</a>';
			echo $after_title; 
		}
		// echo text
		echo '<div class="srw_text">';
		if ($instance['filter'])
		  	echo wpautop($text);
		else
			echo $text;
		echo '</div>';
		// echo link
		if ( ! empty($instance['link_url']) )
		{
			echo '<div class="srw_link">';
			echo '<a href="'.$instance['link_url'].'">'.$instance['link_text'].'</a></div>';
		}
		echo $after_widget;
	}

	function update( $new_instance, $old_instance ) {
		$instance = $old_instance;
		$instance['title'] 		= strip_tags($new_instance['title']);
		$instance['link_url'] 	= strip_tags($new_instance['link_url']);
		$instance['link_text'] 	= strip_tags($new_instance['link_text']);
		if ( current_user_can('unfiltered_html') )
			$instance['text'] =  $new_instance['text'];
		else
			$instance['text'] = stripslashes( wp_filter_post_kses( addslashes($new_instance['text']) ) ); // wp_filter_post_kses() expects slashed
		$instance['filter'] = isset($new_instance['filter']);
		return $instance;
	}

	function form( $instance ) {
		$instance = wp_parse_args( (array) $instance, array( 'title' => '', 'text' => '' ) );
		$title = strip_tags($instance['title']);
		$text = format_to_edit($instance['text']);
		$link_url = strip_tags($instance['link_url']);
		$link_text = strip_tags($instance['link_text']);
	?>
		<p>
			<label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title:'); ?></label>
			<input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo esc_attr($title); ?>" />
		</p>

		<textarea class="widefat" rows="5" cols="10" id="<?php echo $this->get_field_id('text'); ?>" name="<?php echo $this->get_field_name('text'); ?>"><?php echo $text; ?></textarea>

		<p>
			<input id="<?php echo $this->get_field_id('filter'); ?>" name="<?php echo $this->get_field_name('filter'); ?>" type="checkbox" <?php checked(isset($instance['filter']) ? $instance['filter'] : 0); ?> />
			<label for="<?php echo $this->get_field_id('filter'); ?>"><?php _e('Automatically add paragraphs'); ?></label>
		</p>
		<p>
			<label for="<?php echo $this->get_field_id('link_url')?>"><?php _e('Link url:');?></label>
			<input class="widefat" id="<?php echo $this->get_field_id('link_url'); ?>" name="<?php echo $this->get_field_name('link_url'); ?>" type="text" value="<?php echo esc_attr($link_url); ?>" />
		</p>
		<p>
			<label for="<?php echo $this->get_field_id('link_text')?>"><?php _e('Link text:');?></label>
			<input class="widefat" id="<?php echo $this->get_field_id('link_text'); ?>" name="<?php echo $this->get_field_name('link_text'); ?>" type="text" value="<?php echo esc_attr($link_text); ?>" />
		</p>
	<?php
	}
		
} // class SubriseWidget
// register SRW_RSS widget
add_action('widgets_init', create_function('', 'return register_widget("SRW_RSS");'));

/**
* RSS Facebook
* @since Subrise 0.1
**/
/**
 *  SRW_Facebook Class
 */
class SRW_Facebook extends WP_Widget {
	/** constructor */
	function SRW_Facebook() 
	{
		$widget_ops = array(
			'classname' 	=> 'srw_facebook', 
			'description' 	=> __('A Facebook link with some text')
		);
		parent::WP_Widget('srw_facebook', __('Subrise Widget: Facebook'), $widget_ops);
	}

	function widget( $args, $instance ) {
		extract($args);
		$title = apply_filters( 'widget_title', empty($instance['title']) ? '' : $instance['title'], $instance, $this->id_base);
		$text = apply_filters( 'widget_text', $instance['text'], $instance );
		echo $before_widget;
		// echo $title
		if ( ! empty( $title ) ) 
		{ 
			echo $before_title;
			if ( empty($instance['link_url']) ) 
				echo $title;
			else
				echo '<a href="'.$instance['link_url'].'">'.$title.'</a>';
			echo $after_title; 
		}
		// echo text
		echo '<div class="srw_text">';
		if ($instance['filter'])
		  	echo wpautop($text);
		else
			echo $text;
		echo '</div>';
		// echo link
		if ( ! empty($instance['link_url']) )
		{
			echo '<div class="srw_link">';
			echo '<a href="'.$instance['link_url'].'">'.$instance['link_text'].'</a></div>';
		}
		echo $after_widget;
	}

	function update( $new_instance, $old_instance ) {
		$instance = $old_instance;
		$instance['title'] 		= strip_tags($new_instance['title']);
		$instance['link_url'] 	= strip_tags($new_instance['link_url']);
		$instance['link_text'] 	= strip_tags($new_instance['link_text']);
		if ( current_user_can('unfiltered_html') )
			$instance['text'] =  $new_instance['text'];
		else
			$instance['text'] = stripslashes( wp_filter_post_kses( addslashes($new_instance['text']) ) ); // wp_filter_post_kses() expects slashed
		$instance['filter'] = isset($new_instance['filter']);
		return $instance;
	}

	function form( $instance ) {
		$instance = wp_parse_args( (array) $instance, array( 'title' => '', 'text' => '' ) );
		$title = strip_tags($instance['title']);
		$text = format_to_edit($instance['text']);
		$link_url = strip_tags($instance['link_url']);
		$link_text = strip_tags($instance['link_text']);
	?>
		<p>
			<label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title:'); ?></label>
			<input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo esc_attr($title); ?>" />
		</p>

		<textarea class="widefat" rows="5" cols="10" id="<?php echo $this->get_field_id('text'); ?>" name="<?php echo $this->get_field_name('text'); ?>"><?php echo $text; ?></textarea>

		<p>
			<input id="<?php echo $this->get_field_id('filter'); ?>" name="<?php echo $this->get_field_name('filter'); ?>" type="checkbox" <?php checked(isset($instance['filter']) ? $instance['filter'] : 0); ?> />
			<label for="<?php echo $this->get_field_id('filter'); ?>"><?php _e('Automatically add paragraphs'); ?></label>
		</p>
		<p>
			<label for="<?php echo $this->get_field_id('link_url')?>"><?php _e('Link url:');?></label>
			<input class="widefat" id="<?php echo $this->get_field_id('link_url'); ?>" name="<?php echo $this->get_field_name('link_url'); ?>" type="text" value="<?php echo esc_attr($link_url); ?>" />
		</p>
		<p>
			<label for="<?php echo $this->get_field_id('link_text')?>"><?php _e('Link text:');?></label>
			<input class="widefat" id="<?php echo $this->get_field_id('link_text'); ?>" name="<?php echo $this->get_field_name('link_text'); ?>" type="text" value="<?php echo esc_attr($link_text); ?>" />
		</p>
	<?php
	}
		
} // class SubriseWidget
// register SRW_Facebook widget
add_action('widgets_init', create_function('', 'return register_widget("SRW_Facebook");'));

class SRW_Blog extends WP_Widget {
	/** constructor */
	function SRW_Blog() 
	{
		$widget_ops = array(
			'classname' 	=> 'srw_blog', 
			'description' 	=> __('A widget that links to the blog page')
		);
		parent::WP_Widget('srw_blog', __('Subrise Widget: Blog'), $widget_ops);
	}

	function widget( $args, $instance ) {
		extract($args);
		$title = apply_filters( 'widget_title', empty($instance['title']) ? '' : $instance['title'], $instance, $this->id_base);
		$text = apply_filters( 'widget_text', $instance['text'], $instance );
		echo $before_widget;
		// echo $title
		if ( ! empty( $title ) ) 
		{ 
			echo $before_title;
			if ( empty($instance['link_url']) ) 
				echo $title;
			else
				echo '<a href="'.$instance['link_url'].'">'.$title.'</a>';
			echo $after_title; 
		}
		// echo text
		echo '<div class="srw_text">';
		if ($instance['filter'])
		  	echo wpautop($text);
		else
			echo $text;
		echo '</div>';
		// echo link
		if ( ! empty($instance['link_url']) )
		{
			echo '<div class="srw_link">';
			echo '<a href="'.$instance['link_url'].'">'.$instance['link_text'].'</a></div>';
		}
		echo $after_widget;
	}

	function update( $new_instance, $old_instance ) {
		$instance = $old_instance;
		$instance['title'] 		= strip_tags($new_instance['title']);
		$instance['link_url'] 	= strip_tags($new_instance['link_url']);
		$instance['link_text'] 	= strip_tags($new_instance['link_text']);
		if ( current_user_can('unfiltered_html') )
			$instance['text'] =  $new_instance['text'];
		else
			$instance['text'] = stripslashes( wp_filter_post_kses( addslashes($new_instance['text']) ) ); // wp_filter_post_kses() expects slashed
		$instance['filter'] = isset($new_instance['filter']);
		return $instance;
	}

	function form( $instance ) {
		$instance = wp_parse_args( (array) $instance, array( 'title' => '', 'text' => '' ) );
		$title = strip_tags($instance['title']);
		$text = format_to_edit($instance['text']);
		$link_url = strip_tags($instance['link_url']);
		$link_text = strip_tags($instance['link_text']);
	?>
		<p>
			<label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title:'); ?></label>
			<input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo esc_attr($title); ?>" />
		</p>

		<textarea class="widefat" rows="5" cols="10" id="<?php echo $this->get_field_id('text'); ?>" name="<?php echo $this->get_field_name('text'); ?>"><?php echo $text; ?></textarea>

		<p>
			<input id="<?php echo $this->get_field_id('filter'); ?>" name="<?php echo $this->get_field_name('filter'); ?>" type="checkbox" <?php checked(isset($instance['filter']) ? $instance['filter'] : 0); ?> />
			<label for="<?php echo $this->get_field_id('filter'); ?>"><?php _e('Automatically add paragraphs'); ?></label>
		</p>
		<p>
			<label for="<?php echo $this->get_field_id('link_url')?>"><?php _e('Link url:');?></label>
			<input class="widefat" id="<?php echo $this->get_field_id('link_url'); ?>" name="<?php echo $this->get_field_name('link_url'); ?>" type="text" value="<?php echo esc_attr($link_url); ?>" />
		</p>
		<p>
			<label for="<?php echo $this->get_field_id('link_text')?>"><?php _e('Link text:');?></label>
			<input class="widefat" id="<?php echo $this->get_field_id('link_text'); ?>" name="<?php echo $this->get_field_name('link_text'); ?>" type="text" value="<?php echo esc_attr($link_text); ?>" />
		</p>
	<?php
	}
		
} // class SubriseWidget
// register SRW_RSS widget
add_action('widgets_init', create_function('', 'return register_widget("SRW_Blog");'));


if ( ! function_exists( 'subrise_posted_on' ) ) :
/**
 * Prints HTML with meta information for the current post—date/time and author.
 *
 * @since Subrise 0.1
 */
function subrise_posted_on() {
	printf( __( '<span class="%1$s">Posted on</span> %2$s <span class="meta-sep">by</span> %3$s', 'subrise' ),
		'meta-prep meta-prep-author',
		sprintf( '<a href="%1$s" title="%2$s" rel="bookmark"><span class="entry-date">%3$s</span></a>',
			get_permalink(),
			esc_attr( get_the_time() ),
			get_the_date()
		),
		sprintf( '<span class="author vcard"><a class="url fn n" href="%1$s" title="%2$s">%3$s</a></span>',
			get_author_posts_url( get_the_author_meta( 'ID' ) ),
			sprintf( esc_attr__( 'View all posts by %s', 'subrise' ), get_the_author() ),
			get_the_author()
		)
	);
}
endif;

if ( ! function_exists( 'twentyten_posted_in' ) ) :
/**
 * Prints HTML with meta information for the current post (category, tags and permalink).
 *
 * @since Subrise 0.1
 */
function subrise_posted_in() {
	// Retrieves tag list of current post, separated by commas.
	$tag_list = get_the_tag_list( '', ', ' );
	if ( $tag_list ) {
		$posted_in = __( 'This entry was posted in %1$s and tagged %2$s. Bookmark the <a href="%3$s" title="Permalink to %4$s" rel="bookmark">permalink</a>.', 'subrise' );
	} elseif ( is_object_in_taxonomy( get_post_type(), 'category' ) ) {
		$posted_in = __( 'This entry was posted in %1$s. Bookmark the <a href="%3$s" title="Permalink to %4$s" rel="bookmark">permalink</a>.', 'subrise' );
	} else {
		$posted_in = __( 'Bookmark the <a href="%3$s" title="Permalink to %4$s" rel="bookmark">permalink</a>.', 'subrise' );
	}
	// Prints the string, replacing the placeholders.
	printf(
		$posted_in,
		get_the_category_list( ', ' ),
		$tag_list,
		get_permalink(),
		the_title_attribute( 'echo=0' )
	);
}
endif;

if ( ! function_exists( 'subrise_comment' ) ) :
/**
 * Template for comments and pingbacks.
 *
 * To override this walker in a child theme without modifying the comments template
 * simply create your own twentyten_comment(), and that function will be used instead.
 *
 * Used as a callback by wp_list_comments() for displaying the comments.
 *
 * @since Subrise 0.1
 */
function subrise_comment( $comment, $args, $depth ) {
	$GLOBALS['comment'] = $comment;
	switch ( $comment->comment_type ) :
		case '' :
	?>
	<li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>">
		<div id="comment-<?php comment_ID(); ?>">
		<div class="comment-author vcard">
			<?php echo get_avatar( $comment, 40 ); ?>
			<?php printf( __( '%s <span class="says">says:</span>', 'subrise' ), sprintf( '<cite class="fn">%s</cite>', get_comment_author_link() ) ); ?>
		</div><!-- .comment-author .vcard -->
		<?php if ( $comment->comment_approved == '0' ) : ?>
			<em class="comment-awaiting-moderation"><?php _e( 'Your comment is awaiting moderation.', 'subrise' ); ?></em>
			<br />
		<?php endif; ?>

		<div class="comment-meta commentmetadata"><a href="<?php echo esc_url( get_comment_link( $comment->comment_ID ) ); ?>">
			<?php
				/* translators: 1: date, 2: time */
				printf( __( '%1$s at %2$s', 'subrise' ), get_comment_date(),  get_comment_time() ); ?></a><?php edit_comment_link( __( '(Edit)', 'twentyten' ), ' ' );
			?>
		</div><!-- .comment-meta .commentmetadata -->

		<div class="comment-body"><?php comment_text(); ?></div>

		<div class="reply">
			<?php comment_reply_link( array_merge( $args, array( 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) ); ?>
		</div><!-- .reply -->
	</div><!-- #comment-##  -->

	<?php
			break;
		case 'pingback'  :
		case 'trackback' :
	?>
	<li class="post pingback">
		<p><?php _e( 'Pingback:', 'subrise' ); ?> <?php comment_author_link(); ?><?php edit_comment_link( __( '(Edit)', 'twentyten' ), ' ' ); ?></p>
	<?php
			break;
	endswitch;
}
endif;
