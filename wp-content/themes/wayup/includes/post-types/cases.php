<?php
register_post_type('cases', array(
    'labels'             => array(
        'name'               => esc_html__('Cases', 'wayup'),
        'singular_name'      => esc_html__('Case', 'wayup'),
        'add_new'            => esc_html__('Add new', 'wayup'),
        'add_new_item'       => esc_html__('Add new case', 'wayup'),
        'edit_item'          => esc_html__('Edit case', 'wayup'),
        'new_item'           => esc_html__('New case', 'wayup'),
        'view_item'          => esc_html__('View case', 'wayup'),
        'search_items'       => esc_html__('Search case', 'wayup'),
        'not_found'          => esc_html__('Not found cases', 'wayup'),
        'not_found_in_trash' => esc_html__('Not found cases in trash', 'wayup'),
        'parent_item_colon'  => esc_html__('', 'wayup'),
        'menu_name'          => esc_html__('Cases', 'wayup'),
    ),
    'public'             => true,
    'publicly_queryable' => true,
    'show_ui'            => true,
    'show_in_menu'       => true,
    'query_var'          => true,
    'rewrite'            => array('slug' => 'cases'),
    'capability_type'    => 'post',
    'menu_icon'          => 'dashicons-nametag',
    'has_archive'        => true,
    'hierarchical'       => false,
    'menu_position'      => null,
    'supports'           => array('title','editor','thumbnail','excerpt')
) );