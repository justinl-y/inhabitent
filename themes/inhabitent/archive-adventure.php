<?php
/**
 *
 * Template Name: Adventures Page
 *
**/

get_header(); ?>

	<div id="primary" class="latest-adventure-content-area">
		<main id="main" class="site-main" role="main">

			<div class="container">
				<!--<p>archive-adventure.php</p>-->

				<?php
					$args = array(
						'post_type' => 'adventure',
						'orderby' => 'post_date',
						'order' => 'ASC',
						'posts_per_page' => 4
					);

					$adventures = new WP_Query( $args );

					if( $adventures->have_posts() ) : ?>

						<header class="page-header">
							<?php the_archive_title( '<h1 class="page-title">', '</h1>' ); ?>
						</header><!-- .page-header -->

						<div class="archive-adventure-grid">

						<?php while( $adventures->have_posts() ) {
							$adventures->the_post(); ?>

							<div class='single-adventure-block'>
								<?php the_post_thumbnail( 'large' ); ?>

								<div class="single-adventure-item-info">
									<a href="<?php the_permalink();?>"><h3><?php the_title(); ?></h3></a>
									<a href="<?php the_permalink(); ?>"><div class="link-button">Read More</div></a>
								</div>
							</div>
							<?php
						}; ?>

						</div>
					<?php endif; ?>

			</div><!-- .container -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>


