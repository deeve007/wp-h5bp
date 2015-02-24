<?php

/*
 * Add default posts and comments RSS feed links to head
 */

add_theme_support( 'automatic-feed-links' );


/*
 * Featured images
 */

// add_theme_support( 'post-thumbnails' ); 
// set_post_thumbnail_size( 255, 0 );
// add_image_size( 'full-size', 0, 0 ); 
// add_image_size( 'new-size', 0, 0 ); // Add more of these for additional thumbnail sizes


/**
* Register menus
*/

register_nav_menus( array(
	'header' => __( 'Main Menu', 'theme' ),
	'footer' => __( 'Footer Menu', 'theme' )
) );


/**
 * Register widgetized area and update sidebar with default widgets
 */

function theme_widgets_init() {
	
	register_sidebar( array(
		'name' => __( 'Widgets', 'theme' ),
		'id' => 'widgets',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => "</aside>",
		'before_title' => '<h1 class="widget-title">',
		'after_title' => '</h1>',
	));

}
add_action( 'init', 'theme_widgets_init' );