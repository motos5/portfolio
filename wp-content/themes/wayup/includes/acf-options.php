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
				'slug' => 'widgets-modules',
				'title' => esc_html__('Widgets Module', 'wayup'),
				'icon' => null,
			),
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

	//category-all-preview
	acf_register_block_type(array(
		'name' => 'category-all-preview',
		'title' => __('Vorschau aller Berichte'),
		'description' => __('Vorschau aller Berichte'),
		'render_template' => 'template-parts/blocks/sonder/category-all-preview.php',
		'category' => 'widgets-modules',
		'mode' => 'edit',
		'icon' => 'format-gallery',
		'keywords' => array('category, preview'),
		'post_types' => array('page'),
		'example' => array(
			'attributes' => array(
				'mode' => 'preview',
				'data' => array(
					'gutenberg_preview_image' => get_template_directory_uri() . '/template-parts/blocks/sonder/category.png',
				),
			),
		),
	));


	//category-all
	acf_register_block_type(array(
		'name' => 'category-all',
		'title' => __('Alle Berichte'),
		'description' => __('Alle Berichte'),
		'render_template' => 'template-parts/blocks/sonder/category-all.php',
		'category' => 'page-modules',
		'mode' => 'edit',
		'icon' => 'format-gallery',
		'keywords' => array('category'),
		'post_types' => array('page'),
		'example' => array(
			'attributes' => array(
				'mode' => 'preview',
				'data' => array(
					'gutenberg_preview_image' => get_template_directory_uri() . '/template-parts/blocks/sonder/category-all.png',
				),
			),
		),
	));

	

}
add_action('acf/init', 'acf_init_block_types');

