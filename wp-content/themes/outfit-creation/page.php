<?php
/**
 * The template for displaying all single posts
 *
 * @package Outfit_Creation
 */

get_header();
?>

<main id="primary" class="site-main section-padding">
    <div class="page-container" style="max-width: 900px; margin: 0 auto; padding-top: 6rem;">
        <?php
        while ( have_posts() ) :
            the_post();

            ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <header class="entry-header" style="margin-bottom: 3rem; text-align: center;">
                    <?php the_title( '<h1 class="entry-title" style="font-size: clamp(2.5rem, 4vw, 4rem); margin-bottom: 1rem;">', '</h1>' ); ?>
                </header><!-- .entry-header -->                     

                <div class="entry-content" style="font-size: 1.1rem; line-height: 1.8; color: #444;">
                    <?php
                    the_content();
                    ?>
                </div><!-- .entry-content -->
            </article><!-- #post-<?php the_ID(); ?> -->
            <?php

        endwhile; // End of the loop.
        ?>
    </div>
</main><!-- #main -->

<?php
get_footer();
