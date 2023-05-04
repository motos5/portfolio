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

	// Add Image Size
	add_image_size( 'archive-testimonials', 225, 230, true );

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

	/*=========== Objects for Buttons on Testimonial Page ============= */
	// Object for URL in JavaScript (Button for Testimonial Page - Collapse)
    $collapse = array( 'wayup-js-main' => esc_html('Collapse', 'wayup'));
    wp_localize_script( 'wayup-js-main', 'wnm_collapse', $collapse );
	
	// Object for URL in JavaScript (Button for Testimonial Page - Read more)
    $read_more = array( 'wayup-js-main' => esc_html('Read more', 'wayup'));
    wp_localize_script( 'wayup-js-main', 'wnm_read_more', $read_more );
	/*=========== End Objects for Buttons on Testimonial Page ============= */
	
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'wayup_scripts' );

function wayup_admin_scripts($hook) {
	if ( $hook == 'post.php' || $hook == 'post-new.php' || $hook == 'page-new.php' || $hook == 'page.php' ) {
		// Enqueue CSS Metaboxes
		wp_enqueue_style( 'wayup_metaboxes_css', get_template_directory_uri() . '/assets/css/libraries/metaboxes.css', array(), '1.0.0' );
		// Enqueue JS Metaboxes
		wp_enqueue_script( 'wayup_metaboxes_js', get_template_directory_uri() . '/assets/js/libraries/metaboxes.js', array( 'jquery', 'jquery-ui-core', 'jquery-ui-datepicker', 'media-upload', 'thickbox') );
  	}
}
add_action( 'admin_enqueue_scripts', 'wayup_admin_scripts', 10 );

// Image Sizes Option
add_filter( 'intermediate_image_sizes', 'delete_intermediate_image_sizes' );
function delete_intermediate_image_sizes( $sizes ){
	// Removed this sizes
	return array_diff( $sizes, [
		'medium_large',
		'large',
		'1536x1536',
		'2048x2048',
	] );
}


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
            'page_title' 	=> esc_html__('Post Types Settings', 'wayup'),
            'menu_title'	=> esc_html__('Post Types Settings', 'wayup'),
            'parent_slug'	=> 'theme-general-settings',
        ));
    }
}
add_action('acf/init', 'wayup_acf_init');


// Регистрация Metaboxies
function wayup_metaboxes($meta_boxes) {
	
	$meta_boxes = array();

    $prefix = "wayup_";

	// Metaboxe for Post Type (Testimonial)
    $meta_boxes[] = array(
        'id'         => 'testimonial_metaboxes', // ID Metaboxe
        'title'      => esc_html__('Testimonials data', 'wayup'), // Title Metaboxe
        'pages'      => array( 'testimonials', ), // Metaboxies for Post Type Testimonials
        'context'    => 'normal',
        'priority'   => 'high',
        'show_names' => true, // Show field names on the left
        // 'show_on'    => array( 'key' => 'page-template', 'value' => array('page-home.php'), ), // Раскомментировать, если Metaboxes создаются для станицы - page

        'fields' => array(
			// Поля для Metaboxies
            array(
                'name' => esc_html__('Social link', 'wayup'),
                'desc' => esc_html__('Enter the link to the social network', 'wayup'),
                'id'   => $prefix . 'testimonials_link',
                'type' => 'text',
            ),
            array(
                'name' => esc_html__('Data Post', 'wayup'),
                'desc' => esc_html__('Select the desired date', 'wayup'),
                'id'   => $prefix . 'testimonials_date',
                'type' => 'text_date',
            ),
        )
    );

	// Metaboxe for Post Type (Services)
    $meta_boxes[] = array(
        'id'         => 'services_metaboxes', // ID Metaboxe
        'title'      => esc_html__('Services data', 'wayup'), // Title Metaboxe
        'pages'      => array( 'services', ), // Metaboxies for Post Type Testimonials
        'context'    => 'normal',
        'priority'   => 'high',
        'show_names' => true, // Show field names on the left
        // 'show_on'    => array( 'key' => 'page-template', 'value' => array('page-home.php'), ), // Раскомментировать, если Metaboxes создаются для станицы - page

        'fields' => array(
			// Поля для Metaboxies
            array(
                'name' => esc_html__('Social link', 'wayup'),
                'desc' => esc_html__('Enter the link to the social network', 'wayup'),
                'id'   => $prefix . 'services_link',
                'type' => 'text',
            ),
            array(
                'name' => esc_html__('Data Post', 'wayup'),
                'desc' => esc_html__('Select the desired date', 'wayup'),
                'id'   => $prefix . 'services_date',
                'type' => 'text_date',
            ),
        )
    );

	return $meta_boxes;
}

/* ============ Settings for Posts Per Page ============ */
add_action( 'pre_get_posts', 'wayup_per_post_types');
function wayup_per_post_types( $query) {
	// Testimonials Page Settings
	if( is_post_type_archive('testimonials') ) {
		$query->set('posts_per_page', 1);
	} if ( is_admin() ) {
		$query->set('posts_per_page', 10);
	}
}
/* ============ End Settings for Posts Per Page ============ */





// Include Breadcrumbs
require_once __DIR__ . '/includes/breadcrumbs.php';
// Include Post Types
require_once __DIR__ . '/includes/post-types.php';
// Include Metaboxes
require_once __DIR__ . '/includes/metaboxes.php';
// Include AJAX Contact Form  Testimonials Archive Page
require_once __DIR__ . '/includes/testimonials-contact-form.php';