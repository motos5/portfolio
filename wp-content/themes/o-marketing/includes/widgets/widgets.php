<?php
// Регистрируем виджет
add_action('widgets_init', 'o_marketing_widgets_init');
function o_marketing_widgets_init() {
	register_sidebar(
		array(
			'name'  => esc_html('Footer Sidebar', 'o-marketing'),
			'id'  => "sidebar-footer",
			'before_widget'  => '',
			'after_widget'  => '',
		)
	);
	// Register and activation widget
	register_widget( 'o_marketing_widget_socials' );
	register_widget( 'o_marketing_widget_address' );
}

require get_template_directory() . '/includes/widgets/widget_socials.php';
require get_template_directory() . '/includes/widgets/widget_address.php';