<?php
// Register Scripts and Stiles
function wpweb_scripts() {
	// Stiles
	wp_enqueue_style( 'wpweb-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_enqueue_style( 'wpweb-googlefonts', 'https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;700&display=swap');
	wp_enqueue_style( 'wpweb-slick', get_template_directory_uri() . '/assets/css/frontend/slick.css', array(), _S_VERSION );
	wp_enqueue_style( 'wpweb-style-main', get_template_directory_uri() . '/assets/css/frontend/style.css', array(), _S_VERSION );

	// Scripts
	wp_enqueue_script('jquery');
	wp_enqueue_script( 'wpweb-slickjs', get_template_directory_uri() . '/assets/js/frontend/slick.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'wpweb-mainjs', get_template_directory_uri() . '/assets/js/frontend/main.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'wpweb_scripts' );