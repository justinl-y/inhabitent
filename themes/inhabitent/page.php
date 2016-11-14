<?php
/**
 * The template for displaying all pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div class="container find-us">
		<div id="primary" <?php body_class('find-us-content-area'); ?>>
			<main id="main" class="site-main" role="main">

				<!--<p>page.php</p>-->
				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'template-parts/content', 'page' ); ?>

				<?php endwhile; // End of the loop. ?>

			</main><!-- #main -->
		</div>

		<?php get_sidebar(); ?>
	</div>

<?php get_footer(); ?>
