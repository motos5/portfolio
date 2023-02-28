<?php
    $expertise_title = get_field('expertise_title', 'option');

    $branding = get_field('branding_info', 'option');
    $design = get_field('design_info', 'option');
    $development = get_field('development_info', 'option');

    $expertise_text = get_field('expertise_text', 'option');

    $expertise_items_design_title = get_field('expertise_items_design_title', 'option');
    $expertise_items_design_text = get_field('expertise_items_design_text', 'option');

    $expertise_items_development_title = get_field('expertise_items_development_title', 'option');
    $expertise_items_development_text = get_field('expertise_items_development_text', 'option');

    $expertise_items_marketing_title = get_field('expertise_items_marketing_title', 'option');
    $expertise_items_maketing_text = get_field('expertise_items_maketing_text', 'option');
?>
<section class="expertise">
    <div class="container">
        <?php if($expertise_title) { ?>
            <h2 class="title expertise__title"><?php printf(esc_html__('%1$s', 'o-marketing'), $expertise_title); ?></h2>
        <?php } ?>
        <div class="expertise__inner">
            <div class="expertise__info">
                <div class="expertise__info-item">
                    <?php echo esc_html__('BRANDING', 'o-marketing'); ?>
                    <span style="width: calc(100% - <?php echo $branding ?>%);"><?php echo $branding; ?>%</span>
                </div>
                <div class="expertise__info-item">
                    <?php echo esc_html__('DESIGN', 'o-marketing'); ?>
                    <span style="width: calc(100% - <?php echo $design ?>%);"><?php echo $design; ?>%</span>
                </div>
                <div class="expertise__info-item">
                    <?php echo esc_html__('DEVELOPMENT', 'o-marketing'); ?>
                    <span style="width: calc(100% - <?php echo $development ?>%);"><?php echo $development; ?>%</span>
                </div>
            </div>
            <div class="expertise__text">
                <?php if($expertise_text) { ?>
                    <?php printf(esc_html__('%1$s', 'o-marketing'), $expertise_text); ?>
                <?php } ?>
            </div>
        </div>
        <div class="expertise_items">
            <div class="expertise__item expertise__item--design">
                <?php if($expertise_items_design_title) { ?>
                    <h4 class="expertise__item-title"><?php printf(esc_html__('%1$s', 'o-marketing'), $expertise_items_design_title); ?></h4>
                <?php } ?>
                <?php if($expertise_items_design_text) { ?>
                    <p class="expertise__item-text">
                        <?php printf(esc_html__('%1$s', 'o-marketing'), $expertise_items_design_text); ?>
                    </p>
                <?php } ?>
            </div>
            <div class="expertise__item expertise__item--development">
                <?php if($expertise_items_development_title) { ?>
                    <h4 class="expertise__item-title"><?php printf(esc_html__('%1$s', 'o-marketing'), $expertise_items_development_title); ?></h4>
                <?php } ?>
                <?php if($expertise_items_development_text) { ?>
                    <p class="expertise__item-text">
                        <?php printf(esc_html__('%1$s', 'o-marketing'), $expertise_items_development_text); ?>
                    </p>
                <?php } ?>
            </div>
            <div class="expertise__item expertise__item--marketing">
                <?php if($expertise_items_marketing_title) { ?>
                    <h4 class="expertise__item-title"><?php printf(esc_html__('%1$s', 'o-marketing'), $expertise_items_marketing_title); ?></h4>
                <?php } ?>
                <?php if($expertise_items_maketing_text) { ?>
                    <p class="expertise__item-text">
                        <?php printf(esc_html__('%1$s', 'o-marketing'), $expertise_items_maketing_text); ?>
                    </p>
                <?php } ?>
            </div>
        </div>
    </div>
</section>