<?php
// Register Post Types
add_action('init', 'wayup_post_types');
function wayup_post_types() {
    
    // Include Testimonials
    require_once __DIR__ . '/post-types/testimonials.php';
    // Include Services
    require_once __DIR__ . '/post-types/services.php';
    // Include News
    require_once __DIR__ . '/post-types/news.php';
    // Include Cases
    require_once __DIR__ . '/post-types/cases.php';
    
}