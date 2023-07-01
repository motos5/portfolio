<?php
// ================= MENU ============== //
// Register menu location
function wpweb_menus() {
    $locations = array(
        'menu-header' => esc_html__('Header navigation', 'wpweb'),
        'menu-other' => esc_html__('Other navigation', 'wpweb'),
    );
    register_nav_menus($locations);
}
add_action('init', 'wpweb_menus');

// Add CSS class for menu HTML teg <li>
function wpweb_css_class_li($classes) {
	$classes[] = 'menu__item';
	return $classes;
}
add_filter('nav_menu_css_class', 'wpweb_css_class_li', 10, 1);

// Add CSS class for menu HTML teg <a>
function wpweb_css_class_a($atts) {
	$atts['class'] = "menu__link";
	return $atts;
}
add_filter( 'nav_menu_link_attributes', 'wpweb_css_class_a');

// ================= END MENU ============== //