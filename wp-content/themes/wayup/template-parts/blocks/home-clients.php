<?php
// Home Clients
$clients_subtitle = get_field('clients_subtitle');
$clients_title = get_field('clients_title');
?>

<!-- Clients -->
<section class="clients">
    <div class="wrapper">
        <?php if($clients_subtitle || $clients_title) { ?>
            <h2 class="clients__title secondary-title"><span><?php printf(esc_html__('%1$s', 'wayup'), $clients_subtitle); ?></span><br><?php printf(esc_html__('%1$s', 'wayup'), $clients_title); ?></h2>
        <?php } ?>
        <div class="сlients__slider">
            
            <?php
                $clients = new WP_Query( [
                    'posts_per_page' => -1,
                    'post_type'      => 'testimonials',
                ]);
            ?>
            <?php if ( $clients->have_posts() ) : while ( $clients->have_posts() ) : $clients->the_post();
                // Metaboxes (Testimonials)
                $testimonials_link = get_post_meta(get_the_ID(), 'wayup_testimonials_link', true);
                $testimonials_date = get_post_meta(get_the_ID(), 'wayup_testimonials_date', true);
            ?>
                <div class="clients__slide">
                    <div class="clients__box">
                        <div class="clients__photo">
                            <div class="clients__img">
                                <?php echo get_the_post_thumbnail(get_the_ID(), 'home-testimonials'); ?>
                            </div>
                            <?php if($testimonials_link) { ?>
                                <a href="<?php echo esc_url($testimonials_link); ?>" class="clients__link">
                                    <svg  width="14" height="17">
                                        <use xlink:href="#facebook"/>
                                    </svg>
                                </a>
                            <?php } ?>
                        </div>
                        <div class="clients__say">
                            <p class="clients__name"><?php the_title(); ?></p>
                            <div class="clients__text">
                                <?php the_content(); ?>
                            </div>
                        </div>
                        <?php if($testimonials_date) { ?>
                            <div class="add-time">
                                <svg width="13" height="13">
                                    <use xlink:href="#time"/>
                                </svg>
                                <p class="add-time__date"><?php printf(esc_html__('%1$s', 'wayup'), $testimonials_date); ?></p>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            <?php endwhile; wp_reset_postdata(); else: ?>
                <p><?php echo esc_html__('Content not found.', 'wayup'); ?></p>
            <?php endif; ?>
            
            
            
            
        </div>
    </div>
</section><!-- End clients -->