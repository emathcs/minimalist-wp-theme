<?php
/**
 * Documentation.
 */

get_header();
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
get_footer();
