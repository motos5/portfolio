<?php
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