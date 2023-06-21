<?php
if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

function zhovner_setup() {
	
	load_theme_textdomain( 'zhovner', get_template_directory() . '/languages' );

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
			'zhovner_custom_background_args',
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
			'height'      => 50,
			'width'       => 100,
			'flex-width'  => false,
			'flex-height' => false,
		)
	);
}
add_action( 'after_setup_theme', 'zhovner_setup' );

// Register Scripts and Stiles
function zhovner_scripts() {
	// Stiles
	wp_enqueue_style( 'zhovner-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_enqueue_style( 'baguettebox', get_template_directory_uri() . '/assets/css/frontend/baguetteBox.min.css', array(), _S_VERSION );
	wp_enqueue_style( 'zhovner-style-main', get_template_directory_uri() . '/assets/css/frontend/style.css', array(), _S_VERSION );

	// Scripts
	wp_enqueue_script('jquery');
	wp_enqueue_script( 'baguettebox', get_template_directory_uri() . '/assets/js/frontend/baguetteBox.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'list-js', get_template_directory_uri() . '/assets/js/frontend/list.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'mixitup-js', get_template_directory_uri() . '/assets/js/frontend/mixitup.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'zhovner-style-main', get_template_directory_uri() . '/assets/js/frontend/main.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'zhovner_scripts' );

// ================= MENU ============== //
// Register menu location
function zhovner_menus() {
    $locations = array(
        'menu-header' => esc_html__('Header navigation', 'zhovner'),
        'menu-footer' => esc_html__('Footer navigation', 'zhovner'),
    );
    register_nav_menus($locations);
}
add_action('init', 'zhovner_menus');
/*
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