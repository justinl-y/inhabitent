<?php
/**
 * The template for displaying all pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

    <section class="home-hero">
        <!--<a href="<?php //echo esc_url( home_url( '/' ) ); ?>" title="<?php //echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">-->
            <img src="<?php echo get_template_directory_uri(); ?>/images/logos/inhabitent-logo-full.svg" alt="Image of Inhabitent logo" />
        <!--</a>-->
    </section>

    <div class="container">
        <section class="home-shop">
            <h2>Shop Stuff</h2>

            <section class="product-feed-container">
                <?php
                    $terms = get_terms('product_type');

                    foreach ($terms as $term) : ?>

                        <?php //echo print_r($term); ?>

                        <?php $url = get_term_link($term->slug, 'product_type'); ?>
                        <img src="<?php echo get_template_directory_uri(); ?>/images/product-type-icons/<?php echo $term->slug; ?>.svg">

                        <p><?php echo $term->description; ?></p>
                        <p><a href="<?php echo $url ?>"><?php echo $term->name; ?> Stuff</a></p>
                    <?php endforeach;
                ?>
            </section>
        </section>

        <section class="home-journal">
            <h2>Inhabitent Journal</h2>

            <?php
                /*$args = array(
                    'orderby'       =>  'post_date',
                    'order'         =>  'DESC',
                    'posts_per_page' => 3 //5 default
                );

                $journal_posts = get_posts( $args ); // returns an array of posts
            ?>

            <?php foreach ( $journal_posts as $post ) : setup_postdata( $post ); ?>

                <?php the_post_thumbnail('category-thumb'); ?>
                <?php the_date(); ?>
                <?php comments_number(); ?>

            <?php endforeach; wp_reset_postdata(); */?>

            <div class="inhabitent-journal">
                <?php
                    $args = array( 'post_type' => 'post',
                                   'orderby' => 'post_date',
                                   'order' => 'DESC',
                                   'posts_per_page' => 3 );

                    $journal_posts = get_posts( $args );

                foreach ( $journal_posts as $post ) : setup_postdata( $post ); ?>
                    <div class="inhabitent-journal-block">
                        <div class="inhabitent-journal-block-image"><?php the_post_thumbnail(); ?></div>

                        <div class="inhabitent-journal-block-info">
                            <p><?php the_date(); ?> / <?php comments_number( '0 Comments', '1 Comment', '% Comments' ); ?></p>
                            <a><h1><?php the_title(); ?></h1></a>
                            <a href="<?php the_permalink(); ?>"><div class="read-entry">read entry</div></a>
                        </div>
                    </div>
                <?php endforeach; wp_reset_postdata(); //use for exiting secondary loop to return to main front-page loop?>

            </div>
        </section>

        <section class="home-adventures">
            <h2>Latest Adventures</h2>

            <div class="home-adventures-images">
                <div class="home-adventures-column-left">
                    <div class="home-adventures-canoe-girl">
                        <span class="home-adventures-image-text">Getting Back to Nature in a Canoe</span>
                    </div>
                </div>

                <div class="home-adventures-column-right">
                    <div class="home-adventures-beach-bonfire">
                        <span class="home-adventures-image-text">A Night with Friends at the Beach</span>
                    </div>

                    <div class="home-adventures-mountain-hikers">
                        <span class="home-adventures-image-text">Taking in the View at Big Mountain</span>
                    </div>

                    <div class="home-adventures-night-sky">
                        <span class="home-adventures-image-text">Star-Gazing at the Night Sky</span>
                    </div>
                </div>
            </div>

            <!--<div class="latest-adventures">
                <h2 class="front-page-h2">Latest Adventures</h2>

                <div class="adventures-container">
                    <div class="leftside-adventures">
                        <p>Getting Back to Nature in a Canoe</p>
                        <span class="static-read-more">Read More</span>
                    </div>

                    <div class="rightside-adventures">
                        <div class="rightside-top-adventure">
                            <p>A Night with Friends at the Beach</p>
                            <span class="static-read-more">Read More</span>
                        </div>
                        <div class="bottom-left-rightside-adventure">
                            <p>Taking in the View at Big Mountain</p>
                            <span class="static-read-more">Read More</span>
                        </div>
                        <div class="bottom-right-rightside-adventure">
                            <p>Star-Gazing at the Night Sky</p>
                            <span class="static-read-more">Read More</span>
                        </div>
                    </div>
                </div>
                <p class="more-adventures"> More Adventures</p>
            </div>-->

        </section>
    </div>

<?php get_footer(); ?>