<?php
$top_slider_title = get_field('top_slider_title', 'option');

// Slider Item Function
$slider_item = function() {
    if ( have_rows('top_slider', 'option') ) {
        while ( have_rows('top_slider', 'option') ) { the_row();
            $image = get_sub_field('image', 'option');
            $title = elvinci_slider_title(5);
            $text = get_sub_field('text', 'option');
            ?>
            <div class="slider__box">
                <div class="slider__item">
                    <?php if($image) { ?>
                        <img class="slider__image" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
                    <?php } ?>
                    <div class="slider__content">
                        <?php if($title || $text) { ?>
                            <h2 class="slider__title"><?php  printf(esc_html__('%1$s', 'elvinci'), $title); ?></h2>
                            <p class="slider__text">
                            <?php printf(esc_html__('%1$s', 'elvinci'), $text); ?>
                            </p>
                        <?php } ?>
                    </div>
                </div>
            </div>
        <?php }
    }};
?>
<section class="top-slider">
    <div class="container">
        <?php if($top_slider_title) { ?>
            <h1 class="top-slider__title"><?php printf(esc_html__('%1$s', 'elvinci'), $top_slider_title); ?></h1>
        <?php } ?>
        <div class="top-slider__inner slider">
            <?php $slider_item(); ?>
        </div>
    </div>
</section>