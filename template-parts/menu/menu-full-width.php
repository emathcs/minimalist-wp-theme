<?php

$home = isset ( $args['home'] ) ? $args['home'] : '' ;
$menu = isset ( $args['menu'] ) ? $args['menu'] : 'none' ;
$dbt  = isset ( $args['data-bs-theme'] ) ? $args['data-bs-theme'] : '' ;

?>

<nav id="site-navigation-<?php echo $menu; ?>" class="main-navigation navbar navbar-expand-lg site-navigation-<?php echo $menu; ?> fixed-top <?php echo $home; ?> col-12 col-sm-12">
    <div class="site-navigation-container container">
        <?php
        get_template_part(
            'template-parts/menu/nav/content',
            '',
            array(
                'menu'          => $menu,
                'template'      => 'full-width',
                'home'          => $home,
                'data-bs-theme' => $dbt,
            )
        ); ?>
    </div>
</nav>
