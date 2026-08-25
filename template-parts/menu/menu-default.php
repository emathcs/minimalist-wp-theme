<?php

$menu = isset ( $args['menu'] ) ? $args['menu'] : null ;

?>

<nav id="site-navigation-<?php echo $menu; ?>" class="main-navigation navbar navbar-expand-lg site-navigation-<?php echo $menu; ?>">
    <?php get_template_part( 'template-parts/menu/nav/content', '', array( 'menu' => $menu, 'description' => false )); ?>
</nav>
