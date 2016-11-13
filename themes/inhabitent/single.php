<?php
/**
 * The template for displaying all single posts.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div <?php body_class(array('container', 'inhabitent-journal')); ?>>

		<div id="primary" <?php body_class('journal-content-area'); ?>>
			<main id="main" class="site-main" role="main">

				<!--<p>single.php</p>-->
				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'template-parts/content', 'single' ); ?>

					<?php //the_post_navigation(); ?>

					<?php
						// If comments are open or we have at least one comment, load up the comment template.
						if ( comments_open() || get_comments_number() ) :
							comments_template();
						endif;
					?>

				<?php endwhile; // End of the loop. ?>

				<button type="button" id="close-comments">Close Comments</button>

			</main><!-- #main -->
		</div><!-- #primary -->

		<?php get_sidebar(); ?>

	</div><!-- .container -->

<?php get_footer(); ?>
