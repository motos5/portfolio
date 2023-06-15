<?php
/**
 * Enqueue scripts and styles.
 */
function elementor_scripts() {
	// Styles
	wp_enqueue_style( 'elementor-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'elementor-style', 'rtl', 'replace' );
	wp_enqueue_style( 'elementor-icomoon', get_template_directory_uri() . '/assets/fonts/icomoon/style.css', array(), _S_VERSION );
	wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . '/assets/css/bootstrap/bootstrap.css', array(), _S_VERSION );
	wp_enqueue_style( 'elementor-magnific', get_template_directory_uri() . '/assets/css/magnific-popup.css', array(), _S_VERSION );
	wp_enqueue_style( 'query-ui-css', get_template_directory_uri() . '/assets/css/jquery-ui.css', array(), _S_VERSION );
	wp_enqueue_style( 'elementor-carousel', get_template_directory_uri() . '/assets/css/owl.carousel.min.css', array(), _S_VERSION );
	wp_enqueue_style( 'elementor-theme', get_template_directory_uri() . '/assets/css/owl.theme.default.min.css', array(), _S_VERSION );
	wp_enqueue_style( 'elementor-datepicker', get_template_directory_uri() . '/assets/css/bootstrap-datepicker.css', array(), _S_VERSION );
	wp_enqueue_style( 'elementor-flaticon', get_template_directory_uri() . '/assets/fonts/flaticon/font/flaticon.css', array(), _S_VERSION );
	wp_enqueue_style( 'elementor-fontaveson', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css', array(), _S_VERSION );
	wp_enqueue_style( 'elementor-aos', get_template_directory_uri() . '/assets/css/aos.css', array(), _S_VERSION );
	wp_enqueue_style( 'elementor-main-style', get_template_directory_uri() . '/assets/css/style.css', array(), _S_VERSION );

	
	//JQuery
	wp_deregister_script( 'jquery' );
	wp_register_script( 'jquery', get_template_directory_uri() . '/assets/js/jquery-3.3.1.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'jquery');
	
	wp_enqueue_script( 'jquery-ui-js', get_template_directory_uri() . '/assets/js/jquery-ui.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'popper', get_template_directory_uri() . '/assets/js/popper.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'elementor-carousel-js', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'magnific-popup', get_template_directory_uri() . '/assets/js/jquery.magnific-popup.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'elementor-sticky-js', get_template_directory_uri() . '/assets/js/jquery.sticky.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'elementor-waypoints-js', get_template_directory_uri() . '/assets/js/jquery.waypoints.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'elementor-animateNumber-js', get_template_directory_uri() . '/assets/js/jquery.animateNumber.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'elementor-aos-js', get_template_directory_uri() . '/assets/js/aos.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'elementor-main-js', get_template_directory_uri() . '/assets/js/main.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'elementor_scripts' );