<?php get_header();

$works = new WP_Query( [
	'posts_per_page' => -1,
	'post_type'      => 'works',  // Какие посты нам нужно выводить
] );
?>

<section class="works" id="works">
    <div class="container container-works">
        <h2 class="title works__title"><?php echo esc_html__('List of works', 'wpweb'); ?></h2>
        <div class="works__list-works">
        <?php /*<img class="works__inner-bg" src="<?php  echo get_template_directory_uri() ?>/assets/img/works-bg.svg" alt=""> */ ?>
            <div class="works__list">
                <?php if ( $works->have_posts() ) : while ( $works->have_posts() ) : $works->the_post(); ?>
                    <div class="works__item">
                        <?php echo get_the_post_thumbnail(get_the_ID(), 'works-homepage', array('class' => "works__item-img",)); ?>
                        <h3 class="works__item-title"><?php the_title(); ?></h3>
                        <?php
                            // Load field settings and values.
                            $field = get_field('work_status', $post->ID);
                            $status = $field;
                            $status_css = '';
                            if($status == 'Finished' || $status == 'Готово') {
                                $status_css = 'finished';
                            } if($status == 'Developing' || $status == 'В розробці' || $status == 'В разработке') {
                                $status_css = 'developing';
                            }
                        ?>
                        <?php if( $status ) { ?>
                                <p class="works__item-status <?php echo $status_css; ?>"><?php echo $status; ?></p>
                        <?php } ?>
                        <a class="btn works__item-btn" href="<?php echo esc_url(get_field('work_link', $post->ID)); ?>" target="_blank"><?php echo esc_html__('Visit site', 'wpweb'); ?></a>
                    </div>
                <?php endwhile; wp_reset_postdata(); else: ?>
                    <?php echo esc_html__('Not found', 'wpweb') ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>

<?php get_footer();