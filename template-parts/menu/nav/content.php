<?php

$home = isset ( $args['home'] ) ? $args['home'] : '' ;
$menu = isset ( $args['menu'] ) ? $args['menu'] : 'none' ;
$template = isset ( $args['template'] ) ? $args['template'] : 'default' ;
$description = isset ( $args['description'] ) ? $args['description'] : true ;

$classes = array(
    'none'      => '',
    'primary'   => 'justify-content-end collapse',
    'secondary' => 'justify-content-center',
);

?>

<?php if ( 'primary' === $menu ) : ?>
    <div class="site-branding">
        <?php echo the_custom_logo(); ?>
        <?php $h1p = is_front_page() ? 'h1' : 'p'; ?>
        <?php echo '<' . $h1p . ' class="site-title"><a href="' . esc_url( home_url( '/' ) ) . '" rel="home">' . get_bloginfo( 'name' ) . '</a></' . $h1p . '>'; ?>
        <?php  if ( $description && ( get_bloginfo( 'description', 'display' ) || is_customize_preview() ) ) : ?>
            <p class="site-description"><?php echo get_bloginfo( 'description', 'display' ); ?></p>
        <?php endif; ?>
    </div>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav-<?php echo $menu ?>" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation" data-bs-theme="<?php echo $dark; ?>" id="menu-button">
        <span class="navbar-toggler-icon"></span>
    </button>
<?php endif; ?>
<div class="navbar-links navbar-collapse <?php echo $classes[$menu]; ?> navbarNav-<?php echo $menu; ?> <?php echo $home; ?>" id="navbarNav-<?php echo $menu; ?>">
    <?php
    if ( has_nav_menu( $menu ) ) {
        wp_nav_menu(
            array(
                'theme_location'  => $menu,
                'menu_id'         => 'menu-' . $menu,
                'container_id'    => 'navbarNav-' . $menu,
                'container_class' => 'navbarNav-' . $menu,
                'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                'walker'          => new Custom_Walker_Nav_Menu(),
                'container'       => 'ul',
                'menu_class'      => 'navbar-nav'
            )
        );
    }
    ?>
</div>
