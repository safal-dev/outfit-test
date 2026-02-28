<?php
/**
 * Template part for displaying the hero section on the homepage
 *
 * @package Outfit_Creation
 */
?>
<!-- Hero Section with substantial negative space -->
<section class="hero" style="position: relative; overflow: hidden; z-index: 1;">
    
    <?php if ( get_theme_mod( 'hero_animation_toggle', true ) ) : ?>
    <div class="hero-bg-anim">
        <div class="anim-shape anim-shape-1"></div>
        <div class="anim-shape anim-shape-2"></div>
    </div>
    <?php endif; ?>

    <div class="hero-content" style="position: relative; z-index: 2;">
        <span class="hero-subtitle"><?php echo esc_html( get_theme_mod( 'hero_subtitle', 'Meticulously Crafted in Nepal' ) ); ?></span>
        <h1 class="hero-title"><?php echo esc_html( get_theme_mod( 'hero_title', 'Elevating the Art of Garment Manufacturing.' ) ); ?></h1>
        <a href="#discover" class="btn-primary"><?php echo esc_html( get_theme_mod( 'hero_button_text', 'Discover the Craft' ) ); ?></a>
    </div>
</section>
