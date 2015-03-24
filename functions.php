<?php
// Theme Functions
include (TEMPLATEPATH . '/inc/functions.php' );

// Theme Clean Menu
include (TEMPLATEPATH . '/inc/breadcrumbs.php' );

// Theme Breadcrumbs
include (TEMPLATEPATH . '/inc/menu.php' );
?>
<?php
	// Add RSS links to <head> section
	automatic_feed_links();
	
	// Load jQuery
	if ( !is_admin() ) {
	   wp_deregister_script('jquery');
	   wp_register_script('jquery', ("http://ajax.googleapis.com/ajax/libs/jquery/1.4.1/jquery.min.js"), false);
	   wp_enqueue_script('jquery');
	}
	
	// Clean up the <head>
	function removeHeadLinks() {
    	remove_action('wp_head', 'rsd_link');
    	remove_action('wp_head', 'wlwmanifest_link');
    }
    add_action('init', 'removeHeadLinks');
    remove_action('wp_head', 'wp_generator');
    
    if (function_exists('register_sidebar')) {
    	register_sidebar(array(
    		'name' => 'Main Sidebar',
    		'id'   => 'sidebar-widgets',
    		'description'   => 'These are widgets for the sidebar.',
    		'before_widget' => '<div id="%1$s" class="widget %2$s">',
    		'after_widget'  => '</div>',
    		'before_title'  => '<h5>',
    		'after_title'   => '</h5>'
    	));
    }
	
	// Cleanup WP post_class tag soup!, Keeping post number and category
	function theme_slug_post_classes( $classes ) {
    $class_key = array_search( 'hentry', $classes );
	 
		if ( false !== $class_key ) {
			unset( $classes[ $class_key ] );
		}
		
		$class_key = array_search( 'status-publish', $classes );
	 
		if ( false !== $class_key ) {
			unset( $classes[ $class_key ] );
		}
		
		$class_key = array_search( 'format-standard', $classes );
	 
		if ( false !== $class_key ) {
			unset( $classes[ $class_key ] );
		}
		
		$class_key = array_search( 'type-post', $classes );
	 
		if ( false !== $class_key ) {
			unset( $classes[ $class_key ] );
		}
	
		return $classes;
	}
	add_filter( 'post_class', 'theme_slug_post_classes' );

	// Remove Recent Commends Styling - That WP usually throws in the header
	function remove_recent_comments_style() {
		global $wp_widget_factory;
		remove_action('wp_head', array($wp_widget_factory->widgets['WP_Widget_Recent_Comments'], 'recent_comments_style'));
	}
	add_action('widgets_init', 'remove_recent_comments_style');


	// Remove WP jQuery loading in header
	function optimize_jquery() {
	if (!is_admin()) {
	wp_deregister_script('jquery');
	wp_deregister_script('jquery-migrate.min');
	wp_deregister_script('comment-reply.min');
	$protocol='http:';
	if($_SERVER['HTTPS']=='on') {
	$protocol='https:';
	}
	wp_register_script('jquery', $protocol.'//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js', false, '3.6', true);
	
	wp_enqueue_script('jquery');
	}
	}
	add_action('template_redirect', 'optimize_jquery');
?>