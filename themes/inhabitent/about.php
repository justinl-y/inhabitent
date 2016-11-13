<?php
/**
 * Template Name: About Page
 *
 **/
get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<!--about.php -->
			<header class="about-hero">
				<div class=" container">
					<h1>About</h1>
				</div>
			</header>

			<section class="container">
				<div class="about-content">
					<div class="about-our-story"><?php echo CFS()->get('our_story') ; ?></div>
					<div class="about-our-team"><?php echo CFS()->get('our_team') ; ?></div>
				</div>
			</section>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
