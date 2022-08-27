<?php
add_action( 'wp_enqueue_scripts', 'finance_childtheme_enqueue_styles' );
function finance_childtheme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array('parent-style')
    );
}