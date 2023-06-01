<?php
// Home Help
$help_subtitle = get_field('help_subtitle');
$help_title = get_field('help_title');
$help_description = get_field('help_description');
$help_link = get_field('help_link');

$help_items = get_field('help_items'); // Array
$block_1_title = $help_items['block_1_title'];
$block_1_description = $help_items['block_1_description'];
$block_2_title = $help_items['block_2_title'];
$block_2_description = $help_items['block_2_description'];
$block_3_title = $help_items['block_3_title'];
$block_3_description = $help_items['block_3_description'];


?>

<!-- Help -->
<section class="help">
    <div class="wrapper">
        <div class="help__block">
            <?php if($help_subtitle || $help_title) { ?>
                <h2 class="help__title secondary-title"><span><?php printf(esc_html__('%1$s', 'wayup'), $help_subtitle); ?></span> <?php printf(esc_html__('%1$s', 'wayup'), $help_title); ?></h2>
            <?php } ?>
            <?php if($help_description) { ?>
                <p class="help__descr"><?php printf(esc_html__('%1$s', 'wayup'), $help_description); ?></p>
            <?php } ?>
            <?php if($help_link) { ?>
                <a href="<?php echo esc_url($help_link); ?>" class="help__btn btn popup-link"><?php echo esc_html__('To get a consultation', 'wayup'); ?></a>
            <?php } ?>
        </div>
        <ul class="help__list">
            <?php if($block_1_title && $block_1_description) { ?>
                <li class="help__item">
                    <div class="help__icon help__icon_rocket"></div>
                    <h4 class="help__heading"><?php printf(esc_html__('%1$s', 'wayup'), $block_1_title); ?></h4>
                    <?php printf(esc_html__('%1$s', 'wayup'), $block_1_description); ?>
                </li>
            <?php } ?>
            <?php if($block_2_title && $block_2_description) { ?>
                <li class="help__item">
                    <div class="help__icon help__icon_monitor"></div>
                    <h4 class="help__heading"><?php printf(esc_html__('%1$s', 'wayup'), $block_2_title); ?></h4>
                    <?php printf(esc_html__('%1$s', 'wayup'), $block_2_description); ?>
                </li>
            <?php } ?>
            <?php if($block_3_title && $block_3_description) { ?>
                <li class="help__item">
                    <div class="help__icon help__icon_brain"></div>
                    <h4 class="help__heading"><?php printf(esc_html__('%1$s', 'wayup'), $block_3_title); ?></h4>
                    <?php printf(esc_html__('%1$s', 'wayup'), $block_3_description); ?>
                </li>
            <?php } ?>
        </ul>
    </div>
</section><!-- End help -->