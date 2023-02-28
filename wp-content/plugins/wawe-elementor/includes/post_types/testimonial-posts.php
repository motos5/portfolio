<?php

register_post_type('testimonial', array(
    'labels'             => array(
      'name'               => esc_html__('Testimonials', 'elementor-foundation'),
      'singular_name'      => esc_html__('Testimonial', 'elementor-foundation'),
      'add_new'            => esc_html__('Add new', 'elementor-foundation'),
      'add_new_item'       => esc_html__('Add new testimonial', 'elementor-foundation'),
      'edit_item'          => esc_html__('Edit testimonial', 'elementor-foundation'),
      'new_item'           => esc_html__('New testimonial', 'elementor-foundation'),
      'view_item'          => esc_html__('View testimonial', 'elementor-foundation'),
      'search_items'       => esc_html__('Search testimonials', 'elementor-foundation'),
      'not_found'          => esc_html__('Not found testimonials', 'elementor-foundation'),
      'not_found_in_trash' => esc_html__('Not found testimonials in trash', 'elementor-foundation'),
      'parent_item_colon'  => esc_html__('', 'elementor-foundation'),
      'menu_name'          => esc_html__('Testimonials', 'elementor-foundation'),
    ),
    'public'             => true,
    'publicly_queryable' => true,
    'show_ui'            => true,
    'show_in_menu'       => true,
    'query_var'          => true,
    'rewrite'            => array('slug' => 'testimonials'),
    'capability_type'    => 'post',
    'menu_icon'          => 'dashicons-buddicons-activity',
    'has_archive'        => true,
    'hierarchical'       => false,
    'menu_position'      => null,
    'supports'           => array('title','editor','thumbnail')
));