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

$posts_page_id = get_option( 'page_for_posts' );
$template_file = get_post_meta( $posts_page_id, '_wp_page_template', true );
$template     =  str_replace( ".php", "", str_replace ( "page-", "", $template_file ) );

get_header($template);
?>

<?php

if ( $wp_query->found_posts ) {
    get_search_form(
        array(
            'total' => (int) $wp_query->found_posts
        )
    );
}

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
get_footer($template);
