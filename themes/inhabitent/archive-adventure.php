<?php
/**
 *
 * Template Name: Adventures Page
 *
**/

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<div class="container">
				<p>archive-adventure.php</p>

				<?php
					$args = array(
						'post_type' => 'adventure',
						'order' => 'ASC',
						'posts_per_page' => 4
					);

					$adventures = new WP_Query( $args );

					if( $adventures->have_posts() ) {

						//to do add page title - post type title

						the_archive_title( '<h1 class="page-title">', '</h1>' );

						while( $adventures->have_posts() ) {

							$adventures->the_post(); ?>

							<div class='content'>
								<?php the_post_thumbnail( 'large' ); ?>
								<p><?php the_title(); ?></p>
							</div>
							<?php
						};
					}
					else {
						echo 'Oh oh, no products!';
					}
				?>

			</div><!-- .container -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>


