<?php
/* ACF Options page in admin panel */
function wpweb_acf_init() {
    if( function_exists('acf_add_options_page') ) {
        $option_page = acf_add_options_page(array(
            'page_title' 	=> esc_html__('Header/Footer Settings', 'wpweb'),
            'menu_title' 	=> esc_html__('Theme Settings', 'wpweb'),
            'menu_slug' 	=> 'theme-general-settings',
            'capability' 	=> 'edit_posts',
            'redirect' 	=> false
        ));
        /*
        acf_add_options_sub_page(array(
            'page_title' 	=> esc_html__('Header Settings', 'wpweb'),
            'menu_title'	=> esc_html__('Header Settings', 'o-marketing'),
            'parent_slug'	=> 'theme-general-settings',
        ));
        */
    }
}
add_action('acf/init', 'wpweb_acf_init');