<?php
/**
 * The template for displaying search results pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>


<div class="container search-page">
	<section id="primary" <?php body_class('search-page-content-area'); ?>>

	<!--<section id="primary" class="search-content-area">-->
		<main id="main" class="site-main" role="main">
			<!--<p>search.php</p>-->

			<?php if ( have_posts() ) : ?>
				<header class="page-header">
					<h1 class="page-title"><?php printf( esc_html( 'Search Results for: %s' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
				</header><!-- .page-header -->

				<?php /* Start the Loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>
					<?php //get_template_part( 'template-parts/content', 'search' ); ?>

					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
						<header class="entry-header">
							<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
						</header><!-- .entry-header -->

						<div class="entry-summary">
							<?php the_excerpt(); ?>
						</div><!-- .entry-summary -->

					</article><!-- #post-## -->

				<?php endwhile; ?>

				<?php red_starter_numbered_pagination(); ?>
			<?php else : ?>
				<?php //get_template_part( 'template-parts/content', 'none' ); ?>
			<?php endif; ?>
		</main><!-- #main -->
	</section><!-- #primary -->

	<?php get_sidebar(); ?>
</div>

<?php get_footer(); ?>
