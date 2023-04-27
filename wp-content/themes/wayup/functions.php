<?php
if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}
/*
function o_marketing_setup() {
	
	load_theme_textdomain( 'wawe', get_template_directory() . '/languages' );

	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
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
			'o_marketing_custom_background_args',
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
add_action( 'after_setup_theme', 'o_marketing_setup' );

// Register Scripts and Stiles
function o_marketing_scripts() {
	wp_enqueue_style( 'wawe-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_enqueue_style( 'wawe-googlefonts', 'https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@1,300&family=Montserrat:wght@500;700&family=Open+Sans:wght@300;400&family=Raleway:wght@700&display=swap');
	wp_enqueue_style( 'style-name', get_template_directory_uri() . '/assets/css/frontend/style.css', array(), _S_VERSION );

	wp_enqueue_script( 'wawe-mainjs', get_template_directory_uri() . '/assets/js/frontend/main.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'o_marketing_scripts' );

// ================= MENU ============== //
// Register menu location
function o_marketing_menus() {
    $locations = array(
        'menu-header' => esc_html__('Header navigation', 'o_marketing'),
    );
    register_nav_menus($locations);
}
add_action('init', 'o_marketing_menus');

// Add CSS class for menu HTML teg <li>
function o_marketing_css_class_li($classes) {
	$classes[] = 'menu__list-item';
	return $classes;
}
add_filter('nav_menu_css_class', 'o_marketing_css_class_li', 10, 1);

// Add CSS class for menu HTML teg <a>
function o_marketing_css_class_a($atts) {
	$atts['class'] = "menu__list-link";
	return $atts;
}
add_filter( 'nav_menu_link_attributes', 'o_marketing_css_class_a');
// ================= END MENU ============== //'
*/