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
        <div id="page" class="site container">
            <div id="page-box" class="site-box row">
                <header id="masthead" class="site-header">
                    <div class="col-12 col-sm-12 site-header-container">
                        <?php get_template_part( 'template-parts/menu/menu', 'default', array( 'menu' => 'primary', 'template' => 'default', 'home' => $home ) ); ?>
                    </div>
                    <?php if ( $is_home && get_header_image() ) : ?>
                        <div class="site-header-image">
                            <img src="<?php header_image(); ?>" width="<?php echo esc_attr( get_custom_header()->width ); ?>" height="<?php echo esc_attr( get_custom_header()->height ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
                            <div class="overlay">
                            </div>
                        </div>
                    <?php endif; ?>
                </header>
                <div id="content" class="site-content <?php echo $home; ?>">
                    <div id="primary" class="content-area">
                        <main id="main" class="site-main col-12 col-sm-12">
