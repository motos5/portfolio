<?php
// Register Scripts and Stiles
function wayup_scripts() {
	// Styles
	wp_enqueue_style( 'wayup-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_enqueue_style( 'wayup-style-vendor', get_template_directory_uri() . '/assets/css/vendor.min.css', array(), _S_VERSION );
	wp_enqueue_style( 'wayup-style-main', get_template_directory_uri() . '/assets/css/main.min.css', array(), _S_VERSION );

	// Scripts
	wp_deregister_script( 'jquery' );
	wp_register_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js');
	wp_enqueue_script( 'jquery');
	
	wp_register_script( 'goodshare', 'https://cdn.jsdelivr.net/npm/goodshare.js@4/goodshare.min.js', array(), _S_VERSION, true);
	wp_enqueue_script( 'wayup-js-vendor', get_template_directory_uri() . '/assets/js/vendor.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'wayup-js-svg', get_template_directory_uri() . '/assets/img/svg-sprite/svg-sprite.js', array(), _S_VERSION, false );
	wp_enqueue_script( 'wayup-js-main', get_template_directory_uri() . '/assets/js/common.min.js', array(), _S_VERSION, true );

	/*=========== Objects for Buttons on Testimonial Page ============= */
	// Object for URL in JavaScript (Button for Testimonial Page - Collapse)
    $collapse = array( 'wayup-js-main' => esc_html__('Collapse', 'wayup'));
    wp_localize_script( 'wayup-js-main', 'wnm_collapse', $collapse );
	
	// Object for URL in JavaScript (Button for Testimonial Page - Read more)
    $read_more = array( 'wayup-js-main' => esc_html__('Read more', 'wayup'));
    wp_localize_script( 'wayup-js-main', 'wnm_read_more', $read_more );
	/*=========== End Objects for Buttons on Testimonial Page ============= */

	/*=========== Objects for Sirt Product on Shop Page ============= */
	// Objects for Sort Products {URL) on Shop Page
	$shoppage_url = array( 'wayup-js-main' => home_url('/') . 'shop/');
    wp_localize_script( 'wayup-js-main', 'wnm_shoppage_url', $shoppage_url );

	// Objects for Sort Products {Translate) on Shop Page
	$menu_order = array( 'wayup-js-main' => esc_html__('Default sorting', 'wayup'));
    wp_localize_script( 'wayup-js-main', 'wnm_menu_order', $menu_order );
	
	$popularity = array( 'wayup-js-main' => esc_html__('Sort by popularity', 'wayup'));
    wp_localize_script( 'wayup-js-main', 'wnm_popularity', $popularity );
	
	$rating = array( 'wayup-js-main' => esc_html__('Sort by average rating', 'wayup'));
    wp_localize_script( 'wayup-js-main', 'wnm_rating', $rating );
	
	$date = array( 'wayup-js-main' => esc_html__('Sort by price: low to high', 'wayup'));
    wp_localize_script( 'wayup-js-main', 'wnm_date', $date );
	
	$price = array( 'wayup-js-main' => esc_html__('Sort by price: high to low', 'wayup'));
    wp_localize_script( 'wayup-js-main', 'wnm_price', $price );

	$price_desc = array( 'wayup-js-main' => esc_html__('Sort by price: high to low', 'wayup'));
    wp_localize_script( 'wayup-js-main', 'wnm_price_desc', $price_desc );
	/*=========== End Objects for Sirt Product on Shop Page ============= */


	
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