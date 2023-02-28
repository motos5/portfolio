<?php
// Register Scripts and Stiles for Themme
function wawe_scripts() {
	wp_enqueue_style( 'wawe-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_enqueue_style( 'wawe-googlefonts', 'https://fonts.googleapis.com/css2?family=Raleway:wght@600;700&family=Roboto+Condensed:ital,wght@0,300;0,400;0,700;1,300;1,400&display=swap');
	wp_enqueue_style( 'wawe-fancyboxcss', get_template_directory_uri() . '/assets/css/frontend/jquery.fancybox.min.css', array(), _S_VERSION );
	wp_enqueue_style( 'wawe-slickcss', get_template_directory_uri() . '/assets/css/frontend/slick.css', array(), _S_VERSION );
	wp_enqueue_style( 'wawe-maincss', get_template_directory_uri() . '/assets/css/frontend/style.css', array(), _S_VERSION );

	// Подключение собственного файла jquery
	wp_deregister_script( 'jquery' );
	wp_register_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js', array(), _S_VERSION, true);
	wp_enqueue_script( 'jquery');

	wp_enqueue_script( 'wawe-mixitup', get_template_directory_uri() . '/assets/js/frontend/mixitup.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'wawe-slick', get_template_directory_uri() . '/assets/js/frontend/slick.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'wawe-fancyboxjs', get_template_directory_uri() . '/assets/js/frontend/jquery.fancybox.min.js', array(), _S_VERSION, true );

    
    // Main JS
    wp_enqueue_script( 'wawe-mainjs', get_template_directory_uri() . '/assets/js/frontend/main.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'wawe_scripts' );

// Register Scripts and Stiles for Admin
function myprefix_radiotax_javascript(){
	// Скрипт для работы радиокопок таксономии
	wp_register_script( 'wawe-radiotax', get_template_directory_uri() . '/assets/js/admin/radiotax.js', array('jquery'), null, true ); // Здесь определяется, что данный скрипт надо загружать в нижнем колонтитуле
	wp_enqueue_script( 'wawe-radiotax' );
}
add_action('admin_enqueue_scripts','myprefix_radiotax_javascript');