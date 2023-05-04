<?php
register_post_type('testimonials', array(
    'labels'             => array(
        'name'               => esc_html__('Testimonials', 'wayup'),
        'singular_name'      => esc_html__('Testimonial', 'wayup'),
        'add_new'            => esc_html__('Add new', 'wayup'),
        'add_new_item'       => esc_html__('Add new testimonial', 'wayup'),
        'edit_item'          => esc_html__('Edit testimonial', 'wayup'),
        'new_item'           => esc_html__('New testimonial', 'wayup'),
        'view_item'          => esc_html__('View testimonial', 'wayup'),
        'search_items'       => esc_html__('Search testimonial', 'wayup'),
        'not_found'          => esc_html__('Not found testimonials', 'wayup'),
        'not_found_in_trash' => esc_html__('Not found testimonials in trash', 'wayup'),
        'parent_item_colon'  => esc_html__('', 'wayup'),
        'menu_name'          => esc_html__('Testimonials', 'wayup'),
    ),
    'public'             => true,
    'publicly_queryable' => true,
    'show_ui'            => true,
    'show_in_menu'       => true,
    'query_var'          => true,
    'rewrite'            => array('slug' => 'testimonials'),
    'capability_type'    => 'post',
    'menu_icon'          => 'dashicons-megaphone',
    'has_archive'        => true,
    'hierarchical'       => false,
    'menu_position'      => null,
    'supports'           => array('title','editor','thumbnail')
) );