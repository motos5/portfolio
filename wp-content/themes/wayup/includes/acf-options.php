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
				'slug' => 'contacts-page',
				'title' => esc_html__('Wayup Contacts Page', 'wayup'),
				'icon' => null,
			),
			array(
				'slug' => 'about-page',
				'title' => esc_html__('Wayup About Page', 'wayup'),
				'icon' => null,
			),
			array(
				'slug' => 'home-page',
				'title' => esc_html__('Wayup Home Page', 'wayup'),
				'icon' => null,
			)
		);
	}
	return $block_categories;
}
add_filter('block_categories_all', 'add_custom_block_categories', 10, 2);

function acf_init_block_types(){

	// Contacts Page
	acf_register_block_type(array(
		'name' => 'contacts',
		'title' => esc_html__('Contacts', 'wayup'),
		'description' => esc_html__('For Page Contacts', 'wayup'),
		'render_template' => 'template-parts/blocks/contact-page.php',
		'category' => 'contacts-page',
		'mode' => 'edit',
		'icon' => 'phone',
		'keywords' => array('contacts', 'page'),
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

	// About Page | About Company
	acf_register_block_type(array(
		'name' => 'about-company',
		'title' => esc_html__('About Company', 'wayup'),
		'description' => esc_html__('Block About Company for About Page', 'wayup'),
		'render_template' => 'template-parts/blocks/about-company.php',
		'category' => 'about-page',
		'mode' => 'edit',
		'icon' => 'image-filter',
		'keywords' => array('about', 'company'),
		'post_types' => array('page'),
		'enqueue_style' => get_template_directory_uri() . '/assets/css/main.min.css',
		'example' => array(
			'attributes' => array(
				'mode' => 'preview',
				'data' => array(
					'gutenberg_preview_image' => get_template_directory_uri() . '/template-parts/blocks/about-company.png',
				),
			),
		),
	));

	// About Page | About Number
	acf_register_block_type(array(
		'name' => 'about-number',
		'title' => esc_html__('About Number', 'wayup'),
		'description' => esc_html__('Block About Number for About Page', 'wayup'),
		'render_template' => 'template-parts/blocks/about-number.php',
		'category' => 'about-page',
		'mode' => 'edit',
		'icon' => 'image-filter',
		'keywords' => array('about', 'number'),
		'post_types' => array('page'),
		'enqueue_style' => get_template_directory_uri() . '/assets/css/main.min.css',
		'example' => array(
			'attributes' => array(
				'mode' => 'preview',
				'data' => array(
					'gutenberg_preview_image' => get_template_directory_uri() . '/template-parts/blocks/about-number.png',
				),
			),
		),
	));

	// About Page | Contact Us
	acf_register_block_type(array(
		'name' => 'about-contact',
		'title' => esc_html__('About Contact', 'wayup'),
		'description' => esc_html__('Block About Contact for About Page', 'wayup'),
		'render_template' => 'template-parts/blocks/about-contact.php',
		'category' => 'about-page',
		'mode' => 'edit',
		'icon' => 'image-filter',
		'keywords' => array('about', 'contact'),
		'post_types' => array('page'),
		'enqueue_style' => get_template_directory_uri() . '/assets/css/main.min.css',
		'example' => array(
			'attributes' => array(
				'mode' => 'preview',
				'data' => array(
					'gutenberg_preview_image' => get_template_directory_uri() . '/template-parts/blocks/about-contact.png',
				),
			),
		),
	));

	// About Page | Team
	acf_register_block_type(array(
		'name' => 'about-team',
		'title' => esc_html__('About Team', 'wayup'),
		'description' => esc_html__('Block About Team for About Page', 'wayup'),
		'render_template' => 'template-parts/blocks/about-team.php',
		'category' => 'about-page',
		'mode' => 'edit',
		'icon' => 'image-filter',
		'keywords' => array('about', 'team'),
		'post_types' => array('page'),
		'enqueue_style' => get_template_directory_uri() . '/assets/css/main.min.css',
		'example' => array(
			'attributes' => array(
				'mode' => 'preview',
				'data' => array(
					'gutenberg_preview_image' => get_template_directory_uri() . '/template-parts/blocks/about-team.png',
				),
			),
		),
	));

	// Home Page | Help
	acf_register_block_type(array(
		'name' => 'home-help',
		'title' => esc_html__('Home Help', 'wayup'),
		'description' => esc_html__('Block Help for Home Page', 'wayup'),
		'render_template' => 'template-parts/blocks/home-help.php',
		'category' => 'home-page',
		'mode' => 'edit',
		'icon' => 'align-full-width',
		'keywords' => array('home', 'help'),
		'post_types' => array('page'),
		'enqueue_style' => get_template_directory_uri() . '/assets/css/main.min.css',
		'example' => array(
			'attributes' => array(
				'mode' => 'preview',
				'data' => array(
					'gutenberg_preview_image' => get_template_directory_uri() . '/template-parts/blocks/home-help.png',
				),
			),
		),
	));

	// Home Page | Choice
	acf_register_block_type(array(
		'name' => 'home-choice',
		'title' => esc_html__('Home Choice', 'wayup'),
		'description' => esc_html__('Block Choice for Home Page', 'wayup'),
		'render_template' => 'template-parts/blocks/home-choice.php',
		'category' => 'home-page',
		'mode' => 'edit',
		'icon' => 'align-full-width',
		'keywords' => array('home', 'choice'),
		'post_types' => array('page'),
		'enqueue_style' => get_template_directory_uri() . '/assets/css/main.min.css',
		'example' => array(
			'attributes' => array(
				'mode' => 'preview',
				'data' => array(
					'gutenberg_preview_image' => get_template_directory_uri() . '/template-parts/blocks/home-choice.png',
				),
			),
		),
	));

	// Home Page | Cases
	acf_register_block_type(array(
		'name' => 'home-cases',
		'title' => esc_html__('Home Cases', 'wayup'),
		'description' => esc_html__('Block Cases for Home Page', 'wayup'),
		'render_template' => 'template-parts/blocks/home-cases.php',
		'category' => 'home-page',
		'mode' => 'edit',
		'icon' => 'align-full-width',
		'keywords' => array('home', 'cases'),
		'post_types' => array('page'),
		'enqueue_style' => get_template_directory_uri() . '/assets/css/main.min.css',
		'example' => array(
			'attributes' => array(
				'mode' => 'preview',
				'data' => array(
					'gutenberg_preview_image' => get_template_directory_uri() . '/template-parts/blocks/home-cases.png',
				),
			),
		),
	));

	// Home Page | Clients
	acf_register_block_type(array(
		'name' => 'home-clients',
		'title' => esc_html__('Home Clients', 'wayup'),
		'description' => esc_html__('Block Clients for Home Page', 'wayup'),
		'render_template' => 'template-parts/blocks/home-clients.php',
		'category' => 'home-page',
		'mode' => 'edit',
		'icon' => 'align-full-width',
		'keywords' => array('home', 'clients'),
		'post_types' => array('page'),
		'enqueue_style' => get_template_directory_uri() . '/assets/css/main.min.css',
		'example' => array(
			'attributes' => array(
				'mode' => 'preview',
				'data' => array(
					'gutenberg_preview_image' => get_template_directory_uri() . '/template-parts/blocks/home-clients.png',
				),
			),
		),
	));

	// Home Page | Services
	acf_register_block_type(array(
		'name' => 'home-services',
		'title' => esc_html__('Home Services', 'wayup'),
		'description' => esc_html__('Block Services for Home Page', 'wayup'),
		'render_template' => 'template-parts/blocks/home-services.php',
		'category' => 'home-page',
		'mode' => 'edit',
		'icon' => 'align-full-width',
		'keywords' => array('home', 'services'),
		'post_types' => array('page'),
		'enqueue_style' => get_template_directory_uri() . '/assets/css/main.min.css',
		'example' => array(
			'attributes' => array(
				'mode' => 'preview',
				'data' => array(
					'gutenberg_preview_image' => get_template_directory_uri() . '/template-parts/blocks/home-services.png',
				),
			),
		),
	));

	// Home Page | News
	acf_register_block_type(array(
		'name' => 'home-news',
		'title' => esc_html__('Home News', 'wayup'),
		'description' => esc_html__('Block News for Home Page', 'wayup'),
		'render_template' => 'template-parts/blocks/home-news.php',
		'category' => 'home-page',
		'mode' => 'edit',
		'icon' => 'align-full-width',
		'keywords' => array('home', 'news'),
		'post_types' => array('page'),
		'enqueue_style' => get_template_directory_uri() . '/assets/css/main.min.css',
		'example' => array(
			'attributes' => array(
				'mode' => 'preview',
				'data' => array(
					'gutenberg_preview_image' => get_template_directory_uri() . '/template-parts/blocks/home-news.png',
				),
			),
		),
	));

	

}
add_action('acf/init', 'acf_init_block_types');

