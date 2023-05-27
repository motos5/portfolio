<?php
// Register menu location
function wayup_menus() {
    $locations = array(
        'menu-header' => esc_html__('Header navigation', 'wayup'),
        'menu-footer-1' => esc_html__('Footer navigation 1', 'wayup'),
        'menu-footer-2' => esc_html__('Footer navigation 2', 'wayup'),
    );
    register_nav_menus($locations);
}
add_action('init', 'wayup_menus');



// For body_class(); function CSS Styles
function wayup_body_class( $classes ) {
    if ( is_front_page() ) {
        $classes[] = 'is-home';
    } else {
        $classes[] = 'inner-page';
    }
    return $classes;
}
add_filter( 'body_class', 'wayup_body_class' );



/* ============ Settings for Posts Per Page ============ */
add_action( 'pre_get_posts', 'wayup_per_post_types');
function wayup_per_post_types( $query) {
	// Testimonials Archive Page Settings
	if( is_post_type_archive('testimonials') ) {
		$query->set('posts_per_page', 1);
	} if ( is_admin() ) {
		$query->set('posts_per_page', 20);
	}
}
/* ============ End Settings for Posts Per Page ============ */



// Truncate the Excerpt ================== //
function wayup_excerpt($limit) {
	$excerpt = explode(' ', get_the_excerpt(), $limit);

	if (count($excerpt) >= $limit) {
		array_pop($excerpt);
		$excerpt = implode(" ", $excerpt) . '...';
	} else {
		$excerpt = implode(" ", $excerpt);
	}

	$excerpt = preg_replace('`\[[^\]]*\]`', '', $excerpt);

	return $excerpt;
}



/* =============== For Images ============ */
// Image Sizes Option
add_filter( 'intermediate_image_sizes', 'delete_intermediate_image_sizes' );
function delete_intermediate_image_sizes( $sizes ){
	// Removed this sizes
	return array_diff( $sizes, [
		'medium_large',
		'large',
		'1536x1536',
		'2048x2048',
	] );
}

// Get Attachment Image Info
function wayup_get_attachment( $attachment_id ) {

	$attachment = get_post( $attachment_id );
	return array(
		'alt' => get_post_meta( $attachment->ID, '_wp_attachment_image_alt', true ),
		'caption' => $attachment->post_excerpt,
		'description' => $attachment->post_content,
		'href' => get_permalink( $attachment->ID ),
		'src' => $attachment->guid,
		'title' => $attachment->post_title
	);
}
/* =============== End For Images ============ */