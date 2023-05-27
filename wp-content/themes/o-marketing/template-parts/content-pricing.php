<?php
    $pricing_title = get_field('pricing_title', 'option');
    
    // Plan 1
    $pricing_1_name = get_field('pricing_1_name', 'option');
    $pricing_1_num = get_field('pricing_1_num', 'option');
    $pricing_1_row_1 = get_field('pricing_1_row_1', 'option');
    $pricing_1_row_2 = get_field('pricing_1_row_2', 'option');
    $pricing_1_row_3 = get_field('pricing_1_row_3', 'option');
    $pricing_1_row_4 = get_field('pricing_1_row_4', 'option');
    $pricing_1_row_5 = get_field('pricing_1_row_5', 'option');
    $pricing_1_url = get_field('pricing_1_url', 'option');

    // Plan 2
    $pricing_2_name = get_field('pricing_2_name', 'option');
    $pricing_2_num = get_field('pricing_2_num', 'option');
    $pricing_2_row_1 = get_field('pricing_2_row_1', 'option');
    $pricing_2_row_2 = get_field('pricing_2_row_2', 'option');
    $pricing_2_row_3 = get_field('pricing_2_row_3', 'option');
    $pricing_2_row_4 = get_field('pricing_2_row_4', 'option');
    $pricing_2_row_5 = get_field('pricing_2_row_5', 'option');
    $pricing_2_url = get_field('pricing_2_url', 'option');

    // Plan 3
    $pricing_3_name = get_field('pricing_3_name', 'option');
    $pricing_3_num = get_field('pricing_3_num', 'option');
    $pricing_3_row_1 = get_field('pricing_3_row_1', 'option');
    $pricing_3_row_2 = get_field('pricing_3_row_2', 'option');
    $pricing_3_row_3 = get_field('pricing_3_row_3', 'option');
    $pricing_3_row_4 = get_field('pricing_3_row_4', 'option');
    $pricing_3_row_5 = get_field('pricing_3_row_5', 'option');
    $pricing_3_url = get_field('pricing_3_url', 'option');
?>

<section class="pricing">
    <div class="container">
        <?php if($pricing_title) { ?>
            <h2 class="title pricing__title"><?php printf(esc_html__('%1$s', 'o-marketing'), $pricing_title); ?></h2>
        <?php } ?>
        <div class="pricing__items">
            <?php if($pricing_1_name && $pricing_1_num) { ?>
                <ul class="pricing__item">
                    <li class="pricing__item-name"><?php printf(esc_html__('%1$s', 'o-marketing'), $pricing_1_name); ?></li>
                    <li class="pricing__item-num"><sup><?php echo esc_html__('$', 'o-marketing'); ?></sup><?php printf(esc_html__('%1$s', 'o-marketing'), $pricing_1_num); ?></li>
                    <?php if($pricing_1_row_1 || $pricing_1_row_2 || $pricing_1_row_3 || $pricing_1_row_4 || $pricing_1_row_5) { ?>
                        <li><?php printf(esc_html__('%1$s', 'o-marketing'), $pricing_1_row_1); ?></li>
                        <li><?php printf(esc_html__('%1$s', 'o-marketing'), $pricing_1_row_2); ?></li>
                        <li><?php printf(esc_html__('%1$s', 'o-marketing'), $pricing_1_row_3); ?></li>
                        <li><?php printf(esc_html__('%1$s', 'o-marketing'), $pricing_1_row_4); ?></li>
                        <li><?php printf(esc_html__('%1$s', 'o-marketing'), $pricing_1_row_5); ?></li>
                    <?php } ?>
                    <li><a class="pricing__item-link" href="#"><?php echo esc_html__('CHOOSE PLAN', 'o-marketing'); ?></a></li>
                </ul>
            <?php } ?>
            <?php if($pricing_2_name && $pricing_2_num) { ?>
                <ul class="pricing__item">
                    <li class="pricing__item-name"><?php printf(esc_html__('%1$s', 'o-marketing'), $pricing_2_name); ?></li>
                    <li class="pricing__item-num"><sup><?php echo esc_html__('$', 'o-marketing'); ?></sup><?php printf(esc_html__('%1$s', 'o-marketing'), $pricing_2_num); ?></li>
                    <?php if($pricing_2_row_1 || $pricing_2_row_2 || $pricing_2_row_3 || $pricing_2_row_4 || $pricing_2_row_5) { ?>
                        <li><?php printf(esc_html__('%1$s', 'o-marketing'), $pricing_2_row_1); ?></li>
                        <li><?php printf(esc_html__('%1$s', 'o-marketing'), $pricing_2_row_2); ?></li>
                        <li><?php printf(esc_html__('%1$s', 'o-marketing'), $pricing_2_row_3); ?></li>
                        <li><?php printf(esc_html__('%1$s', 'o-marketing'), $pricing_2_row_4); ?></li>
                        <li><?php printf(esc_html__('%1$s', 'o-marketing'), $pricing_2_row_5); ?></li>
                    <?php } ?>
                    <li><a class="pricing__item-link" href="#"><?php echo esc_html__('CHOOSE PLAN', 'o-marketing'); ?></a></li>
                </ul>
            <?php } ?>
            <?php if($pricing_3_name && $pricing_3_num) { ?>
                <ul class="pricing__item">
                    <li class="pricing__item-name"><?php printf(esc_html__('%1$s', 'o-marketing'), $pricing_3_name); ?></li>
                    <li class="pricing__item-num"><sup><?php echo esc_html__('$', 'o-marketing'); ?></sup><?php printf(esc_html__('%1$s', 'o-marketing'), $pricing_3_num); ?></li>
                    <?php if($pricing_3_row_1 || $pricing_3_row_2 || $pricing_3_row_3 || $pricing_3_row_4 || $pricing_3_row_5) { ?>
                        <li><?php printf(esc_html__('%1$s', 'o-marketing'), $pricing_3_row_1); ?></li>
                        <li><?php printf(esc_html__('%1$s', 'o-marketing'), $pricing_3_row_2); ?></li>
                        <li><?php printf(esc_html__('%1$s', 'o-marketing'), $pricing_3_row_3); ?></li>
                        <li><?php printf(esc_html__('%1$s', 'o-marketing'), $pricing_3_row_4); ?></li>
                        <li><?php printf(esc_html__('%1$s', 'o-marketing'), $pricing_3_row_5); ?></li>
                    <?php } ?>
                    <li><a class="pricing__item-link" href="#"><?php echo esc_html__('CHOOSE PLAN', 'o-marketing'); ?></a></li>
                </ul>
            <?php } ?>
        </div>
    </div>
</section>