<?php
/**
 * The front page template file
 *
 * If the user has selected a static page for their homepage, this is what will
 * appear. Currently, we are hardcoding the landing page components here.
 *
 * @package Outfit_Creation
 */

get_header();
?>

<main id="primary" class="site-main">

    <?php
    // Top Hero Section
    get_template_part( 'template-parts/home', 'hero' );

    // Value Proposition Section
    get_template_part( 'template-parts/home', 'about' );

    // Signature Collections block
    get_template_part( 'template-parts/home', 'collections' );
    ?>

</main><!-- #main -->

<?php
get_footer();
