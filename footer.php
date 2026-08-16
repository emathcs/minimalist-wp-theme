                            </main>
                        </div>
                    </div>
                    <footer id="colophon" class="site-footer">
                        <div class="site-info">
                            <?php get_template_part( 'template-parts/menu', 'menu', [ 'menu' => 'secondary' ] ); ?>
                            <p class="site-info-powered-by">
                                <?php if ( get_theme_mod( 'minimalist_powered_by_text' ) ) : ?>
                                    <?php echo get_theme_mod( 'minimalist_powered_by_text' ); ?>
                                <?php else : ?>
                                    <a href="<?php echo esc_url( __( 'https://www.aomath.com' ) ); ?>" target="_blank">Powered by AOMath</a>
                                <?php endif; ?>
                            </p>
                        </div><!-- .site-info -->
                    </footer>
                </div>
            </div>
        </div>
        <?php wp_footer(); ?>
    </body>
</html>
