<?php
/*================= ACF Options page in Admin Panel =============*/
function zhovner_acf_init() {
    if( function_exists('acf_add_options_page') ) {
        $option_page = acf_add_options_page(array(
            'page_title' 	=> esc_html__('Theme Settings', 'zhovner'),
            'menu_title' 	=> esc_html__('Global Settings', 'zhovner'),
            'menu_slug' 	=> 'theme-general-settings',
            'capability' 	=> 'edit_posts',
            'redirect' 	=> false
        ));
		
        acf_add_options_sub_page(array(
            'page_title' 	=> esc_html__('Blocks Settings', 'zhovner'),
            'menu_title'	=> esc_html__('Blocks Settings', 'zhovner'),
            'parent_slug'	=> 'theme-general-settings',
        ));
        /*
        acf_add_options_sub_page(array(
            'page_title' 	=> esc_html__('WooCommerce Settings', 'zhovner'),
            'menu_title'	=> esc_html__('WooCommerce Settings', 'zhovner'),
            'parent_slug'	=> 'theme-general-settings',
        ));
		*/
    }
}
add_action('acf/init', 'zhovner_acf_init');