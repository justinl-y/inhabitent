<?php
/**
 * The header for our theme.
 *
 * @package RED_Starter_Theme
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>
		<div id="page" class="hfeed site">
			<a class="skip-link screen-reader-text" href="#content"><?php esc_html( 'Skip to content' ); ?></a>

			<header id="masthead" class="site-header" role="banner">

				<div class="container">
					<div class="header-items">
						<div class="logo">
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
								<img src="<?php echo get_template_directory_uri(); ?>/images/logos/inhabitent-logo-tent.svg" alt="Image of Inhabitent logo" />
							</a>
						</div>

						<nav id="site-navigation" class="main-navigation" role="navigation">
							<div class="main-menu-navigation-container">
								<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html( 'Primary Menu' ); ?></button>
								<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
							</div>

							<div class="header-search">
								<?php get_search_form(); ?>
							</div>
						</nav><!-- #site-navigation -->
					</div> <!-- .header-items -->

				</div><!-- .container -->
			</header><!-- #masthead -->

			<div id="content" class="site-content">