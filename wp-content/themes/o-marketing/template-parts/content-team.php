<?php

    $team_title = get_field('team_title', 'option');

    // Images Team
    $team_team_image_1 = get_field('team_team_image_1', 'option');
    $team_team_image_2 = get_field('team_team_image_2', 'option');
    $team_team_image_3 = get_field('team_team_image_3', 'option');

    // Names Team
    $team_team_name_1 = get_field('team_team_name_1', 'option');
    $team_team_name_2 = get_field('team_team_name_2', 'option');
    $team_team_name_3 = get_field('team_team_name_3', 'option');

    // Positions Team
    $team_team_position_1 = get_field('team_team_position_1', 'option');
    $team_team_position_2 = get_field('team_team_position_2', 'option');
    $team_team_position_3 = get_field('team_team_position_3', 'option');
?>

<section class="team" id="team">
    <div class="container">
        <?php if($team_title) { ?>
            <h2 class="title team__title"><?php printf(esc_html__('%1$s', 'o-marketing'), $team_title); ?></h2>
        <?php } ?>
        <div class="team__items">
            <?php if($team_team_image_1 && $team_team_name_1 || $team_team_position_1) { ?>
                <div class="team__item">
                    <img src="<?php printf(esc_attr('%1$s', 'o-marketing'), $team_team_image_1); ?>" alt="<?php printf(esc_html__('%1$s', 'o-marketing'), $team_team_name_1); ?>">
                    <div class="team__user">
                        <p class="team__name"><?php printf(esc_html__('%1$s', 'o-marketing'), $team_team_name_1); ?></p>
                        <p class="team__position"><?php printf(esc_html__('%1$s', 'o-marketing'), $team_team_position_1); ?></p>
                    </div>
                </div>
            <?php } ?>
            <?php if($team_team_image_2 && $team_team_name_2 || $team_team_position_2) { ?>
                <div class="team__item">
                    <img src="<?php printf(esc_attr('%1$s', 'o-marketing'), $team_team_image_2); ?>" alt="<?php printf(esc_html__('%1$s', 'o-marketing'), $team_team_name_2); ?>">
                    <div class="team__user">
                        <p class="team__name"><?php printf(esc_html__('%1$s', 'o-marketing'), $team_team_name_2); ?></p>
                        <p class="team__position"><?php printf(esc_html__('%1$s', 'o-marketing'), $team_team_position_2); ?></p>
                    </div>
                </div>
            <?php } ?>
            <?php if($team_team_image_3 && $team_team_name_3 || $team_team_position_3) { ?>
                <div class="team__item">
                    <img src="<?php printf(esc_attr('%1$s', 'o-marketing'), $team_team_image_3); ?>" alt="<?php printf(esc_html__('%1$s', 'o-marketing'), $team_team_name_3); ?>">
                    <div class="team__user">
                        <p class="team__name"><?php printf(esc_html__('%1$s', 'o-marketing'), $team_team_name_3); ?></p>
                        <p class="team__position"><?php printf(esc_html__('%1$s', 'o-marketing'), $team_team_position_3); ?></p>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</section>