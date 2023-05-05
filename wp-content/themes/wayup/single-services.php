<?php
// (Global Settings)
$main_currency = get_field('main_currency', 'option');

// Post Type - Services
$services_single = get_field('services_single', 'option');
$cases_label = $services_single['cases_label'];


get_header();
?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<?php
// Metaboxes (Services)
$services_price = get_post_meta(get_the_ID(), 'wayup_services_price', true);
?>

	<!-- Service -->
    <section class="inner service">
        <div class="wrapper">
            <div class="inner__content">
                <h2 class="inner__title inner-title"><?php the_title(); ?></h2>
                <div class="inner__img blue-noise">
                    <?php echo get_the_post_thumbnail(get_the_ID(), 'single-services'); ?>

                    <?php
                        // Get Attachment Image Info
                        $image_data = wayup_get_attachment(get_post_thumbnail_id(get_the_ID()));
                    ?>
                    <p class="inner__short"><?php echo $image_data['description']; ?></p>
                    <?php if($services_price) { ?>
                        <span class="inner__price"><?php echo esc_html($main_currency); ?><?php printf(esc_html('%1$s', 'wayup'), $services_price); ?></span>
                    <?php } ?>
                </div>
                <div class="inner__text">
                    <?php the_content(); ?>
                    <?php
                    // GET Data to "template-order.php"
                        $get_service_id = urlencode(get_the_ID());
                        $get_title = urlencode(get_the_title());
                        $get_content = urlencode(apply_filters( 'the_content', get_the_content() ));
                        $get_price = urlencode(esc_html($services_price));
                    ?>
                    <a class="inner__btn btn" href="<?php echo home_url('/')."order?get_service_id=$get_service_id&get_title=$get_title&get_content=$get_content&get_price=$get_price"; ?>"><?php echo esc_html__('Order', 'wayup'); ?></a>
                </div>
            </div>
            
        <!-- Slider -->
            <div class="cases">
                <?php if($cases_label) { ?>
                    <h4 class="cases__cap"><?php printf(esc_html__('%1$s', 'wayup'), $cases_label); ?></h4>
                <?php } ?>
                <div class="cases__slider">

                    <?php
                        $cases = new WP_Query( [
                        'posts_per_page' => 4,
                        'post_type'      => 'cases',
                    ] );
                    ?>

                    <?php if ( $cases->have_posts() ) : while ( $cases->have_posts() ) : $cases->the_post(); ?>
                    <div class="cases__slide">
                        <div class="cases__item">
                            <div class="cases__block">
                                <h3 class="cases__heading"><?php the_title(); ?></h3>
                                <a class="cases__link link-more" href="<?php the_permalink(); ?>">
                                    <?php echo esc_html__('Read more', 'wayup') ?>
                                    <svg width="18" height="20">
                                        <use xlink:href="#nav-right"/>
                                    </svg>
                                </a>
                            </div>
                            <div class="cases__img">
                                <?php echo get_the_post_thumbnail(get_the_ID(), 'archive-cases'); ?>
                            </div>
                        </div>
                    </div>
                    <?php endwhile; wp_reset_postdata(); else: ?>
                        <p><?php echo esc_html__('Content not found.', 'wayup'); ?></p>
                    <?php endif; ?>
                    
                </div>
            </div>

        </div>
    </section><!-- End slider -->

<?php endwhile; else: ?>
	<p><?php echo esc_html__('Content not found.', 'wayup'); ?></p>
<?php endif; ?>

<?php get_footer();