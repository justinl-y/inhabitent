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


/**
 * Change backend UI login logo
 */
function inhabitent_login_logo() { ?>
	<style type="text/css">
		#login h1 a, .login h1 a {
			background-image: url(<?php echo get_template_directory_uri(); ?>/images/logos/inhabitent-logo-text-dark.svg);
			width:	300px;
			height: auto;
			padding-bottom: 30px;
			background-size: 300px auto;
		}
	</style>
<?php }
add_action( 'login_enqueue_scripts', 'inhabitent_login_logo' );

function my_login_logo_url() {
	return home_url();
}
add_filter( 'login_headerurl', 'my_login_logo_url' );

function my_login_logo_url_title() {
	return 'Inhabitent';
}
add_filter( 'login_headertitle', 'my_login_logo_url_title' );


/*** set custom hero for about page ***/
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


/*** get specific post number for products and set sorting ***/
function get_all_product_posts ($query) {
	if ( is_post_type_archive( 'custom_post_types' ) && !is_admin() && $query->is_main_query() ) {
		$query->set('posts_per_page', '16');
		$query->set('orderby', 'title');
		$query->set('order', 'ASC');
	} elseif ( is_tax('product_type') && !is_admin() && $query->is_main_query() ) {
		$query->set('posts_per_page', '4');
		$query->set('orderby', 'title');
		$query->set('order', 'ASC');
	}
}
add_action( 'pre_get_posts', 'get_all_product_posts' );


/*** function to remove “Category:”, “Tag:”, “Author:”, “Archives:” and “Other taxonomy name:” in the archive title ***/
function my_theme_archive_title( $title ) {
	if ( is_category() ) {
		$title = single_cat_title( '', false );
	} elseif ( is_tag() ) {
		$title = single_tag_title( '', false );
	} elseif ( is_author() ) {
		$title = '<span class="vcard">' . get_the_author() . '</span>';
	} elseif ( is_post_type_archive() ) {
		$title = post_type_archive_title( '', false );
	} elseif ( is_tax() ) {
		$title = single_term_title( '', false );
	}

	return $title;
}
add_filter( 'get_the_archive_title', 'my_theme_archive_title' );


/*** display shop stuff ***/
function display_custom_archive_title ($title) {
	if ( is_post_type_archive ('product' ) ) {
		$title = "Shop Stuff";
	}
	elseif ( is_post_type_archive ('adventure' ) ) {
		$title = "Latest Adventures";
	}
	elseif(is_tax() ) {
		$title = single_term_title( '', false );
	}

	return $title;
}
add_filter( 'get_the_archive_title', 'display_custom_archive_title');