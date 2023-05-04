<?php
register_post_type('news', array(
    'labels'             => array(
        'name'               => esc_html__('News', 'wayup'),
        'singular_name'      => esc_html__('New', 'wayup'),
        'add_new'            => esc_html__('Add new', 'wayup'),
        'add_new_item'       => esc_html__('Add new new', 'wayup'),
        'edit_item'          => esc_html__('Edit new', 'wayup'),
        'new_item'           => esc_html__('New new', 'wayup'),
        'view_item'          => esc_html__('View new', 'wayup'),
        'search_items'       => esc_html__('Search new', 'wayup'),
        'not_found'          => esc_html__('Not found news', 'wayup'),
        'not_found_in_trash' => esc_html__('Not found news in trash', 'wayup'),
        'parent_item_colon'  => esc_html__('', 'wayup'),
        'menu_name'          => esc_html__('News', 'wayup'),
    ),
    'public'             => true,
    'publicly_queryable' => true,
    'show_ui'            => true,
    'show_in_menu'       => true,
    'query_var'          => true,
    'rewrite'            => array('slug' => 'news'),
    'capability_type'    => 'post',
    'menu_icon'          => 'dashicons-calendar',
    'has_archive'        => true,
    'hierarchical'       => false,
    'menu_position'      => null,
    'supports'           => array('title','editor','thumbnail','excerpt')
) );