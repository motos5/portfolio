<?php
// Register Sidebars and Wiidgets
add_action('widgets_init', 'wayup_widgets_init');
function wayup_widgets_init() {
    // Regiter Sidebar
	register_sidebar(array(
		'name'  => esc_html__('News sitebar', 'wayup'),
		'id'  => "sidebar-news",
		'before_widget'  => '<section class="widget-news %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h5 class="widgettitle mb-3">',
		'after_title'  => '</h5>'
	));

    // Регистрация и активация виджета.
    register_widget( 'wayup_widget_search' );
    register_widget( 'wayup_widget_about' );
    register_widget( 'wayup_widget_category' );
    register_widget( 'wayup_widget_subscribe' );
}

// Include Widget About
require_once __DIR__ . '/widgets/widget-search.php';
require_once __DIR__ . '/widgets/widget-about.php';
require_once __DIR__ . '/widgets/widget-category.php';
require_once __DIR__ . '/widgets/widget-subscribe.php';
