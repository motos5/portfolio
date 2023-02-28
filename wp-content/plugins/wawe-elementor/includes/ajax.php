<?php

//Add Ajax Actions
add_action('wp_ajax_wawe_filter', 'wawe_filter');
add_action('wp_ajax_nopriv_wawe_filter', 'wawe_filter');

// Function for Return Products AJAX
function wawe_filter() {

    $args = [
        'post_type' => 'gallery',
        'posts_per_page' => -1,
    ];

    if( ! empty( $_POST['term_id']) && $_POST['term_id'] > 0 ) {
        $args['tax_query'] = [
            'relation' => 'AND',
            [
                'taxonomy' => 'category-gallery',
                'field' => 'id',
                'terms' => intval($_POST['term_id']),
            ],
        ];
    }

    $galleryes = new WP_Query($args);
    if ( $galleryes->have_posts() ) :
        while ( $galleryes->have_posts() ) :
            $galleryes->the_post(); ?>
            <div class="gallery__content-item mix <?php echo $_POST['filter']; ?>">
                <?php the_post_thumbnail( 'full'); ?>
                <a class="gallery__item-link" href="#"></a>
            </div>
        <?php endwhile;
        wp_reset_postdata();
        else: ?>
            <p><?php echo esc_html__('Not found items', 'wawe-elementor') ?></p>
        <?php endif;
    wp_die();
}
