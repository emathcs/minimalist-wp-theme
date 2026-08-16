<?php
/**
 *
 */
?>

<!doctype html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <?php wp_head(); ?>
    </head>
    <body>
        <div id="page" class="site">
            <div id="page-container" class="site-container container">
                <div id="page-container-row" class="site-container-row row">
                    <header id="masthead" class="site-header">
                        <div class="col-12 col-sm-12 site-header-container">
                            <?php get_template_part( 'template-parts/menu', 'menu', [ 'menu' => 'primary' ] ); ?>
                        </div>
                    </header>
                    <div id="content" class="site-content">
                        <div id="primary" class="content-area">
                            <main id="main" class="site-main col-12 col-sm-12">
