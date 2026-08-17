<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/classic-themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Minimalist
 * @since Minimalist 1.0
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="entry-header">
        <?php if ( is_singular() ) : ?>
            <?php the_title( '<h1 class="site-content-title">', '</h1>' ); ?>
        <?php else : ?>
            <?php the_title( '<h2 class="site-content-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' ); ?>
        <?php endif;?>
        <div class="entry-meta">
            <span class="author vcard">
                <span>Created by</span>
                <a class="url fn n" href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) );  ?>"><?php echo esc_html( get_the_author() ); ?></a>,
            </span>
            <span class="posted-on">
                <span>created on</span>
                <time datetime="<?php echo get_the_date('Y-m-d'); ?>" itemprop="datePublished"><?php echo get_the_date( 'Y-m-d' ); ?></time>,
            </span>
            <span class="edited-on">
                <span>edited on</span>
                <time datetime="<?php echo get_the_modified_date('Y-m-d'); ?>" itemprop="datePublished"><?php echo get_the_modified_date( 'Y-m-d' ); ?></time>
            </span>
        </div><!-- .entry-meta -->
    </header>
    <div class="entry-content">
        <?php the_content(); ?>
    </div>
    <footer class="entry-footer default-max-width">
        <?php edit_post_link(); ?>
    </footer>
</article>
