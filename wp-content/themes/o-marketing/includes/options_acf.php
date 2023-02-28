<?php
/* ACF Options page in admin panel */
function o_marketing_acf_init() {
    if( function_exists('acf_add_options_page') ) {
        $option_page = acf_add_options_page(array(
            'page_title' 	=> esc_html__('Theme General Settings', 'o-marketing'),
            'menu_title' 	=> esc_html__('Theme Settings', 'o-marketing'),
            'menu_slug' 	=> 'theme-general-settings',
            'capability' 	=> 'edit_posts',
            'redirect' 	=> false
        ));
        acf_add_options_sub_page(array(
            'page_title' 	=> esc_html__('Header Settings', 'o-marketing'),
            'menu_title'	=> esc_html__('Header Settings', 'o-marketing'),
            'parent_slug'	=> 'theme-general-settings',
        ));
        acf_add_options_sub_page(array(
            'page_title' 	=> esc_html__('About Settings', 'o-marketing'),
            'menu_title'	=> esc_html__('About Settings', 'o-marketing'),
            'parent_slug'	=> 'theme-general-settings',
        ));
        acf_add_options_sub_page(array(
            'page_title' 	=> esc_html__('Expertise Settings', 'o-marketing'),
            'menu_title'	=> esc_html__('Expertise Settings', 'o-marketing'),
            'parent_slug'	=> 'theme-general-settings',
        ));
        acf_add_options_sub_page(array(
            'page_title' 	=> esc_html__('Magic Settings', 'o-marketing'),
            'menu_title'	=> esc_html__('Magic Settings', 'o-marketing'),
            'parent_slug'	=> 'theme-general-settings',
        ));
        acf_add_options_sub_page(array(
            'page_title' 	=> esc_html__('Portfolio Settings', 'o-marketing'),
            'menu_title'	=> esc_html__('Portfolio Settings', 'o-marketing'),
            'parent_slug'	=> 'theme-general-settings',
        ));
        acf_add_options_sub_page(array(
            'page_title' 	=> esc_html__('Team Settings', 'o-marketing'),
            'menu_title'	=> esc_html__('Team Settings', 'o-marketing'),
            'parent_slug'	=> 'theme-general-settings',
        ));
        acf_add_options_sub_page(array(
            'page_title' 	=> esc_html__('Pricing Settings', 'o-marketing'),
            'menu_title'	=> esc_html__('Pricing Settings', 'o-marketing'),
            'parent_slug'	=> 'theme-general-settings',
        ));
        acf_add_options_sub_page(array(
            'page_title' 	=> esc_html__('Clients Settings', 'o-marketing'),
            'menu_title'	=> esc_html__('Clients Settings', 'o-marketing'),
            'parent_slug'	=> 'theme-general-settings',
        ));
        acf_add_options_sub_page(array(
            'page_title' 	=> esc_html__('Contact Settings', 'o-marketing'),
            'menu_title'	=> esc_html__('Contact Settings', 'o-marketing'),
            'parent_slug'	=> 'theme-general-settings',
        ));
    }
}
add_action('acf/init', 'o_marketing_acf_init');