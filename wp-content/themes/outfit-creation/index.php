<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 *
 * @package Outfit_Creation
 */

get_header();
?>

<main id="primary" class="site-main section-padding">
    <div class="page-container" style="max-width: 900px; margin: 0 auto; padding-top: 6rem;">
        
        <?php if ( is_home() && ! is_front_page() ) : ?>
            <header>
                <h1 class="page-title screen-reader-text" style="font-size: 3rem; margin-bottom: 2rem;"><?php single_post_title(); ?></h1>
            </header>
        <?php endif; ?>

        <?php
        if ( have_posts() ) :
            /* Start the Loop */
            while ( have_posts() ) :
                the_post();
                ?>
                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?> style="margin-bottom: 4rem; padding-bottom: 4rem; border-bottom: 1px solid #eaeaea;">
                    <header class="entry-header" style="margin-bottom: 1.5rem;">
                        <?php
                        if ( is_singular() ) :
                            the_title( '<h1 class="entry-title" style="font-size: 3rem; margin-bottom: 1rem;">', '</h1>' );
                        else :
                            the_title( '<h2 class="entry-title" style="font-size: 2.2rem; margin-bottom: 1rem;"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
                        endif;

                        if ( 'post' === get_post_type() ) :
                            ?>
                            <div class="entry-meta" style="font-size: 0.9rem; color: #777; letter-spacing: 0.05em; text-transform: uppercase;">
                                <?php echo get_the_date(); ?>
                            </div><!-- .entry-meta -->
                        <?php endif; ?>
                    </header><!-- .entry-header -->

                    <div class="entry-summary" style="font-size: 1.1rem; line-height: 1.8; color: #555;">
                        <?php the_excerpt(); ?>
                        <a href="<?php echo esc_url( get_permalink() ); ?>" class="read-more-link" style="display: inline-block; margin-top: 1rem; font-weight: 500; font-size: 0.85rem; text-transform: uppercase; letter-spacing: 0.1em; color: var(--color-accent);">Read More &rarr;</a>
                    </div><!-- .entry-summary -->
                </article><!-- #post-<?php the_ID(); ?> -->
                <?php
            endwhile;

            the_posts_navigation();

        else :
            echo '<p>No content found.</p>';
        endif;
        ?>

    </div>
</main><!-- #main -->

<?php
get_footer();

