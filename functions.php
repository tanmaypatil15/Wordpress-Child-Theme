<?php
/**
 * Theme functions and definitions.
 *
 *
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

add_action( 'wp_enqueue_scripts', 'wordpress_child_theme_styles' );

function grand_sunrise_enqueue_styles() {
	wp_enqueue_style( 
		'wordpress_child_theme_styles', 
		get_stylesheet_uri()
	);
}
