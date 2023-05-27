<?php

// Изменяем стандартый Post Type
function o_marketing_post_types() {
    
    global $wp_post_types;
    $params = $wp_post_types['post'];
    $labels = $wp_post_types['post']->labels;

    // Labels
    $labels->name = esc_html__('Sliders', 'o-marketing');
    $labels->singular_name = esc_html__('Slider', 'o-marketing');
    $labels->add_new = esc_html__('Add new', 'o-marketing');
    $labels->add_new_item = esc_html__('Add new slider', 'o-marketing');
    $labels->edit_item = esc_html__('Edit slider', 'o-marketing');
    $labels->new_item = esc_html__('New slider', 'o-marketing');
    $labels->view_item = esc_html__('View slider', 'o-marketing');
    $labels->search_items = esc_html__('Search slider', 'o-marketing');
    $labels->not_found = esc_html__('Not found sliders', 'o-marketing');
    $labels->not_found_in_trash = esc_html__('Not found sliders in trash', 'o-marketing');
    $labels->menu_name = esc_html__('Sliders', 'o-marketing');
    $labels->name_admin_bar = esc_html__('Sliders', 'o-marketing');
    $labels->all_items = esc_html__('All Sliders', 'o-marketing');

    // Params
    $params->menu_icon = 'dashicons-admin-page';

    

}
add_action('init', 'o_marketing_post_types');