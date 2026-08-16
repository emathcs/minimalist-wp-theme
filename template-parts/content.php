<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="entry-header">
        <?php if ( is_singular() ) : ?>
            <?php the_title( '<h1 class="site-content-title">', '</h1>' ); ?>
        <?php else : ?>
            <?php the_title( '<h2 class="site-content-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' ); ?>
        <?php endif;?>
    </header>
    <div class="entry-content">
        <?php the_content(); ?>
    </div>
    <footer class="entry-footer default-max-width">
        <?php edit_post_link(); ?>
    </footer>
</article>
