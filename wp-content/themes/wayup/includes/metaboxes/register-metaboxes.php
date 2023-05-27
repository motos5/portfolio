<?php
// Регистрация Metaboxies
function wayup_metaboxes($meta_boxes) {
	
	$meta_boxes = array();

    $prefix = "wayup_";

	// Metaboxe for Post Type (Testimonial)
    $meta_boxes[] = array(
        'id'         => 'testimonial_metaboxes', // ID Metaboxe
        'title'      => esc_html__('Testimonials data', 'wayup'), // Title Metaboxe
        'pages'      => array( 'testimonials', ), // Metaboxies for Post Type Testimonials
        'context'    => 'normal',
        'priority'   => 'high',
        'show_names' => true, // Show field names on the left
        // 'show_on'    => array( 'key' => 'page-template', 'value' => array('page-home.php'), ), // Раскомментировать, если Metaboxes создаются для станицы - page

        'fields' => array(
			// Поля для Metaboxies
            array(
                'name' => esc_html__('Social link', 'wayup'),
                'desc' => esc_html__('Enter the link to the social network.', 'wayup'),
                'id'   => $prefix . 'testimonials_link',
                'type' => 'text',
            ),
            array(
                'name' => esc_html__('Data Post', 'wayup'),
                'desc' => esc_html__('Select the desired date.', 'wayup'),
                'id'   => $prefix . 'testimonials_date',
                'type' => 'text_date',
            ),
        )
    );

	// Metaboxe for Post Type (Services)
    $meta_boxes[] = array(
        'id'         => 'services_metaboxes', // ID Metaboxe
        'title'      => esc_html__('Services data', 'wayup'), // Title Metaboxe
        'pages'      => array( 'services', ), // Metaboxies for Post Type Testimonials
        'context'    => 'normal',
        'priority'   => 'high',
        'show_names' => true, // Show field names on the left
        // 'show_on'    => array( 'key' => 'page-template', 'value' => array('page-home.php'), ), // Раскомментировать, если Metaboxes создаются для станицы - page

        'fields' => array(
			
            array(
                'name' => esc_html__('Price', 'wayup'),
                'desc' => esc_html__('Enter the cost of this service as a number.', 'wayup'),
                'id'   => $prefix . 'services_price',
                'type' => 'text',
            ),
            array(
                'name' => esc_html__('Background Image', 'wayup'),
                'desc' => esc_html__('Select an image to be displayed on the background of the service card.', 'wayup'),
                'id'   => $prefix . 'services_bg-image',
                'type' => 'select',
				'options' => array(
					array('name' => esc_html__('Statistic', 'wayup'), 'value' => 'stat'),
					array('name' => esc_html__('Idea', 'wayup'), 'value' => 'idea'),
					array('name' => esc_html__('Internet', 'wayup'), 'value' => 'internet'),
					array('name' => esc_html__('Info', 'wayup'), 'value' => 'info'),
					array('name' => esc_html__('Busy', 'wayup'), 'value' => 'busy'),
					array('name' => esc_html__('Target', 'wayup'), 'value' => 'target')
				)
            ),
        )
    );

	return $meta_boxes;
}