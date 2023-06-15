<?php
if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}


// WooCommerce Functions
require_once __DIR__ . '/includes/woo.php';
// Include Wayup Setup
require_once __DIR__ . '/includes/wayup-setup.php';
// Include Wayup Enqueue
require_once __DIR__ . '/includes/wayup-enqueue.php';
// Include Breadcrumbs
require_once __DIR__ . '/includes/breadcrumbs.php';
// Include Post Types
require_once __DIR__ . '/includes/post-types.php';
// Include Metaboxes
require_once __DIR__ . '/includes/metaboxes/metaboxes.php';
// Include Register Metaboxes
require_once __DIR__ . '/includes/metaboxes/register-metaboxes.php';
// Include AJAX Contact Form  Testimonials Archive Page
require_once __DIR__ . '/includes/testimonials-contact-form.php';
// Include AJAX Contact Form  for "template-order.php"
require_once __DIR__ . '/includes/order-contact-form.php';
// Include AJAX Contact Form  for "template-contacts.php"
require_once __DIR__ . '/includes/contacts-contact-form.php';
// Include ACF Options File
require_once __DIR__ . '/includes/acf-options.php';
// Include Widgets
require_once __DIR__ . '/includes/widgets.php';
// My Function Comment Form
require_once __DIR__ . '/includes/my-comment-form.php';
// Wayup Functions
require_once __DIR__ . '/includes/wayup-functions.php';
