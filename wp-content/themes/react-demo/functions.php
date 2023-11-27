<?php

// Register JS scripts in the wordpress core
add_action('wp_enqueue_scripts', 'wp_react_demo_scripts');

// Register the student custom post type
add_action('init', 'wporg_custom_post_type');

function wporg_custom_post_type()
{
	register_post_type('student', [
			'labels'      => array(
				'name'          => __('Products', 'textdomain'),
				'singular_name' => __('Product', 'textdomain'),
			),
				'public'      => true,
				'has_archive' => true,
		]
	);
}

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