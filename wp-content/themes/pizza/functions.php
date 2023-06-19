<?php
if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

function pizza_setup() {
	
	load_theme_textdomain( 'pizza', get_template_directory() . '/languages' );

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
			'pizza_custom_background_args',
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
add_action( 'after_setup_theme', 'pizza_setup' );

// Register Scripts and Stiles
function pizza_scripts() {
	// Stiles
	wp_enqueue_style( 'pizza-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_enqueue_style( 'pizza-googlefonts', 'https://fonts.googleapis.com/css2?family=Montserrat:wght@900&family=Roboto:wght@300&display=swap');
	wp_enqueue_style( 'pizza-style-main', get_template_directory_uri() . '/assets/css/frontend/style.min.css', array(), _S_VERSION );

	// Scripts
	wp_enqueue_script('jquery');
	wp_enqueue_script( 'pizza-style-main', get_template_directory_uri() . '/assets/js/frontend/main.min.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'pizza_scripts' );
/*
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