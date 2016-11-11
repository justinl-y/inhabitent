<?php
/**
 * The template for displaying the footer.
 *
 * @package RED_Starter_Theme
 */
?>

			</div><!-- #content -->

			<footer id="colophon" class="site-footer" role="contentinfo">

				<div class="footer-columns container">
					<div class="contact-info">
						<h3>Contact Info</h3>
						<p>
							<i class="fa fa-envelope" aria-hidden="true"></i>
							<a href="mailto:info@inhabitent.com">info@inhabitent.com</a>
						</p>
						<p>
							<i class="fa fa-phone" aria-hidden="true"></i>
							<a href="tel:778-456-7891">778-456-7891</a>
						</p>
						<p>
							<span>
								<a href="#"><i class="fa fa-facebook-square" aria-hidden="true"></i></a>
							</span>
							<span>
								<a href="#"><i class="fa fa-twitter-square" aria-hidden="true"></i></a>
							</span>
							<span>
								<a href="#"><i class="fa fa-google-plus-square" aria-hidden="true"></i></a>
							</span>
						</p>
					</div>

					<div class="business-hours">
						<h3>Business Hours</h3>
						<p><span>Monday-Friday:</span> 9am to 5pm</p>
						<p><span>Saturday:</span> 10am to 2pm</p>
						<p><span>Sunday:</span> Closed</p>
					</div>

					<div class="footer-logo">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
							<img src="<?php echo get_template_directory_uri(); ?>/images/logos/inhabitent-logo-text.svg" alt="Image of Inhabitent logo" />
						</a>
					</div>
				</div>

				<div class="container">
					<div class="citation">
						<p>Copyright &copy; 2016 Inhabitent</p>
					</div>
				</div>

			</footer><!-- #colophon -->
		</div><!-- #page -->

		<?php wp_footer(); ?>

	</body>
</html>