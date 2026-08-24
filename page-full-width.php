<?php
/* Template Name: Full Width Variant */

/**
 * The template for displaying all pages
 *
 * @link https://developer.wordpress.org/themes/classic-themes/basics/template-hierarchy/#single-page
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
        <?php get_template_part( 'template-parts/content', 'page' ); ?>
    <?php endwhile; ?>
<?php endif; ?>

<?php
get_footer('full-width');
