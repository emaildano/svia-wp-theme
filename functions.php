<?php

/**
 * Theme functions and definitions
 *
 * @package HelloElementorChild
 */

/**
 * Load child theme css and optional scripts
 *
 * @return void
 */
function svia_enqueue_scripts()
{
	wp_enqueue_style(
		'svia-wp-theme-styles',
		get_stylesheet_directory_uri() . '/style.css',
		[],
		'0.0.0'
	);

	wp_enqueue_style('normalize-css', 'https://cdn.jsdelivr.net/npm/normalize.css@latest/normalize.css', [], 'latest');
	wp_enqueue_script('svia-wp-theme-scripts', get_theme_file_uri() . '/main.js', array('algolia-cdn-instantsearch'), '0.0.0', true);
}

add_action('wp_enqueue_scripts', 'svia_enqueue_scripts', 20);
