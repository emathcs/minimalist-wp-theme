<?php
/**
 * The header.
 *
 * This is the template that displays all of the <head> section and everything up until main.
 *
 * @link https://developer.wordpress.org/themes/classic-themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Minimalist
 * @since Minimalist 1.0
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
        <?php wp_body_open(); ?>
        <div id="page" class="site full-width">
            <header id="masthead" class="site-header container-fluid" style="background-image: url('<?php header_image(); ?>');">
                <div class="row">
                    <?php get_template_part( 'template-parts/menu/menu', 'full-width', array( 'menu' => 'primary' , 'layout' => 'full-width' ) ); ?>
                </div>
            </header>

            <div id="content" class="site-content full-width container">
                <div id="primary" class="content-area row">
                    <main id="main" class="site-main col-12 col-sm-12">
