<?php
/* ACF Options page in admin panel */
function prodev_acf_init() {
    if( function_exists('acf_add_options_page') ) {
        $option_page = acf_add_options_page(array(
            'page_title' 	=> esc_html__('Theme General Settings', 'wawe'),
            'menu_title' 	=> esc_html__('Theme Settings', 'wawe'),
            'menu_slug' 	=> 'theme-general-settings',
            'capability' 	=> 'edit_posts',
            'redirect' 	=> false
        ));
        acf_add_options_sub_page(array(
            'page_title' 	=> esc_html__('Getting Settings', 'wawe'),
            'menu_title'	=> esc_html__('Getting Settings', 'wawe'),
            'parent_slug'	=> 'theme-general-settings',
        ));
        acf_add_options_sub_page(array(
            'page_title' 	=> esc_html__('Peak Settings', 'wawe'),
            'menu_title'	=> esc_html__('Peak Settings', 'wawe'),
            'parent_slug'	=> 'theme-general-settings',
        ));
    }
}
add_action('acf/init', 'prodev_acf_init');