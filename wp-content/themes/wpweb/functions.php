<?php
if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}


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