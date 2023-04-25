<?php

add_action('init', 'wpweb_post_types');
function wpweb_post_types() {
    register_post_type('works', array(
        'labels'             => array(
            'name'               => esc_html__('Works', 'wpweb'),
            'singular_name'      => esc_html__('Work', 'wpweb'),
            'add_new'            => esc_html__('Add new', 'wpweb'),
            'add_new_item'       => esc_html__('Add new work', 'wpweb'),
            'edit_item'          => esc_html__('Edit work', 'wpweb'),
            'new_item'           => esc_html__('New work', 'wpweb'),
            'view_item'          => esc_html__('View work', 'wpweb'),
            'search_items'       => esc_html__('Search work', 'wpweb'),
            'not_found'          => esc_html__('Not found works', 'wpweb'),
            'not_found_in_trash' => esc_html__('Not found works in trash', 'wpweb'),
            'parent_item_colon'  => esc_html__('', 'wpweb'),
            'menu_name'          => esc_html__('Works', 'wpweb'),
        ),
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array('slug' => 'works'),
        'capability_type'    => 'post',
        'menu_icon'          => 'dashicons-hammer',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array('title', 'thumbnail','excerpt')
    ) );
}