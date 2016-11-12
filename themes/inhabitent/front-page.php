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
                        <?php $url = get_term_link($term->slug, 'product_type'); ?>

                        <div class="product-feed-item">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/product-type-icons/<?php echo $term->slug; ?>.svg">
                            <p><?php echo $term->description; ?></p>
                            <p><a href="<?php echo $url ?>"><?php echo $term->name; ?> Stuff</a></p>
                        </div>
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
                            <a href="<?php the_permalink(); ?>"><div class="read-entry">Read Entry</div></a>
                        </div>
                    </div>
                <?php endforeach; wp_reset_postdata(); //use for exiting secondary loop to return to main front-page loop?>

            </div>
        </section>

        <section class="home-adventures">
            <h2>Latest Adventures</h2>

            <?php
                $args = array( 'post_type' => 'adventure',
                               'orderby' => 'post_date',
                               'order' => 'ASC',
                               'posts_per_page' => 4
                );

                $adventure_posts = get_posts( $args );
                $adventure_posts_html = [];

                foreach ( $adventure_posts as $post ) : setup_postdata( $post );

                    //add adventure post markup to output buffer object and push into array
                    ob_start(); ?>

                        <?php the_post_thumbnail( 'large' ); ?>
                        <h3><a class="home-adventures-link-title" href="<?php the_permalink();?>"><?php the_title(); ?></a></h3>
                        <a class="home-adventures-link-button" href="<?php the_permalink();?>">Read More</a>

                    <?php array_push( $adventure_posts_html, ob_get_clean() );

                 endforeach; wp_reset_postdata(); ?>


            <div class="home-adventures-images">

                <div class="home-adventures-column-left">
                    <div class="home-adventures-column-left-top">
                        <?php echo $adventure_posts_html[0]; ?>
                    </div>
                </div>

                <div class="home-adventures-column-right">
                    <div class="home-adventures-column-right-top">
                        <?php echo $adventure_posts_html[1]; ?>
                    </div>

                    <div class="home-adventures-column-right-bottom-left">
                        <?php echo $adventure_posts_html[2]; ?>
                    </div>

                    <div class="home-adventures-column-right-bottom-right">
                        <?php echo $adventure_posts_html[3]; ?>
                    </div>
                </div>
            </div>

            <a href="<?php echo get_post_type_archive_link('adventure'); ?>">More Adventures</a>

        </section>
    </div>

<?php get_footer(); ?>