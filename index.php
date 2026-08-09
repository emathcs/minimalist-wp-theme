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
                <h1><?php bloginfo( 'name' ); ?></h1>
                <h2><?php bloginfo( 'description' ); ?></h2>
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
