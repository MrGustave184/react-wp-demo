<?php

add_action( 'wp_enqueue_scripts', 'wp_react_demo_scripts' );

function wp_react_demo_scripts()
{
    wp_enqueue_script(
        'react-demo-scripts',
        get_stylesheet_directory_uri() . '/build/index.js',
        ['wp-element'],
        time(), // for caching, go null for prod
        true
    );
}