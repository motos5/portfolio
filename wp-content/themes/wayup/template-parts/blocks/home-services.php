<?php
// (Global Settings)
$main_currency = get_field('main_currency', 'option');

// Home Services
$services_subtitle = get_field('services_subtitle');
$services_title = get_field('services_title');
?>

<!-- Services -->
<section class="services">
    <div class="wrapper">
        <div class="services__wrap">
            <?php if($services_subtitle || $services_title) { ?>
                <h2 class="services__title secondary-title"><span><?php printf(esc_html__('%1$s', 'wayup'), $services_subtitle); ?></span><br><?php printf(esc_html__('%1$s', 'wayup'), $services_title); ?></h2>
            <?php } ?>
            <a href="<?php echo get_post_type_archive_link('services'); ?>" class="services__btn btn"><?php echo esc_html__('All services', 'wayup'); ?></a>
        </div>
        <?php
            $services = new WP_Query( [
                'posts_per_page' => 3,
                'post_type'      => 'services',
            ]);
        ?>
        <ul class="services__list services__list--home">
        <?php if ( $services->have_posts() ) : while ( $services->have_posts() ) : $services->the_post(); ?>
            <?php 
            // Metaboxes Services
            $services_price = get_post_meta(get_the_ID(), 'wayup_services_price', true);
            $services_bg_image = get_post_meta(get_the_ID(), 'wayup_services_bg-image', true);

            $services__item = '';
            $services__bg = '';
            if($services_bg_image) {
                $services__item = 'services__item_' . $services_bg_image;
                $services__bg = 'services__bg_' . $services_bg_image;
            } else {
                $services__item = 'services__item_stat';
                $services__bg = 'services__bg_stat';
            }

            ?>
                <li class="services__item <?php echo $services__item; ?>">
                    <h3 class="services__heading"><?php the_title(); ?></h3>
                    <div class="services__descr"><?php the_excerpt(); ?></div>
                    <?php if($main_currency || $services_price) { ?>
                        <p class="services__price"><?php echo esc_html($main_currency); ?><?php printf(esc_html('%1$s', 'wayup'), $services_price); ?></p>
                    <?php } ?>
                    <a href="<?php the_permalink(); ?>" class="services__order btn"><?php echo esc_html__('More', 'wayup') ?></a>
                    <div class="services__bg <?php echo $services__bg; ?>"></div>
                </li>
            <?php endwhile; wp_reset_postdata(); else: ?>
                <p><?php echo esc_html__('Content not found.', 'wayup'); ?></p>
            <?php endif; ?>
        </ul>
    </div>
</section><!-- End services -->