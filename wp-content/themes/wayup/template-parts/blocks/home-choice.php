<?php
// Home Help
$choice_image = get_field('choice_image');
$choice_subtitle = get_field('choice_subtitle');
$choice_title = get_field('choice_title');
$choice_description = get_field('choice_description');
$choice_link = get_field('choice_link');
$choice_label = get_field('choice_label');

?>

<!-- Choice -->
<section class="choice" <?php if($choice_image) { ?>style="background: url('<?php echo esc_url($choice_image); ?>') no-repeat center top;"<?php } ?>>
    <div class="wrapper">
        <div class="choice__wrap">
            <?php if($choice_subtitle || $choice_title) { ?>
                <h2 class="choice__title secondary-title"><span><?php printf(esc_html__('%1$s', 'wayup'), $choice_subtitle); ?></span><br><?php printf(esc_html__('%1$s', 'wayup'), $choice_title); ?></h2>
            <?php } ?>
            <?php if($choice_description) { ?>
                <div class="choice__descr">
                    <?php printf(esc_html__('%1$s', 'wayup'), $choice_description); ?>
                </div>
            <?php } ?>
            <?php if($choice_link && $choice_label) { ?>
                <a href="<?php echo esc_url($choice_link); ?>" class="choice__btn noise">
                <?php printf(esc_html__('%1$s', 'wayup'), $choice_label); ?>
                    <svg width="18" height="20">
                        <use xlink:href="#nav-right"/>
                    </svg>
                </a>
            <?php } ?>
        </div>
    </div>
</section><!-- End choice -->