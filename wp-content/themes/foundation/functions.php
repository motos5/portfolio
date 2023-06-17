<?php

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

// Навигационное меню
register_nav_menus(
	array(
		'menu-header' => esc_html__( 'Header Menu', 'elementor' ),
		'menu-footer' => esc_html__( 'Footer Menu', 'elementor' ),
	)
);

// Добавляем CSS класс к тегам <a> в header.php
function elementor_link_atts($atts) {
	$atts['class'] = "nav-link";
	return $atts;
}

function elementor_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'elementor_content_width', 640 );
}
add_action( 'after_setup_theme', 'elementor_content_width', 0 );

function elementor_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'elementor' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'elementor' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'elementor_widgets_init' );




/* ACF Options page in admin panel */
function elementor_acf_init() {
    if( function_exists('acf_add_options_page') ) {
        $option_page = acf_add_options_page(array(
            'page_title' 	=> esc_html__('General Settings', 'prodev'),
            'menu_title' 	=> esc_html__('Global Settings', 'prodev'),
            'menu_slug' 	=> 'general-settings',
            'capability' 	=> 'edit_posts',
            'redirect' 	=> false
        ));
        acf_add_options_sub_page(array(
            'page_title' 	=> esc_html__('Footer Settings', 'prodev'),
            'menu_title'	=> esc_html__('Footer Settings', 'prodev'),
            'parent_slug'	=> 'general-settings',
        ));
    }
}
add_action('acf/init', 'elementor_acf_init');

// Setup
require get_template_directory() . '/inc/elementor-setup.php';
// Enqueue
require get_template_directory() . '/inc/elementor-enqueue.php';

// TGM Script
require get_template_directory() . '/inc/class-tgm-plugin-activation.php';
require get_template_directory() . '/inc/tgm_register.php';


/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

