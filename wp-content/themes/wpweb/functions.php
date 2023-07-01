<?php
if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}
/*
// Header ACF Fields
$header_title = get_field('header_title', 'option');
$header_description = get_field('header_description', 'option');



add_action('init', 'wpweb_polylang_strings' );

function wpweb_polylang_strings() {
	global $header_title;
	global $header_description;

	// Проверка на существование функции "pll_register_string"
	if( ! function_exists( 'pll_register_string' ) ) {
		return;
	}

	pll_register_string(
		'header_menu_socials', // название строки
		esc_html('Nothing found'), // сама строка
		esc_html('Header'), // категория для удобства
		false // будут ли тут переносы строк в тексте или нет
	);

	pll_register_string(
		'header_menu_socials',
		esc_html($header_title),
		esc_html('Header'),
		false
	);

	pll_register_string(
		'header_menu_socials',
		esc_html($header_description),
		esc_html('Header'),
		false
	);

	pll_register_string(
		'header_menu_socials',
		esc_html('See Works'),
		esc_html('Header'),
		false
	);

	pll_register_string(
		'header_menu_socials',
		esc_html('Download CV'),
		esc_html('Header'),
		false
	);

}
*/

// WpWeb Setup
require_once get_template_directory() . '/includes/wpweb-setup.php';
// WpWeb Enqueue
require_once get_template_directory() . '/includes/wpweb-enqueue.php';
// WpWeb Menu
require_once get_template_directory() . '/includes/wpweb-menu.php';
// WpWeb Customize
require_once get_template_directory() . '/includes/wpweb-customize.php';
// WpWeb Images
require_once get_template_directory() . '/includes/wpweb-images.php';
// ACF Options
require_once get_template_directory() . '/includes/options_acf.php';
// Post Type
require_once get_template_directory() . '/includes/post-types.php';