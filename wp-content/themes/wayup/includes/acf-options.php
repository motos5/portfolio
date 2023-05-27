<?php
/*================= ACF Options page in Admin Panel =============*/
function wayup_acf_init() {
    if( function_exists('acf_add_options_page') ) {
        $option_page = acf_add_options_page(array(
            'page_title' 	=> esc_html__('Theme Settings', 'wayup'),
            'menu_title' 	=> esc_html__('Global Settings', 'wayup'),
            'menu_slug' 	=> 'theme-general-settings',
            'capability' 	=> 'edit_posts',
            'redirect' 	=> false
        ));
        acf_add_options_sub_page(array(
            'page_title' 	=> esc_html__('Post Types Settings', 'wayup'),
            'menu_title'	=> esc_html__('Post Types Settings', 'wayup'),
            'parent_slug'	=> 'theme-general-settings',
        ));
    }
}
add_action('acf/init', 'wayup_acf_init');

// Register Custom Catigories for Blocks
function add_custom_block_categories($block_categories, $editor_context)
{
	if (!empty($editor_context->post)) {
		array_push(
			$block_categories,
			array(
				'slug' => 'page-modules',
				'title' => esc_html__('Pages Module', 'wayup'),
				'icon' => null,
			)
		);
	}
	return $block_categories;
}
add_filter('block_categories_all', 'add_custom_block_categories', 10, 2);

function acf_init_block_types(){

	// Contacts
	acf_register_block_type(array(
		'name' => 'contacts',
		'title' => esc_html__('Contacts', 'wayup'),
		'description' => esc_html__('For Page Contacts', 'wayup'),
		'render_template' => 'template-parts/blocks/contact-page.php',
		'category' => 'page-modules',
		'mode' => 'edit',
		'icon' => 'dashicons-phone',
		'keywords' => array('about', 'page'),
		'post_types' => array('page'),
		'enqueue_style' => get_template_directory_uri() . '/assets/css/main.min.css',
		'example' => array(
			'attributes' => array(
				'mode' => 'preview',
				'data' => array(
					'gutenberg_preview_image' => get_template_directory_uri() . '/template-parts/blocks/contacts.png',
				),
			),
		),
	));

	

}
add_action('acf/init', 'acf_init_block_types');

