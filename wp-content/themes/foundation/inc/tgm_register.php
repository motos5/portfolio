<?php

add_action( 'tgmpa_register', 'elementor_register_required_plugins' );

function elementor_register_required_plugins() {
	
	$plugins = array(

		
		// Пример локального плагина
		array(
			'name'               => 'Elementor Foundation', // The plugin name.
			'slug'               => 'elementor-foundation', // The plugin slug (typically the folder name).
			'source'             => get_template_directory() . '/plugins/elementor-foundation.zip', // The plugin source.
			'required'           => true, // If false, the plugin is only 'recommended' instead of required.
			'version'            => '1.0.0', // E.g. 1.0.0.
		),
        
        
		// Пример WordPress репозитория
		array(
			'name'      => 'Advanced Custom Fields PRO',
			'slug'      => 'advanced-custom-fields',
			'required'  => false,
		),
		array(
			'name'      => 'Contact Form 7',
			'slug'      => 'contact-form-7',
			'required'  => false,
		),
		array(
			'name'      => 'Contact Form 7 Extension For Mailchimp',
			'slug'      => 'contact-form-7-mailchimp-extension',
			'required'  => false,
		),
		array(
			'name'      => 'Custom Icons for Elementor',
			'slug'      => 'custom-icons-for-elementor',
			'required'  => false,
		),
		array(
			'name'      => 'Elementor Website Builder',
			'slug'      => 'elementor',
			'required'  => false,
		),
	);

	$config = array(
		'id'           => 'elementor',             // Unique ID for hashing notices for multiple instances of TGMPA.
		'default_path' => '',                      // Default absolute path to bundled plugins.
		'menu'         => 'tgmpa-install-plugins', // Menu slug.
		'has_notices'  => true,                    // Show admin notices or not.
		'dismissable'  => true,                    // If false, a user cannot dismiss the nag message.
		'dismiss_msg'  => '',                      // If 'dismissable' is false, this message will be output at top of nag.
		'is_automatic' => false,                   // Automatically activate plugins after installation or not.
		'message'      => '',                      // Message to output right before the plugins table.

	);

	tgmpa( $plugins, $config );
}
