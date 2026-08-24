<?php
/**
 *
 * Template Name: Full Width Post
 * Template Post Type: post
 *
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/classic-themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Minimalist
 * @since Minimalist 1.0
 */

get_header('full-width');
?>

<?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : ?>
        <?php the_post(); ?>
        <?php get_template_part( 'template-parts/content', get_post_type() ); ?>
    <?php endwhile; ?>
<?php endif; ?>
<?php
if ( comments_open() || get_comments_number() ) {
    comments_template();
}
?>

<?php
get_footer('full-width');
