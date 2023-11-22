# React Wordpress Demo
This is a demo project that integrates react with wordpress

## Installation
- Enqueue the window object wp-element as a dependancy
	```php
		wp_enqueue_script(
			'react-demo-scripts',
			get_stylesheet_directory_uri() .  '/build/index.js',
			['wp-element'],
			time(), // for caching, go null for prod
			true
		);
	```
- Create the package.json file in your theme folder and add @wordpress/scripts as a dev dependancy
	```
	npm init
	npm install @wordpress/scripts --save-dev
	```
- Add scripts to your package.json

    ```JSON
    "scripts": {
        "build": "wp-scripts build",
        "check-engines": "wp-scripts check-engines",
        "check-licenses": "wp-scripts check-licenses",
        "lint:css": "wp-scripts lint-style",
        "lint:js": "wp-scripts lint-js",
        "lint:pkg-json": "wp-scripts lint-pkg-json",
        "start": "wp-scripts start",
        "test:e2e": "wp-scripts test-e2e",
        "test:unit": "wp-scripts test-unit-js"
    },
    ```