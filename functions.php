<?php
use Carbon_Fields\Container;
use Carbon_Fields\Field;


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
		add_filter('wpcf7_form_elements', function ($content) {
			$content = preg_replace('/<(span).*?class="\s*(?:.*\s)?wpcf7-form-control-wrap(?:\s[^"]+)?\s*"[^\>]*>(.*)<\/\1>/i', '\2', $content);

			return $content;
		});
		require_once __DIR__ . '/assets/inc/custom-fields/post-meta.php';

	}

	add_action('carbon_fields_register_fields', 'crb_register_custom_fields');

	add_action('after_setup_theme', 'lawyers_setup');

	if( 'disable_gutenberg' ){
		remove_theme_support( 'core-block-patterns' ); // WP 5.5
	
		add_filter( 'use_block_editor_for_post_type', '__return_false', 100 );
	
		remove_action( 'wp_enqueue_scripts', 'wp_common_block_scripts_and_styles' );
	
		// Move the Privacy Policy help notice back under the title field.
		add_action( 'admin_init', function(){
			remove_action( 'admin_notices', [ 'WP_Privacy_Policy_Content', 'notice' ] );
			add_action( 'edit_form_after_title', [ 'WP_Privacy_Policy_Content', 'notice' ] );
		} );
	}
}


function lawyers_assets()
{
	wp_enqueue_style('vendor', get_template_directory_uri() . '/assets/css/vendor.css');
	wp_enqueue_style('fancybox', 'https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css');
	wp_enqueue_style('main', get_template_directory_uri() . '/assets/css/main.css');
	wp_enqueue_script('imask', 'https://unpkg.com/imask', array(), '1.0.0', true);
	wp_enqueue_script('fancybox', 'https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js', array(), '1.0.0', true);
	wp_enqueue_script('mailsent', get_template_directory_uri() . '/assets/js/mailsent.js', array(), '1.0.0', true);
	wp_enqueue_script('main', get_template_directory_uri() . '/assets/js/main.js', array(), '1.0.0', true);
}


add_action('wp_enqueue_scripts', 'lawyers_assets');


show_admin_bar(false);