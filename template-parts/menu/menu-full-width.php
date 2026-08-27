<?php

$home = isset ( $args['home'] ) ? $args['home'] : '' ;
$menu = isset ( $args['menu'] ) ? $args['menu'] : 'none' ;
$template = isset ( $args['template'] ) ? $args['template'] : 'full-width' ;
$dark = ( 'home' === $home && 'full-width' === $template ) ? 'dark' : '';

?>

<nav id="site-navigation-<?php echo $menu; ?>" class="main-navigation navbar navbar-expand-lg site-navigation-<?php echo $menu; ?> fixed-top <?php echo $home; ?> col-12 col-sm-12">
    <div class="container">
        <?php
        get_template_part(
            'template-parts/menu/nav/content',
            '',
            array(
                'menu' => $menu,
                'template' => $template,
                'home' => $home,
                'dark' => $dark ,
                'description' => false
            )
        ); ?>
    </div>
</nav>
