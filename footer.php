                            </main>
                        </div>
                    </div>
                    <footer id="colophon" class="site-footer">
                        <div class="site-info">
                            <nav id="site-navigation-footer" class="main-navigation navbar navbar-expand-lg site-footer-menu">
                                <div class="navbar-collapse justify-content-center">
                                    <?php
                                    if ( has_nav_menu( 'secondary' ) ) {
                                        wp_nav_menu(
                                            array(
                                                'theme_location'  => 'secondary',
                                                'menu_id'         => 'footer-menu',
                                                'container_id'    => 'navbarNav',
                                                'container_class' => 'navbar-collapse justify-content-center',
                                                'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                                                'walker'          => new Custom_Walker_Nav_Menu(),
                                                'container'       => 'ul',
                                                'menu_class'      => 'navbar-nav'
                                            )
                                        );
                                    }
                                    ?>
                                </div>
                            </nav>
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
