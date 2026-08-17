<?php

/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/classic-themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Minimalist
 * @since Minimalist 1.0
 */

get_header();
?>

<?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : ?>
        <?php the_post(); ?>
        <?php get_template_part( 'template-parts/content', get_post_type() ); ?>
    <?php endwhile; ?>
    <?php get_template_part( 'template-parts/navigation' ); ?>
<?php else: ?>
    <?php get_template_part( 'template-parts/content', 'none' ); ?>
<?php endif; ?>

<?php
get_footer();
