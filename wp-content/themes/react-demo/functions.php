<?php

// Register JS scripts in the wordpress core
add_action('wp_enqueue_scripts', 'wp_react_demo_scripts');

add_theme_support('post-thumbnails');

function wp_react_demo_scripts()
{
    wp_enqueue_script(
        'react-demo-scripts',
        get_theme_file_uri('/build/index.js'),
        ['wp-element'],
        time(), // for caching, go null for prod
        true
    );
}