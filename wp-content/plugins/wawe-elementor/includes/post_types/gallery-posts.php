<?php
// Feature (Taxonomy)
register_taxonomy(
  'category-gallery', // Type Taxonomy
  'gallery', // Post Type name
  array(
    "label" => esc_html__('Category for Galleries', 'wawe-elementor'),
    "singular_label" => esc_html__('Category for Gallery', 'wawe-elementor'),
    'rewrite' => array( 'slug' => 'gallery' ), // Slug Taxpnomy
    "hierarchical" => true,
  )
);

register_post_type('gallery', array(
    'labels'             => array(
      'name'               => esc_html__('Galleries', 'wawe-elementor'),
      'singular_name'      => esc_html__('Gallery', 'wawe-elementor'),
      'add_new'            => esc_html__('Add new', 'wawe-elementor'),
      'add_new_item'       => esc_html__('Add new gallery', 'wawe-elementor'),
      'edit_item'          => esc_html__('Edit gallery', 'wawe-elementor'),
      'new_item'           => esc_html__('New gallery', 'wawe-elementor'),
      'view_item'          => esc_html__('View gallery', 'wawe-elementor'),
      'search_items'       => esc_html__('Search galleries', 'wawe-elementor'),
      'not_found'          => esc_html__('Not found galleries', 'wawe-elementor'),
      'not_found_in_trash' => esc_html__('Not found galleries in trash', 'wawe-elementor'),
      'parent_item_colon'  => esc_html__('', 'wawe-elementor'),
      'menu_name'          => esc_html__('Galleries', 'wawe-elementor'),
    ),
    'public'             => true,
    'publicly_queryable' => true,
    'show_ui'            => true,
    'show_in_menu'       => true,
    'query_var'          => true,
    'rewrite'            => array('slug' => 'galleries'),
    'capability_type'    => 'post',
    'menu_icon'          => 'dashicons-format-gallery',
    'has_archive'        => true,
    'hierarchical'       => false,
    'menu_position'      => null,
    'supports'           => array('title', 'thumbnail', 'excerpt')
));