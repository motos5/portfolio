<?php
if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

function wayup_setup() {
	
	load_theme_textdomain( 'wayup', get_template_directory() . '/languages' );

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

// Register Scripts and Stiles
function wayup_scripts() {
	// Styles
	wp_enqueue_style( 'wayup-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_enqueue_style( 'wayup-style-vendor', get_template_directory_uri() . '/assets/css/vendor.min.css', array(), _S_VERSION );
	wp_enqueue_style( 'wayup-style-main', get_template_directory_uri() . '/assets/css/main.min.css', array(), _S_VERSION );

	// Scripts
	wp_deregister_script( 'jquery' );
	wp_register_script( 'jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js');
	wp_enqueue_script( 'jquery');
	
	wp_register_script( 'goodshare', 'https://cdn.jsdelivr.net/npm/goodshare.js@4/goodshare.min.js', array(), _S_VERSION, true);
	wp_enqueue_script( 'wayup-js-vendor', get_template_directory_uri() . '/assets/js/vendor.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'wayup-js-svg', get_template_directory_uri() . '/assets/img/svg-sprite/svg-sprite.js', array(), _S_VERSION, false );
	wp_enqueue_script( 'wayup-js-main', get_template_directory_uri() . '/assets/js/common.min.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'wayup_scripts' );





// ================= MENU ============== //
// Register menu location
function wayup_menus() {
    $locations = array(
        'menu-header' => esc_html__('Header navigation', 'wayup'),
        'menu-footer-1' => esc_html__('Footer navigation 1', 'wayup'),
        'menu-footer-2' => esc_html__('Footer navigation 2', 'wayup'),
    );
    register_nav_menus($locations);
}
add_action('init', 'wayup_menus');



// For body_class(); function CSS Styles
function wayup_body_class( $classes ) {
    if ( is_page_template('default') ) {
        $classes[] = 'is-home';
    } else {
        $classes[] = 'inner-page';
    }
    return $classes;
}
add_filter( 'body_class', 'wayup_body_class' );


/*================= ACF Options page in Admin Panel =============*/
function wayup_acf_init() {
    if( function_exists('acf_add_options_page') ) {
        $option_page = acf_add_options_page(array(
            'page_title' 	=> esc_html__('Theme Settings', 'wayup'),
            'menu_title' 	=> esc_html__('Global Settings', 'wayup'),
            'menu_slug' 	=> 'theme-general-settings',
            'capability' 	=> 'edit_posts',
            'redirect' 	=> false
        ));
        acf_add_options_sub_page(array(
            'page_title' 	=> esc_html__('Footer Settings', 'wayup'),
            'menu_title'	=> esc_html__('Footer Settings', 'wayup'),
            'parent_slug'	=> 'theme-general-settings',
        ));
    }
}
add_action('acf/init', 'wayup_acf_init');