<?php
/**
 * Outfit Creation functions and definitions
 *
 * @package Outfit_Creation
 */

if ( ! function_exists( 'outfit_creation_setup' ) ) :
    /**
     * Sets up theme defaults and registers support for various WordPress features.
     */
    function outfit_creation_setup() {
        // Add default posts and comments RSS feed links to head.
        add_theme_support( 'automatic-feed-links' );

        // Let WordPress manage the document title.
        add_theme_support( 'title-tag' );

        // Enable support for Post Thumbnails on posts and pages.
        add_theme_support( 'post-thumbnails' );

        // This theme uses wp_nav_menu() in one location.
        register_nav_menus(
            array(
                'menu-1' => esc_html__( 'Primary', 'outfit-creation' ),
            )
        );

        // Switch default core markup for search form, comment form, and comments to output valid HTML5.
        add_theme_support(
            'html5',
            array(
                'search-form',
                'comment-form',
                'comment-list',
                'gallery',
                'caption',
                'style',
                'script',
            )
        );
    }
endif;
add_action( 'after_setup_theme', 'outfit_creation_setup' );

/**
 * Enqueue scripts and styles.
 */
function outfit_creation_scripts() {
    wp_enqueue_style( 'outfit-creation-style', get_stylesheet_uri(), array(), '1.0.0' );
}
add_action( 'wp_enqueue_scripts', 'outfit_creation_scripts' );

/**
 * Register Theme Customizer settings.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function outfit_creation_customize_register( $wp_customize ) {
    // 1. Hero Section Settings
    $wp_customize->add_section( 'outfit_creation_hero_section', array(
        'title'    => __( 'Hero Section', 'outfit-creation' ),
        'priority' => 30,
    ) );

    // Hero Subtitle
    $wp_customize->add_setting( 'hero_subtitle', array(
        'default'           => 'Meticulously Crafted in Nepal',
        'sanitize_callback' => 'sanitize_text_field',
    ) );
    $wp_customize->add_control( 'hero_subtitle', array(
        'label'   => __( 'Hero Subtitle', 'outfit-creation' ),
        'section' => 'outfit_creation_hero_section',
        'type'    => 'text',
    ) );

    // Hero Title
    $wp_customize->add_setting( 'hero_title', array(
        'default'           => 'Elevating the Art of Garment Manufacturing.',
        'sanitize_callback' => 'sanitize_text_field',
    ) );
    $wp_customize->add_control( 'hero_title', array(
        'label'   => __( 'Hero Title', 'outfit-creation' ),
        'section' => 'outfit_creation_hero_section',
        'type'    => 'textarea',
    ) );

    // Hero Button Text
    $wp_customize->add_setting( 'hero_button_text', array(
        'default'           => 'Discover the Craft',
        'sanitize_callback' => 'sanitize_text_field',
    ) );
    $wp_customize->add_control( 'hero_button_text', array(
        'label'   => __( 'Hero Button Text', 'outfit-creation' ),
        'section' => 'outfit_creation_hero_section',
        'type'    => 'text',
    ) );

    // Hero Background Animation Toggle
    $wp_customize->add_setting( 'hero_animation_toggle', array(
        'default'           => true,
        'sanitize_callback' => 'rest_sanitize_boolean',
    ) );
    $wp_customize->add_control( 'hero_animation_toggle', array(
        'label'   => __( 'Enable Subtle Background Animation', 'outfit-creation' ),
        'section' => 'outfit_creation_hero_section',
        'type'    => 'checkbox',
    ) );

    // 2. Color Settings (Accent Color)
    $wp_customize->add_setting( 'theme_accent_color', array(
        'default'           => '#BFA175',
        'sanitize_callback' => 'sanitize_hex_color',
    ) );
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'theme_accent_color', array(
        'label'   => __( 'Accent Color', 'outfit-creation' ),
        'section' => 'colors', // Built-in colors section
    ) ) );

    // Text Color
    $wp_customize->add_setting( 'theme_text_color', array(
        'default'           => '#171717',
        'sanitize_callback' => 'sanitize_hex_color',
    ) );
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'theme_text_color', array(
        'label'   => __( 'Main Text Color', 'outfit-creation' ),
        'section' => 'colors',
    ) ) );
    
    // Background Color
    $wp_customize->add_setting( 'theme_bg_color', array(
        'default'           => '#FFFFFF',
        'sanitize_callback' => 'sanitize_hex_color',
    ) );
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'theme_bg_color', array(
        'label'   => __( 'Background Color', 'outfit-creation' ),
        'section' => 'colors',
    ) ) );

    // Animation Color 1
    $wp_customize->add_setting( 'theme_anim_color_1', array(
        'default'           => '#F2EDE4',
        'sanitize_callback' => 'sanitize_hex_color',
    ) );
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'theme_anim_color_1', array(
        'label'   => __( 'Animation Color 1', 'outfit-creation' ),
        'section' => 'colors',
    ) ) );

    // Animation Color 2
    $wp_customize->add_setting( 'theme_anim_color_2', array(
        'default'           => '#EAE4D9',
        'sanitize_callback' => 'sanitize_hex_color',
    ) );
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'theme_anim_color_2', array(
        'label'   => __( 'Animation Color 2', 'outfit-creation' ),
        'section' => 'colors',
    ) ) );
}
add_action( 'customize_register', 'outfit_creation_customize_register' );

