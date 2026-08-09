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
        <div id="page" class="site container">
            <header id="masthead" class="site-header row">
                <nav id="site-navigation" class="main-navigation navbar navbar-expand-lg fixed-top navbar-scroll">
                    <div class="container">
                        <div class="site-branding">
                            <?php echo the_custom_logo(); ?>
                            <p class="site-title">
                                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="h1"><?php bloginfo( 'name' ); ?></a>
                            </p>
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
                    </div>
                </nav><!-- #site-navigation -->
            </header>
            <div id="content" class="site-content row">
                <div id="primary" class="content-area">
                    <main id="main" class="site-main">
                        <?php if ( have_posts() ) : ?>
                            <?php while ( have_posts() ) : ?>
                                <?php the_post(); ?>
                                <h3><?php the_title(); ?></h3>
                                <?php the_content(); ?>
                                <?php wp_link_pages(); ?>
                                <?php edit_post_link(); ?>
                            <?php endwhile; ?>
                            <?php
                            if ( get_next_posts_link() ) {
                                next_posts_link();
                            }
                            ?>
                            <?php
                            if ( get_previous_posts_link() ) {
                                previous_posts_link();
                            }
                            ?>
                        <?php else: ?>
                            <p>No posts found. :(</p>
                        <?php endif; ?>
                    </main>
                </div>
            </div>
            <footer id="colophon" class="site-footer row">
                <?php wp_footer(); ?>
            </footer>
        </div>
    </body>
</html>
