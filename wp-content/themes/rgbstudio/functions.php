<?php
/**
 * WL RGBStudio Theme
 */

if ( ! defined( '_S_VERSION' ) ) {
	define( '_S_VERSION', '1.0.0' );
}

function rgbstudio_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('align-wide');
    add_theme_support('responsive-embeds');
    add_theme_support('custom-logo');
}
add_action( 'after_setup_theme', 'rgbstudio_setup' );

function rgbstudio_scripts() {
	wp_enqueue_style( 'rgbstudio-style', get_stylesheet_uri(), array(), _S_VERSION );
    wp_enqueue_style( 'rgbstudio-reset', get_template_directory_uri() . '/assets/css/reset.css', array(), _S_VERSION );
    wp_enqueue_style( 'rgbstudio-fonts', get_template_directory_uri() . '/assets/fonts/GothamPro/font.css', array(), _S_VERSION );
    wp_enqueue_style( 'rgbstudio-main', get_template_directory_uri() . '/assets/css/main.css', array(), _S_VERSION );
    wp_enqueue_script( 'rgbstudio-main', get_template_directory_uri() . '/assets/js/main.js', array(), _S_VERSION, true );
}
add_action( 'wp_enqueue_scripts', 'rgbstudio_scripts' );

add_filter('show_admin_bar', '__return_false');

