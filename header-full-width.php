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

$is_home = 'page' === get_post_type() && is_front_page();
$home = $is_home ? 'home' : '' ;

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
            <?php if ( $is_home && get_header_image() ) : ?>
                <style>
                    .site-header.home {
                        background-image: url('<?php header_image(); ?>');
                    }
                </style>
            <?php endif; ?>
            <header id="masthead" class="site-header container-fluid <?php echo $home; ?>">
                <div class="row">
                    <?php get_template_part( 'template-parts/menu/menu', 'full-width', array( 'menu' => 'primary' , 'template' => 'full-width', 'home' => $home ) ); ?>
                </div>
                <?php if ( 'page' === get_post_type() && is_front_page() && get_header_image() ) : ?>
                    <div class="shadow">
                    </div>
                <?php endif; ?>
            </header>
            <div id="content" class="site-content container">
                <div id="primary" class="content-area full-width row">
                    <main id="main" class="site-main col-12 col-sm-12">
