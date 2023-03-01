<?php
if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

function wpweb_setup() {
	
	load_theme_textdomain( 'wpweb', get_template_directory() . '/languages' );

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
			'wpweb_custom_background_args',
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
add_action( 'after_setup_theme', 'wpweb_setup' );

// Register Scripts and Stiles
function wpweb_scripts() {
	wp_enqueue_style( 'wpweb-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_enqueue_style( 'wpweb-googlefonts', 'https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;700&display=swap');
	wp_enqueue_style( 'wpweb-slick', get_template_directory_uri() . '/assets/css/frontend/slick.css', array(), _S_VERSION );
	wp_enqueue_style( 'wpweb-style-main', get_template_directory_uri() . '/assets/css/frontend/style.css', array(), _S_VERSION );

	// Подключение собственного файла jquery
	wp_deregister_script( 'jquery' );
	wp_register_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js', array(), _S_VERSION, true);
	wp_enqueue_script( 'jquery');
	wp_enqueue_script( 'wpweb-slickjs', get_template_directory_uri() . '/assets/js/frontend/slick.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'wpweb-mainjs', get_template_directory_uri() . '/assets/js/frontend/main.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'wpweb_scripts' );
/*
// ================= MENU ============== //
// Register menu location
function wpweb_menus() {
    $locations = array(
        'menu-header' => esc_html__('Header navigation', 'wpweb'),
    );
    register_nav_menus($locations);
}
add_action('init', 'wpweb_menus');

// Add CSS class for menu HTML teg <li>
function wpweb_css_class_li($classes) {
	$classes[] = 'menu__list-item';
	return $classes;
}
add_filter('nav_menu_css_class', 'wpweb_css_class_li', 10, 1);

// Add CSS class for menu HTML teg <a>
function wpweb_css_class_a($atts) {
	$atts['class'] = "menu__list-link";
	return $atts;
}
add_filter( 'nav_menu_link_attributes', 'wpweb_css_class_a');
// ================= END MENU ============== //'
*/