<?php
/**
* Accelerate Marketing Child functions and definitions
*
* @link http://codex.wordpress.org/Theme_Development
* @link http://codex.wordpress.org/Child_Themes
*
* @package WordPress
* @subpackage Accelerate Marketing
* @since Accelerate Marketing 2.0
*/

// Enqueue scripts and styles
function accelerate_child_scripts(){
	wp_enqueue_style( 'accelerate-style', get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', array( 'accelerate-style' ));
	wp_enqueue_style ('accelerate-child-google-fonts', '//fonts.googleapis.com/css2?family=Dela+Gothic+One');
}
add_action( 'wp_enqueue_scripts', 'accelerate_child_scripts' );

//Custom Post Types Function - Add all new post types in the brakets //
function create_custom_post_types () {

	// case study custom post type //
	register_post_type ( 'case_studies',
		array(
			'labels' => array (
				'name' => __ ('Case Studies'),
				'singular_name' => __ ('Case Study')
			),
			'public' => true,
			'has_archive' => true,
			'rewrite' => array( 'slug' => 'case-studies'),
		)
	);

	//About Page Entry custom post type //
	register_post_type ( 'about_entry',
		array(
			'labels' => array (
				'name' => __ ('About Entries'),
				'singular_name' => __ ('About Entry')
			),
			'public' => true,
			'has_archive' => true,
			'rewrite' => array( 'slug' => 'about_entry'),
		)
	);
}

//Hook this Custom Post Type function into the theme
add_action ('init', 'create_custom_post_types');

//Widgetizing a new side-bar that will be on the front page

function accelerate_theme_child_widget_init() {
	
	register_sidebar( array(
	    'name' =>__( 'Homepage sidebar', 'accelerate-theme-child'),
	    'id' => 'sidebar-2',
	    'description' => __( 'Appears on the static front page template', 'accelerate-theme-child' ),
	    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
	    'after_widget' => '</aside>',
	    'before_title' => '<h3 class="widget-title">',
	    'after_title' => '</h3>',
	) );
	
}
add_action( 'widgets_init', 'accelerate_theme_child_widget_init' );
