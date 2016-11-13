<?php
/**
 * The template for displaying all single posts.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div class="container">
				<!--<p>single-product.php</p>-->
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<?php while ( have_posts() ) : the_post(); ?>

						<?php //get_template_part( 'template-parts/content', 'single' ); ?>

						<div class="product-image-wrapper">
							<?php if ( has_post_thumbnail() ) : ?>
								<?php the_post_thumbnail( 'large' ); ?>
							<?php endif; ?>
						</div> <!-- .product-image-wrapper -->

						<div class="product-content-wrapper">
							<header class="entry-header">
								<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
							</header><!-- .entry-header -->

							<div class="entry-content">
								<div class="product-price"><?php echo CFS()->get( 'product_price' ); ?></div>
								<?php the_content(); ?>
							</div><!-- .entry-content -->

							<div class="social-buttons">
								<button type="button" class="black-btn"><i class="fa fa-facebook"></i><span>Like</span></button>
								<button type="button" class="black-btn"><i class="fa fa-twitter"></i><span>Tweet</span></button>
								<button type="button" class="black-btn"><i class="fa fa-pinterest"></i><span>Pin</span></button>
							</div><!-- .social-buttons -->
						</div><!-- .product-content-wrapper -->
					<?php endwhile; // End of the loop. ?>
				</article><!-- #post-## -->
			</div><!-- .container -->
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>


