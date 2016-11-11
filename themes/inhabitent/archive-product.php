<?php
/**
 * The template for displaying archive pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">

		<div class="container">
			<p>archive-product.php</p>

			<?php
				//the_archive_title( '<h1 class="page-title">', '</h1>' ); //add filter
			?>

			<?php if ( have_posts() ) : ?>

				<header class="page-header">
					<div class="shop-stuff-header">

						<?php
							the_archive_title( '<h1 class="page-title">', '</h1>' );
						?>

						<?php  //shop stuff on front page
							$arg = array( 'taxonomy' => 'product_type',
							              'hide_empty' => true);
							$terms = get_terms( $arg );
						?>

						<div class="product-list-style">

							<ul>
								<?php foreach ( $terms as $term ) : ?>

									<?php //echo print_r($term); ?>

									<li><a href="<?php echo get_term_link($term); ?>"><?php echo $term->name; ?></a></li>

								<?php endforeach; ?>
							</ul>

							<?php
								the_archive_description( '<div e="taxonomy-description">', '</div>' );
							?>
						</div>
					</div>

				</header><!-- .page-header -->



				<div class="archive-product-grid">
					<?php while ( have_posts() ) : the_post(); ?>
						<div class="single-product-block">

							<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

								<header class="entry-header">

									<!--images and url-->
									<div class="thumbnail-wrapper">
										<a href="<?php echo get_permalink(); ?> ">
											<?php if ( has_post_thumbnail() ) : ?>
												<?php the_post_thumbnail( 'large' ); ?>
											<?php endif; ?>
										</a>
									</div>

									<!--title and price-->
									<div class="product-info">
										<div class="product-title"><?php the_title(); ?></div>
										<div class="product-price"><?php echo CFS()->get( 'product_price' ); ?></div>
									</div>

								</header><!-- .entry-header -->

							</article><!-- #post-## -->

						</div><!-- .single-product-block -->
					<?php endwhile; ?>
				</div><!-- .archive-product-grid -->

				<?php the_posts_navigation(); ?>

			<?php else : ?>
				<?php get_template_part( 'template-parts/content', 'none' ); ?>
			<?php endif; ?>

		</div><!-- .container -->

	</main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>
