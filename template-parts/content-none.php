<?php
/**
 * Template part for displaying a message that posts or page cannot be found.
 *
 * @link https://developer.wordpress.org/themes/classic-themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Minimalist
 * @since Minimalist 1.0
 */

?>

<section class="no-results not-found">
    <header class="page-header alignwide">
        <?php if ( is_search() ) : ?>
            <h1 class="page-title">
                <?php
                printf(
                    /* translators: %s: Search term. */
                    esc_html__( 'No results were found for your search', 'minimalist' ),
                );
                ?>
            </h1>
        <?php else : ?>
            <h1 class="page-title"><?php esc_html_e( 'Nothing here', 'minimalist' ); ?></h1>
        <?php endif; ?>
    </header><!-- .page-header -->
    <div class="page-content default-max-width">
        <?php if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>
            <div class="not-results-message">
                <?php
                printf(
                    '<p>' . wp_kses(
                        /* translators: %s: Link to WP admin new post page. */
                        __( 'Ready to publish your first post? <a href="%s">Get started here</a>.', 'minimalist' ),
                        array(
                            'a' => array(
                                'href' => array(),
                            ),
                        )
                    ) . '</p>',
                    esc_url( admin_url( 'post-new.php' ) )
                );
                ?>
            </div>
        <?php elseif ( is_search() ) : ?>
            <div class="not-results-message">
                <p><?php esc_html_e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'minimalist' ); ?></p>
            </div>
            <?php
            get_search_form(
                array(
                    'show_button' => false
                )
            );
            ?>
        <?php else : ?>
            <div class="not-found-message">
                <p><?php esc_html_e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'minimalist' ); ?></p>
            </div>
            <?php
            get_search_form(
                array(
                    'show_button' => false,
                    'show_form'   => true
                )
            );
            ?>
        <?php endif; ?>
    </div><!-- .page-content -->
</section><!-- .no-results -->
