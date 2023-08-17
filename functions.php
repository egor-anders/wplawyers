<?php

if (!function_exists('lawyers_setup')) {
	function lawyers_setup()
	{
		add_theme_support('custom-logo', [
			'height' => 80,
			'width' => 80,
			'flex-width' => false,
			'flex-height' => false,
			'header-text' => '',
			'unlink-homepage-logo' => false, // WP 5.5
		]);

		add_theme_support('title-tag');
		add_theme_support('post-thumbnails');
	}

	add_action('after_setup_theme', 'lawyers_setup');
}


function lawyers_assets()
{
	wp_enqueue_style('vendor', get_template_directory_uri() . '/assets/css/vendor.css');
	wp_enqueue_style('fancybox', 'https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css');
	wp_enqueue_style('main', get_template_directory_uri() . '/assets/css/main.css');
	wp_enqueue_script('imask', 'https://unpkg.com/imask', array(), '1.0.0', true);
	wp_enqueue_script('fancybox', 'https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js', array(), '1.0.0', true);
	wp_enqueue_script('main', get_template_directory_uri() . '/assets/js/main.js', array(), '1.0.0', true);
}


add_action('wp_enqueue_scripts', 'lawyers_assets');


show_admin_bar(false);