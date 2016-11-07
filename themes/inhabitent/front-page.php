<?php
/**
 * The template for displaying all pages.
 *
 * @package RED_Starter_Theme
 */

get_header('main'); ?>

    <section class="home-banner">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
            <img src="<?php echo get_template_directory_uri(); ?>/images/logos/inhabitent-logo-full.svg" alt="Image of Inhabitent logo" />
        </a>
    </section>

    <div class="container">
        <section class="home-shop">
            <h2>Shop Stuff</h2>
        </section>

        <section class="home-journal">
            <h2>Inhabitent Journal</h2>
        </section>

        <section class="home-adventures">
            <h2>Latest Adventures</h2>



            <div class="home-adventures-beach-bonfire"></div>
            <div class="home-adventures-canoe-girl"></div>
            <div class="home-adventures-mountain-hikers"></div>
            <div class="home-adventures-night-sky"></div>

        </section>

    </div>

<?php get_footer('main'); ?>