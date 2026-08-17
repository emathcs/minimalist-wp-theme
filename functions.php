<?php
/**
 * Minimalist functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package minimalist
 */

// Theme version.
if ( ! defined( 'T_VERSION' ) ) {
    // Replace the version number of the theme on each release.
    define( 'T_VERSION', '0.1.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 */
function minimalist_setup() {
    // Posts and comments RSS feed links to head.
    add_theme_support( 'automatic-feed-links' );

    // Document title.
    add_theme_support( 'title-tag' );

    /*
     * Enable support for Post Thumbnails on posts and pages.
     *
     * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
     */
    add_theme_support( 'post-thumbnails' );

    // Primary menu: wp_nav_menu().
    register_nav_menus(
        array(
            'primary'   => esc_html__( 'Primary', 'minimalist' ),
            'secondary' => esc_html__( 'Secondary', 'minimalist' ),
        )
    );

    /*
     * Switch default core markup for search form, comment form, and comments
     * to output valid HTML5.
     */
    add_theme_support(
        'html5',
        array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
            'style',
            'script',
        )
    );

    // Add theme support for selective refresh for widgets.
    add_theme_support( 'customize-selective-refresh-widgets' );

    /**
     * Add support for core custom logo.
     *
     * @link https://codex.wordpress.org/Theme_Logo
     */
    add_theme_support(
        'custom-logo',
        array(
            'height'      => 250,
            'width'       => 250,
            'flex-width'  => true,
            'flex-height' => true,
        )
    );
}
add_action( 'after_setup_theme', 'minimalist_setup' );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function minimalist_widgets_init() {
    register_sidebar(
        array(
            'name'          => esc_html__( 'Sidebar', 'minimalist' ),
            'id'            => 'sidebar-1',
            'description'   => esc_html__( 'Add widgets here.', 'minimalist' ),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget'  => '</section>',
            'before_title'  => '<h2 class="widget-title">',
            'after_title'   => '</h2>',
        )
    );
}
add_action( 'widgets_init', 'minimalist_widgets_init' );

// Bootstrap version.
if ( ! defined( 'BS_VERSION' ) ) {
    define( 'BS_VERSION', '5.3.8' );
}

/**
 * Enqueue scripts and styles.
 */
function minimalist_scripts() {
    wp_enqueue_style( 'minimalist-style', get_stylesheet_uri(), array(), T_VERSION );
    wp_enqueue_style( 'bootstrap_css', get_stylesheet_directory_uri() . '/assets/css/bootstrap.min.css', array(), BS_VERSION );
    wp_enqueue_style( 'minimalist_css', get_stylesheet_directory_uri() . '/assets/css/minimalist.css', array(), T_VERSION );
    wp_enqueue_style( 'montserrat_font', get_stylesheet_directory_uri() . '/assets/fonts/montserrat.css', array(), T_VERSION );
    wp_enqueue_script( 'bootstrap_js', get_stylesheet_directory_uri() . '/assets/js/bootstrap.min.js', array(), BS_VERSION );
}
add_action( 'wp_enqueue_scripts', 'minimalist_scripts' );

// Menu
require get_template_directory() . '/wp-includes/class-custom-walker-nav-menu.php';

// Powered by section
function minimalist_admin_customize_register( $wp_customize ) {

    $wp_customize->add_section( 'minimalist_powered_by' , array(
        'title'      => __( 'Powered by', 'minimalist' ),
        'priority'   => 500,
    ));

    $wp_customize->add_setting( 'minimalist_powered_by_text', array());
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'minimalist_powered_by_text_control',
            array(
                'label'    => __( 'Text ', 'minimalist' ),
                'section'  => 'minimalist_powered_by',
                'settings' => 'minimalist_powered_by_text',
                'type'     => 'textarea'
            )
        )
    );

}
add_action( 'customize_register', 'minimalist_admin_customize_register' );

// Comment box
function minimalist_wrap_comment_text( $comment_text ) {
    return '<div class="alert alert-light"><p>' . $comment_text . '</p></div>';
}
add_filter( 'comment_text', 'minimalist_wrap_comment_text' );
