<?php
/**
 * Posts navigation.
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>

<?php if ( get_previous_posts_link() || get_next_posts_link() ) : ?>
    <div class="site-pagination">
        <div class="site-pagination-previous">
            <?php
            if ( get_previous_posts_link() ) {
                previous_posts_link();
            }
            ?>
        </div>
        <div class="site-pagination-next">
            <?php
            if ( get_next_posts_link() ) {
                next_posts_link();
            }
            ?>
        </div>
    </div>
<?php endif; ?>
