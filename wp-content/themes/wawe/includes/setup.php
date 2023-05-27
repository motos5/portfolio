<?php
function wawe_setup() {
	
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
			'wawe_custom_background_args',
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
add_action( 'after_setup_theme', 'wawe_setup' );

// ================= MENU ============== //
// Register menu location
function wawe_menus() {
    $locations = array(
        'menu-header' => esc_html__('Header navigation', 'wawe'),
    );
    register_nav_menus($locations);
}
add_action('init', 'wawe_menus');

// Add CSS class for menu HTML teg <li>
function wawe_css_class_li($classes) {
	$classes[] = 'menu__list-item';
	return $classes;
}
add_filter('nav_menu_css_class', 'wawe_css_class_li', 10, 1);

// Add CSS class for menu HTML teg <a>
function wawe_css_class_a($atts) {
	$atts['class'] = "menu__list-link";
	return $atts;
}
add_filter( 'nav_menu_link_attributes', 'wawe_css_class_a');
// ================= END MENU ============== //