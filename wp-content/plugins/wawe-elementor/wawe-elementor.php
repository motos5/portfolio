<?php
/**
 * Plugin Name: Wawe Elementor
 * Description: Plugin for Wawe Elementor
 * Plugin URI:  https://wpweb.inf.ua/
 * Version:     1.0.0
 * Author:      Vitaliy Izotov
 * Author URI:  https://wpweb.inf.ua/
 * Text Domain: wawe-elementor
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}


// Post Types
add_action('init', 'elementor_post_types');

function elementor_post_types(){
	// Gallery Post Type
	require_once( __DIR__ . '/includes/post_types/gallery-posts.php' );
}

// Регистрация JS скриптов
function register_widget_scripts() {

	// Скрипты для работы AJAX
	wp_register_script( 'wawe-filter', plugins_url( '/assets/js/frontend/filter.js', __FILE__ ), [ 'jquery' ]  );
	wp_localize_script( 'wawe-filter', 'wawe_settings', array( 'ajax_url' => admin_url( 'admin-ajax.php' ) ) );
}
add_action( 'wp_enqueue_scripts', 'register_widget_scripts' );

// AJAX File
add_action('init', 'elementor_filter_ajax');

function elementor_filter_ajax(){
	// AJAX PHP File
	require_once( __DIR__ . '/includes/ajax.php' );
}


/*
// Регистрация нового контроллера (Control)
function register_currency_control( $controls_manager ) {

	require_once( __DIR__ . '/controls/icon_control.php' );

    $controls_manager->register( new \Elementor_Icon_Control() );

}
add_action( 'elementor/controls/register', 'register_currency_control' );
*/


// Регистрация новой категории
function add_elementor_wawe_categories( $elements_manager ) {

	$elements_manager->add_category(
		'wawe_category',
		[
			'title' => esc_html__( 'Wawe', 'wawe-elementor' ),
			'icon' => 'eicon-upload-circle-o',
		]
	);
}
add_action( 'elementor/elements/categories_registered', 'add_elementor_wawe_categories' );


function register_wawe_widget( $widgets_manager ) {
	// Header
	require_once( __DIR__ . '/widgets/wawe-header.php' );
	$widgets_manager->register( new \Elementor_Header_Widget() );

	// About
	require_once( __DIR__ . '/widgets/wawe-about.php' );
	$widgets_manager->register( new \Elementor_About_Widget() );
	
	// Getting
	require_once( __DIR__ . '/widgets/wawe-getting.php' );
	$widgets_manager->register( new \Elementor_Getting_Widget() );

	// Peak
	require_once( __DIR__ . '/widgets/wawe-peak.php' );
	$widgets_manager->register( new \Elementor_Peak_Widget() );

	// Gallery
	require_once( __DIR__ . '/widgets/wawe-gallery.php' );
	$widgets_manager->register( new \Elementor_Gallery_Widget() );

	// Blog
	require_once( __DIR__ . '/widgets/wawe-blog.php' );
	$widgets_manager->register( new \Elementor_Blog_Widget() );

	// Team
	require_once( __DIR__ . '/widgets/wawe-team.php' );
	$widgets_manager->register( new \Elementor_Team_Widget() );

	// Service
	require_once( __DIR__ . '/widgets/wawe-service.php' );
	$widgets_manager->register( new \Elementor_Service_Widget() );

	// Map
	require_once( __DIR__ . '/widgets/wawe-map.php' );
	$widgets_manager->register( new \Elementor_Map_Widget() );

	// Contact
	require_once( __DIR__ . '/widgets/wawe-contact.php' );
	$widgets_manager->register( new \Elementor_Contact_Widget() );


}
add_action( 'elementor/widgets/register', 'register_wawe_widget' );