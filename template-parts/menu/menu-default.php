<?php

$home = isset ( $args['home'] ) ? $args['home'] : '' ;
$menu = isset ( $args['menu'] ) ? $args['menu'] : 'none' ;

?>

<nav id="site-navigation-<?php echo $menu; ?>" class="main-navigation navbar navbar-expand-lg site-navigation-<?php echo $menu; ?>">
    <?php get_template_part( 'template-parts/menu/nav/content', '', array( 'menu' => $menu, 'template' => 'default', 'home' => $home, 'description' => true )); ?>
</nav>
