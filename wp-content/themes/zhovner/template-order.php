<?php
/*
Template Name: Order
Template Post Type: post, page, product
*/

// (Blocks Settings)
$form_title = get_field('form_title', 'option');
$form_shortcode = get_field('form_shortcode', 'option');

get_header(); ?>


<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<?php
$order = new WP_Query( [
    'post_type' => 'post',
	'posts_per_page' => -1,
    'category_name' => 'ordering',
    'orderby' => 'title',
    'order' => 'DESC'
] );
?>
<!-- На заказ -->
<div class="to-order">
    <div class="container">
        <div class="row">
            <div class="col-12">
            <?php if ( $order->have_posts() ) : while ( $order->have_posts() ) : $order->the_post(); ?>
                <!-- На заказ -->
                <div class="to-order-card">
                    <h2><?php echo esc_html__(get_the_title()); ?></h2>
                    <div class="to-order-card-inner">
                        <?php
                        if( has_post_thumbnail() ) {
                            the_post_thumbnail('full');
                            }
                        else {
                            echo '<img src="'.get_template_directory_uri().'/assets/img/order-default.jpg" />';
                            }
                        ?>
                        <div class="to-order-text">
                            <?php echo get_the_content(); ?>
                            <p><?php echo get_the_excerpt(); ?></p>
                        </div>
                    </div>
                </div>
                <?php endwhile; wp_reset_postdata(); else: ?>
                    <p><?php echo esc_html__('Content not found.', 'wayup'); ?></p>
                <?php endif; ?>
                
                <!-- Форма -->
                <div class="to-order-form">
                    <?php if($form_title) { ?>
                        <h3><?php printf(esc_html__('%1$s', 'wayup'), $form_title); ?></h3>
                    <?php } ?>
                    <?php if($form_shortcode) {
                        echo do_shortcode($form_shortcode);
                    }?>
                </div>
            </div>
        </div>
    </div>
</div>

    <?php endwhile;
else : ?>
    <p><?php echo esc_html__('Content not found.', 'zhovner'); ?></p>
<?php endif; ?>


<?php get_footer();
