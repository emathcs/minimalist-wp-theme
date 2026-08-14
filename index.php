<?php
get_header();
?>

<?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : ?>
        <?php the_post(); ?>
        <<?php echo ! is_front_page() ? 'h1' : 'p'; ?> class="site-content-title">
        <?php the_title(); ?>
        </<?php echo ! is_front_page() ? 'h1' : 'p'; ?>>
        <?php the_content(); ?>
        <?php wp_link_pages(); ?>
        <?php edit_post_link(); ?>
    <?php endwhile; ?>
    <?php if ( get_previous_posts_link() || get_next_posts_link() ) : ?>
        <div class="site-pagination">
            <div class="site-pagination-previous">
                <?php
                if ( get_previous_posts_link() ) {
                    previous_posts_link();
                }
                ?>
            </div>;
            <div class="site-pagination-next">
                <?php
                if ( get_next_posts_link() ) {
                    next_posts_link();
                }
                ?>
            </div>
        </div>
    <?php endif; ?>
    <?php
    if ( comments_open() || get_comments_number() ) {
        comments_template();
    }
    ?>
<?php else: ?>
    <p>No posts found. =(</p>
<?php endif; ?>

<?php
get_footer();
