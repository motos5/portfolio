<?php
// Register Post Types
add_action('init', 'wayup_post_types');
function wayup_post_types() {
    // Rename Standart Post Type
    global $wp_post_types;
    $params = $wp_post_types['post'];
    $labels = $wp_post_types['post']->labels;

    $labels->name = esc_html__('News', 'wayup');
    $labels->singular_name = esc_html__('News', 'wayup');
    // ============= End =============================//

    
    // Include Testimonials
    require_once __DIR__ . '/post-types/testimonials.php';
    // Include Services
    require_once __DIR__ . '/post-types/services.php';
    // Include Cases
    require_once __DIR__ . '/post-types/cases.php';
    
}