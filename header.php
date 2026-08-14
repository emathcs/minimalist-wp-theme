<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?php wp_title( '|', true, 'right' ); ?></title>
        <link rel="stylesheet" href="<?php echo esc_url( get_stylesheet_uri() ); ?>" type="text/css" />
        <?php wp_head(); ?>
    </head>
    <body>
        <div id="page" class="site">
            <div id="page-container" class="site-container container">
                <div id="page-container-row" class="site-container-row row">

                    <header id="masthead" class="site-header">
                        <div class="col-12 col-sm-12 site-header-container">
                            <nav id="site-navigation" class="main-navigation navbar navbar-expand-lg navbar-scroll">
                                <div class="site-branding">
                                    <?php echo the_custom_logo(); ?>
                                    <<?php echo is_front_page() ? 'h1' : 'p'; ?> class="site-title">
                                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
                                    </<?php echo is_front_page() ? 'h1' : 'p'; ?>>
                                    <?php  if ( get_bloginfo( 'description', 'display' ) || is_customize_preview() ) : ?>
                                        <p class="site-description"><?php echo get_bloginfo( 'description', 'display' ); ?></p>
                                    <?php endif; ?>
                                </div><!-- .site-branding -->
                                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon"></span>
                                </button>
                                <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                                    <?php
                                    if ( has_nav_menu( 'primary' ) ) {
                                        wp_nav_menu(
                                            array(
                                                'theme_location'  => 'primary',
                                                'menu_id'         => 'primary-menu',
                                                'container_id'    => 'navbarNav',
                                                'container_class' => 'navbar-collapse collapse justify-content-end',
                                                'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                                                'walker'          => new Custom_Walker_Nav_Menu(),
                                                'container'       => 'ul',
                                                'menu_class'      => 'navbar-nav'
                                            )
                                        );
                                    }
                                    ?>
                                </div>
                            </nav><!-- #site-navigation -->
                        </div>
                    </header>
                    <div id="content" class="site-content">
                        <div id="primary" class="content-area">
                            <main id="main" class="site-main col-12 col-sm-12">
