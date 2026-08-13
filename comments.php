<?php
/**
 * The template for displaying comments
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package underscore
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() ) {
    return;
}
?>

<div id="comments" class="comments-area">
    <?php // You can start editing here -- including this comment!  ?>
    <?php $minimalist_comment_count = get_comments_number(); ?>
    <?php if ( have_comments() && $minimalist_comment_count ) : ?>
        <h2 class="comments-title">Comments</h2>
        <?php the_comments_navigation(); ?>
        <div class="comment-list">
            <?php
            $comments = get_comments(
                array(
                    'status' => 'approve',
                    'post_id' => get_the_ID(),
                )
            );
            wp_list_comments(
                array(
                    'style'            => 'div',
                    'short_ping'       => true,
                    'avatar_size'      => 32,
                ),
                $comments,
            );
            ?>
        </div><!-- .comment-list -->
        <?php the_comments_navigation(); ?>
        <?php // If comments are closed and there are comments, let's leave a little note, shall we? ?>
        <?php if ( ! comments_open() ) : ?>
            <p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'minimalist' ); ?></p>
        <?php endif; ?>
    <?php endif; ?>
    <?php // Check for have_comments(). ?>
    <?php comment_form(); ?>
</div><!-- #comments -->
