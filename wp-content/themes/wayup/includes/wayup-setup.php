<?php
function wayup_setup() {
	
	load_theme_textdomain( 'wayup', get_template_directory() . '/languages' );

	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );

	// Add Image Size
	add_image_size( 'archive-testimonials', 225, 230, true );
	add_image_size( 'single-services', 1170, 635, true );
	add_image_size( 'archive-cases', 438, 455, true );
	add_image_size( 'archive-news', 409, 266, true );
	add_image_size( 'single-news', 1920, 740, true );

	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);
	add_theme_support(
		'custom-background',
		apply_filters(
			'wayup_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);
	add_theme_support( 'customize-selective-refresh-widgets' );

	// Logotip
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 60,
			'width'       => 80,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'wayup_setup' );