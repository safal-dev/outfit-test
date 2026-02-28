<?php
/**
 * Template part for displaying the hero section on the homepage
 *
 * @package Outfit_Creation
 */
?>
<!-- Hero Section with substantial negative space -->
<section class="hero">
    <div class="hero-content">
        <span class="hero-subtitle"><?php echo esc_html( get_theme_mod( 'hero_subtitle', 'Meticulously Crafted in Nepal' ) ); ?></span>
        <h1 class="hero-title"><?php echo esc_html( get_theme_mod( 'hero_title', 'Elevating the Art of Garment Manufacturing.' ) ); ?></h1>
        <a href="#discover" class="btn-primary"><?php echo esc_html( get_theme_mod( 'hero_button_text', 'Discover the Craft' ) ); ?></a>
    </div>
</section>
