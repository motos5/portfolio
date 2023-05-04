<?php
register_post_type('services', array(
    'labels'             => array(
        'name'               => esc_html__('Services', 'wayup'),
        'singular_name'      => esc_html__('Service', 'wayup'),
        'add_new'            => esc_html__('Add new', 'wayup'),
        'add_new_item'       => esc_html__('Add new service', 'wayup'),
        'edit_item'          => esc_html__('Edit service', 'wayup'),
        'new_item'           => esc_html__('New service', 'wayup'),
        'view_item'          => esc_html__('View service', 'wayup'),
        'search_items'       => esc_html__('Search service', 'wayup'),
        'not_found'          => esc_html__('Not found services', 'wayup'),
        'not_found_in_trash' => esc_html__('Not found services in trash', 'wayup'),
        'parent_item_colon'  => esc_html__('', 'wayup'),
        'menu_name'          => esc_html__('Services', 'wayup'),
    ),
    'public'             => true,
    'publicly_queryable' => true,
    'show_ui'            => true,
    'show_in_menu'       => true,
    'query_var'          => true,
    'rewrite'            => array('slug' => 'services'),
    'capability_type'    => 'post',
    'menu_icon'          => 'dashicons-hammer',
    'has_archive'        => true,
    'hierarchical'       => false,
    'menu_position'      => null,
    'supports'           => array('title','editor','thumbnail','excerpt')
) );