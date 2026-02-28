<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <!-- Outfit for Logo, Inter for Body, Playfair Display as fallback for Iowan Old Style headings -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500&family=Outfit:wght@400;600&family=Playfair+Display:ital,wght@0,400;0,600;1,400&display=swap" rel="stylesheet">
    
    <?php wp_head(); ?>

    <style>
        :root {
            --color-accent: <?php echo esc_attr( get_theme_mod( 'theme_accent_color', '#BFA175' ) ); ?>;
            --color-text: <?php echo esc_attr( get_theme_mod( 'theme_text_color', '#171717' ) ); ?>;
            --color-bg: <?php echo esc_attr( get_theme_mod( 'theme_bg_color', '#FFFFFF' ) ); ?>;
            --color-anim-1: <?php echo esc_attr( get_theme_mod( 'theme_anim_color_1', '#F2EDE4' ) ); ?>;
            --color-anim-2: <?php echo esc_attr( get_theme_mod( 'theme_anim_color_2', '#EAE4D9' ) ); ?>;
        }
    </style>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
    <a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'outfit-creation' ); ?></a>

    <header id="masthead" class="site-header">
        <div class="header-inner">
            <div class="site-branding">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="logo-text">Outfit Creation.</a>
            </div><!-- .site-branding -->

            <nav id="site-navigation" class="main-navigation">
                <?php
                wp_nav_menu(
                    array(
                        'theme_location' => 'menu-1',
                        'menu_id'        => 'primary-menu',
                        'fallback_cb'    => false, // Don't show page list if menu isn't set
                    )
                );
                ?>
            </nav><!-- #site-navigation -->
        </div>
    </header><!-- #masthead -->

