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
function red_starter_inhabitent_login_logo() { ?>
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
add_action( 'login_enqueue_scripts', 'red_starter_inhabitent_login_logo' );

function red_starter_login_logo_url() {
	return home_url();
}
add_filter( 'login_headerurl', 'red_starter_login_logo_url' );

function red_starter_login_logo_url_title() {
	return 'Inhabitent';
}
add_filter( 'login_headertitle', 'red_starter_login_logo_url_title' );


/*** set custom hero for about page ***/
function red_starter_custom_styles() {

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
add_action( 'wp_enqueue_scripts', 'red_starter_custom_styles' );

/**
 * Customize excerpt length and style.
 *
 * @param  string The raw post content.
 * @return string
 */
function red_starter_trim_excerpt( $text ) {
	$raw_excerpt = $text;

	if ( '' == $text ) {
		// retrieve the post content
		$text = get_the_content('');

		// delete all shortcode tags from the content
		$text = strip_shortcodes( $text );

		$text = apply_filters( 'the_content', $text );
		$text = str_replace( ']]>', ']]&gt;', $text );

		// indicate allowable tags
		$allowed_tags = '<p>,<a>,<em>,<strong>,<blockquote>,<cite>';
		$text = strip_tags( $text, $allowed_tags );

		// change to desired word count
		$excerpt_word_count = 50;
		$excerpt_length = apply_filters( 'excerpt_length', $excerpt_word_count );

		// create a custom "more" link
		$excerpt_end = '<span>[...]</span><p><a href="' . get_permalink() . '" class="read-more">Read more &rarr;</a></p>'; // modify excerpt ending
		$excerpt_more = apply_filters( 'excerpt_more', ' ' . $excerpt_end );

		// add the elipsis and link to the end if the word count is longer than the excerpt
		$words = preg_split( "/[\n\r\t ]+/", $text, $excerpt_length + 1, PREG_SPLIT_NO_EMPTY );

		if ( count( $words ) > $excerpt_length ) {
			array_pop( $words );
			$text = implode( ' ', $words );
			$text = $text . $excerpt_more;
		} else {
			$text = implode( ' ', $words );
		}
	}

	return apply_filters( 'wp_trim_excerpt', $text, $raw_excerpt );
}
remove_filter( 'get_the_excerpt', 'wp_trim_excerpt' );
add_filter( 'get_the_excerpt', 'red_starter_trim_excerpt' );


/*** get specific post number for products and set sorting ***/
function red_starter_get_all_product_posts ($query) {
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
add_action( 'pre_get_posts', 'red_starter_get_all_product_posts' );


/*** function to remove “Category:”, “Tag:”, “Author:”, “Archives:” and “Other taxonomy name:” in the archive title ***/
function red_starter_theme_archive_title( $title ) {
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
add_filter( 'get_the_archive_title', 'red_starter_theme_archive_title' );


/*** display shop stuff ***/
function red_starter_display_custom_archive_title ($title) {
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
add_filter( 'get_the_archive_title', 'red_starter_display_custom_archive_title' );