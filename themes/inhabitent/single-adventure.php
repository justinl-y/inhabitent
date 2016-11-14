<?php
/**
 * The template for displaying all single posts.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">

		<section class="advenure-hero">
			<?php if ( has_post_thumbnail() ) : ?>
				<?php the_post_thumbnail( 'full' ); ?>
			<?php endif; ?>
		</section>

		<div class="container">
			<!--<p>single-adventure.php</p>-->
			<div class="adventure-container">

			<?php while ( have_posts() ) : the_post(); ?>
				<?php //get_template_part( 'template-parts/content', 'single' ); ?>
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<header class="entry-header">
						<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
					</header><!-- .entry-header -->

					<div class="entry-content">
						<?php the_content(); ?>
						<?php
						wp_link_pages( array(
							'before' => '<div class="page-links">' . esc_html( 'Pages:' ),
							'after'  => '</div>',
						) );
						?>
					</div><!-- .entry-content -->

					<footer class="entry-footer">
						<?php red_starter_entry_footer(); ?>

						<div class="social-buttons">
							<button type="button" class="black-btn"><i class="fa fa-facebook"></i><span>Like</span></button>
							<button type="button" class="black-btn"><i class="fa fa-twitter"></i><span>Tweet</span></button>
							<button type="button" class="black-btn"><i class="fa fa-pinterest"></i><span>Pin</span></button>
						</div><!-- .social-buttons -->
					</footer><!-- .entry-footer -->
				</article><!-- #post-## -->
			<?php endwhile; // End of the loop. ?>

			</div><!-- .container -->
		</div><!-- .container -->

	</main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>
