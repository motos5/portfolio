<?php
if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

require_once __DIR__ . '/includes/setup.php';
require_once __DIR__ . '/includes/enqueue.php';
require_once __DIR__ . '/includes/acf-panel.php';
require_once __DIR__ . '/includes/radio-taxonomy.php';



/*
// Function for Return Products AJAX
function wawe_show_items() {
	$button = 'test Hello';
    echo $button;
	

	die();
}

//Add Ajax Actions
add_action('wp_ajax_wawe_filter', 'wawe_show_items');
add_action('wp_ajax_nopriv_wawe_filter', 'wawe_show_items');
*/
