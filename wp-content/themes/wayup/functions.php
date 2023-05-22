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
	add_image_size( 'single-services', 1170, 635, true );
	add_image_size( 'archive-cases', 438, 455, true );
	add_image_size( 'archive-news', 409, 266, true );
	add_image_size( 'single-news', 1920, 740, true );

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


// Truncate the Excerpt ================== //
function wayup_excerpt($limit) {
	$excerpt = explode(' ', get_the_excerpt(), $limit);

	if (count($excerpt) >= $limit) {
		array_pop($excerpt);
		$excerpt = implode(" ", $excerpt) . '...';
	} else {
		$excerpt = implode(" ", $excerpt);
	}

	$excerpt = preg_replace('`\[[^\]]*\]`', '', $excerpt);

	return $excerpt;
}




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

// Get Attachment Image Info
function wayup_get_attachment( $attachment_id ) {

	$attachment = get_post( $attachment_id );
	return array(
		'alt' => get_post_meta( $attachment->ID, '_wp_attachment_image_alt', true ),
		'caption' => $attachment->post_excerpt,
		'description' => $attachment->post_content,
		'href' => get_permalink( $attachment->ID ),
		'src' => $attachment->guid,
		'title' => $attachment->post_title
	);
}


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
    if ( is_front_page() ) {
        $classes[] = 'is-home';
    } else {
        $classes[] = 'inner-page';
    }
    return $classes;
}
add_filter( 'body_class', 'wayup_body_class' );





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
                'desc' => esc_html__('Enter the link to the social network.', 'wayup'),
                'id'   => $prefix . 'testimonials_link',
                'type' => 'text',
            ),
            array(
                'name' => esc_html__('Data Post', 'wayup'),
                'desc' => esc_html__('Select the desired date.', 'wayup'),
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
			
            array(
                'name' => esc_html__('Price', 'wayup'),
                'desc' => esc_html__('Enter the cost of this service as a number.', 'wayup'),
                'id'   => $prefix . 'services_price',
                'type' => 'text',
            ),
            array(
                'name' => esc_html__('Background Image', 'wayup'),
                'desc' => esc_html__('Select an image to be displayed on the background of the service card.', 'wayup'),
                'id'   => $prefix . 'services_bg-image',
                'type' => 'select',
				'options' => array(
					array('name' => esc_html__('Statistic', 'wayup'), 'value' => 'stat'),
					array('name' => esc_html__('Idea', 'wayup'), 'value' => 'idea'),
					array('name' => esc_html__('Internet', 'wayup'), 'value' => 'internet'),
					array('name' => esc_html__('Info', 'wayup'), 'value' => 'info'),
					array('name' => esc_html__('Busy', 'wayup'), 'value' => 'busy'),
					array('name' => esc_html__('Target', 'wayup'), 'value' => 'target')
				)
            ),
        )
    );

	return $meta_boxes;
}

/* ============ Settings for Posts Per Page ============ */
add_action( 'pre_get_posts', 'wayup_per_post_types');
function wayup_per_post_types( $query) {
	// Testimonials Archive Page Settings
	if( is_post_type_archive('testimonials') ) {
		$query->set('posts_per_page', 1);
	} if ( is_admin() ) {
		$query->set('posts_per_page', 20);
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
// Include AJAX Contact Form  for "template-order.php"
require_once __DIR__ . '/includes/order-contact-form.php';
// Include ACF Options File
require_once __DIR__ . '/includes/acf-options.php';
// Include Widgets
require_once __DIR__ . '/includes/widgets.php';
