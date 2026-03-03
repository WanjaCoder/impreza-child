<?php
function impresa_child_assets() {

    wp_enqueue_style(
        'parent-style',
        get_template_directory_uri() . '/style.css'
    );

    wp_enqueue_style(
        'child-custom',
        get_stylesheet_directory_uri() . '/assets/css/custom.css',
        array('parent-style')
    );

    wp_enqueue_script(
        'child-custom-js',
        get_stylesheet_directory_uri() . '/assets/js/custom.js',
        array('jquery'),
        null,
        true
    );
}
add_action('wp_enqueue_scripts', 'impresa_child_assets');
