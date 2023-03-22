<?php
if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

function elvinci_setup() {
	
	load_theme_textdomain( 'elvinci', get_template_directory() . '/languages' );

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
			'elvinci_custom_background_args',
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
add_action( 'after_setup_theme', 'elvinci_setup' );

// Register Scripts and Stiles
function elvinci_scripts() {
	// Stiles
	wp_enqueue_style( 'elvinci-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_enqueue_style( 'elvinci-google-fonts', 'https://fonts.googleapis.com/css2?family=League+Spartan:wght@400;600;700&family=Poppins:wght@300;500;600;700&display=swap', array(), _S_VERSION );
	wp_enqueue_style( 'elvinci-style-main', get_template_directory_uri() . '/assets/css/frontend/style.min.css', array(), _S_VERSION );

	// Scripts
	wp_enqueue_script('jquery');
	wp_enqueue_script( 'elvinci-style-main', get_template_directory_uri() . '/assets/js/frontend/main.min.js', array(), _S_VERSION, true );

	// Object for URL in JavaScript
    $wnm_custom = array( 'elvinci-style-main' => get_template_directory_uri());
    wp_localize_script( 'elvinci-style-main', 'wnm_custom', $wnm_custom );


	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'elvinci_scripts' );
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