<?php
/**
 * Custom functions that act independently of the theme templates.
 *
 * @package RED_Starter_Theme
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function red_starter_body_classes( $classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	return $classes;
}
add_filter( 'body_class', 'red_starter_body_classes' );


/*function my_custom_login_logo() {
    echo '<style type="text/css">
         h1 a { background-image:url('.get_stylesheet_directory_uri().'/images/login.png) !important;
         height: 120px !important; width: 410px !important; margin-left: -40px;}
     </style>';
}
add_action('login_head', 'my_custom_login_logo');*/


/* to add custom image */
/*function my_styles_method() {

	if(!is_page_template('about.php')) {
		return;
	}

	$url = CFS()->get( 'about_background_image' );
	$custom_css = ".about-hero {
		background-image({$url});
		}";

	wp_add_inline_style('red-starter-theme', $custom_css);
}
add_action( 'wp_enqueue_scripts', 'my_styles_method' );*/


function custom_styles_method() {

	if( !is_page_template( 'about.php' ) ){
		return;
	}

	$url = CFS()->get( 'about_background_image' );
	$custom_css = "
		.about-hero{
			background: linear-gradient( to bottom, rgba(0,0,0,0.25) 0, rgba(0,0,0,0.25) 100% ), url({$url}) bottom center no-repeat;
			background-size: cover, cover;
			height: 50rem;
		}";
	wp_add_inline_style( 'red-starter-style', $custom_css );
}
add_action( 'wp_enqueue_scripts', 'custom_styles_method' );

