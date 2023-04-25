<?php
/* ACF Options page in admin panel */
function elvinci_acf_init() {
    if( function_exists('acf_add_options_page') ) {
        $option_page = acf_add_options_page(array(
            'page_title' 	=> esc_html__('Top Slider', 'elvinci'),
            'menu_title' 	=> esc_html__('Top Slider', 'elvinci'),
            'menu_slug' 	=> 'theme-general-settings',
            'capability' 	=> 'edit_posts',
            'redirect' 	=> false
        ));
        
        acf_add_options_sub_page(array(
            'page_title' 	=> esc_html__('Footer Settings', 'elvinci'),
            'menu_title'	=> esc_html__('Footer Settings', 'elvinci'),
            'parent_slug'	=> 'theme-general-settings',
        ));
        
    }
}
add_action('acf/init', 'elvinci_acf_init');