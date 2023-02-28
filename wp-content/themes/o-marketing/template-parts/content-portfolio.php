<?php
	$portfolio_title = get_field('portfolio_title', 'option');
	
    $blockquote_text = get_field('portfolio_blockquote_text', 'option');
    $blockquote_author = get_field('portfolio_blockquote_author', 'option');

    $video_link = get_field('portfolio_video_url', 'option');
    $video_icon = get_field('portfolio_video_icon', 'option');

    $web_number = get_field('portfolio_web_number', 'option');
    $web_text = get_field('portfolio_web_text', 'option');
    $logo_number = get_field('portfolio_logo_number', 'option');
    $logo_text = get_field('portfolio_logo_text', 'option');
    $print_number = get_field('portfolio_print_number', 'option');
    $print_text = get_field('portfolio_print_text', 'option');
    $mobile_number = get_field('portfolio_mobile_number', 'option');
    $mobile_text = get_field('portfolio_mobile_text', 'option');
?>
<section class="portfolio" id="portfolio">
    <div class="container">
        <div class="portfolio__top">
            <?php if($portfolio_title) { ?>
                <h2 class="title"><?php printf(esc_html__('%1$s', 'o-marketing'), $portfolio_title); ?></h2>
            <?php } ?>
            <div class="portfolio__filter">
                <?php
                
                    $filter_button = function() {
                        if ( have_rows('portfolio_buttons', 'option') ) {
                            while ( have_rows('portfolio_buttons', 'option') ) { the_row();
                                $button_data = get_sub_field('button_data', 'option');
                                $button_name = get_sub_field('button_name', 'option'); ?>
                                    <button class="portfolio__btn" data-filter=".category-<?php echo esc_attr($button_data, 'o-marketing'); ?>"><?php echo esc_html__($button_name, 'o-marketing'); ?></button>
                                <?php }
                        }
                    }; ?>
                    <button class="portfolio__btn" data-filter="all"><?php esc_html__('ALL', 'o-marketing'); ?><?php echo esc_html__('All', 'o-marketing'); ?></button>
                    <?php $filter_button();
                ?>
            </div>
        </div>
    </div>
    <div class="portfolio__content">
        <?php
        // Получим все строки повторителя
        $rows = get_field('portfolio_buttons', 'option');
        
        $first_row = $rows[0]; // Получим только первую строку
        $first_row_data = $first_row['button_data']; // Получим значение вложенного поля
        $second_row = $rows[1]; // Получим только вторую строку
        $second_row_data = $second_row['button_data']; // Получим значение вложенного поля
        $third_row = $rows[2]; // Получим только третью строку
        $third_row_data = $third_row['button_data']; // Получим значение вложенного поля
        $fourth_row = $rows[3]; // Получим только четвёртую строку
        $fourth_row_data = $fourth_row['button_data']; // Получим значение вложенного поля
        ?>
        <?php if(get_field('portfolio_image_1', 'option')) { ?>
            <div class="portfolio__item mix category-<?php echo $first_row_data; ?>">
                <img src="<?php the_field('portfolio_image_1', 'option'); ?>" alt="Portfolio <?php echo $first_row_data; ?>">
                <a class="portfolio__item-link" href="<?php echo esc_url(home_url("/").'/portfolio/'.$first_row_data.'/'); ?>"><?php echo esc_html__('SHOW PROJECT', 'o-marketing'); ?></a>
            </div>
        <?php } ?>
        <?php if(get_field('portfolio_image_2', 'option')) { ?>
            <div class="portfolio__item mix category-<?php echo $first_row_data; ?>">
                <img src="<?php the_field('portfolio_image_2', 'option'); ?>" alt="Portfolio <?php echo $first_row_data; ?>">
                <a class="portfolio__item-link" href="<?php echo esc_url(home_url("/").'/portfolio/'.$first_row_data.'/'); ?>"><?php echo esc_html__('SHOW PROJECT', 'o-marketing'); ?></a>
            </div>
        <?php } ?>
        <?php if(get_field('portfolio_image_3', 'option')) { ?>
            <div class="portfolio__item mix category-<?php echo $second_row_data; ?>">
                <img src="<?php the_field('portfolio_image_3', 'option'); ?>" alt="Portfolio <?php echo $second_row_data; ?>">
                <a class="portfolio__item-link" href="<?php echo esc_url(home_url("/").'/portfolio/'.$second_row_data.'/'); ?>"><?php echo esc_html__('SHOW PROJECT', 'o-marketing'); ?></a>
            </div>
        <?php } ?>
        <?php if(get_field('portfolio_image_4', 'option')) { ?>
            <div class="portfolio__item mix category-<?php echo $second_row_data; ?>">
                <img src="<?php the_field('portfolio_image_4', 'option'); ?>" alt="Portfolio <?php echo $second_row_data; ?>">
                <a class="portfolio__item-link" href="<?php echo esc_url(home_url("/").'/portfolio/'.$second_row_data.'/'); ?>"><?php echo esc_html__('SHOW PROJECT', 'o-marketing'); ?></a>
            </div>
        <?php } ?>
        <?php if(get_field('portfolio_image_5', 'option')) { ?>
            <div class="portfolio__item mix category-<?php echo $third_row_data; ?>">
                <img src="<?php the_field('portfolio_image_5', 'option'); ?>" alt="Portfolio <?php echo $third_row_data; ?>">
                <a class="portfolio__item-link" href="<?php echo esc_url(home_url("/").'/portfolio/'.$third_row_data.'/'); ?>"><?php echo esc_html__('SHOW PROJECT', 'o-marketing'); ?></a>
            </div>
        <?php } ?>
        <?php if(get_field('portfolio_image_6', 'option')) { ?>
            <div class="portfolio__item mix category-<?php echo $third_row_data; ?>">
                <img src="<?php the_field('portfolio_image_6', 'option'); ?>" alt="Portfolio <?php echo $third_row_data; ?>">
                <a class="portfolio__item-link" href="<?php echo esc_url(home_url("/").'/portfolio/'.$third_row_data.'/'); ?>"><?php echo esc_html__('SHOW PROJECT', 'o-marketing'); ?></a>
            </div>
        <?php } ?>
        <?php if(get_field('portfolio_image_7', 'option')) { ?>
            <div class="portfolio__item mix category-<?php echo $fourth_row_data; ?>">
                <img src="<?php the_field('portfolio_image_7', 'option'); ?>" alt="Portfolio <?php echo $fourth_row_data; ?>">
                <a class="portfolio__item-link" href="<?php echo esc_url(home_url("/").'/portfolio/'.$fourth_row_data.'/'); ?>"><?php echo esc_html__('SHOW PROJECT', 'o-marketing'); ?></a>
            </div>
        <?php } ?>
        <?php if(get_field('portfolio_image_8', 'option')) { ?>
            <div class="portfolio__item mix category-<?php echo $fourth_row_data; ?>">
                <img src="<?php the_field('portfolio_image_8', 'option'); ?>" alt="Portfolio <?php echo $fourth_row_data; ?>">
                <a class="portfolio__item-link" href="<?php echo esc_url(home_url("/").'/portfolio/'.$fourth_row_data.'/'); ?>"><?php echo esc_html__('SHOW PROJECT', 'o-marketing'); ?></a>
            </div>
        <?php } ?>
        <?php if(get_field('portfolio_image_9', 'option')) { ?>
            <div class="portfolio__item mix category-<?php echo $fourth_row_data; ?>">
                <img src="<?php the_field('portfolio_image_9', 'option'); ?>" alt="Portfolio <?php echo $fourth_row_data; ?>">
                <a class="portfolio__item-link" href="<?php echo esc_url(home_url("/").'/portfolio/'.$fourth_row_data.'/'); ?>"><?php echo esc_html__('SHOW PROJECT', 'o-marketing'); ?></a>
            </div>
        <?php } ?>
    </div>
    <a class="portfolio__add" href="<?php echo esc_url(home_url("/")); ?>"><?php echo esc_html__('VIEW MORE PROJECTS', 'o-marketing'); ?></a>
    <?php if($blockquote_text) { ?>
        <blockquote class="blockquote">
        «<?php printf(esc_html__('%1$s', 'o-marketing'), $blockquote_text); ?>»
            <?php if($blockquote_author) { ?><span class="blockquote__author"><?php printf(esc_html__('%1$s', 'o-marketing'), $blockquote_author); ?></span><?php } ?>
        </blockquote>
    <?php } ?>
    <?php if($video_link) { ?>
        <div class="portfolio__video" style="background-image: url('<?php IF(the_field('portfolio_video_bg', 'option')) { the_field('portfolio_video_bg', 'option'); ?>'); background-repeat: no-repeat; background-size: cover; background-position: center center;<?php } ?>">
            <a class="portfolio__video-link" href="<?php echo esc_url($video_link); ?>" data-fancybox>
                <?php if($video_icon) { ?><img src="<?php echo esc_attr($video_icon); ?>" alt="Play Video Icon"><?php } ?>
            </a>
        </div>
    <?php } ?>
    <div class="container">
        <div class="portfolio__numbers">
            <?php if($web_number || $web_text) { ?>
                <h5 class="portfolio__numbers-item">
                    <?php echo esc_html($web_number); ?>
                    <span><?php printf(esc_html__('%1$s', 'o-marketing'), $web_text); ?></span>
                </h5>
            <?php } ?>
            <?php if($logo_number || $logo_text) { ?>
                <h5 class="portfolio__numbers-item">
                    <?php echo esc_html($logo_number); ?>
                    <span><?php printf(esc_html__('%1$s', 'o-marketing'), $logo_text); ?></span>
                </h5>
            <?php } ?>
            <?php if($print_number || $print_text) { ?>
                <h5 class="portfolio__numbers-item">
                    <?php echo esc_html($print_number); ?>
                    <span><?php printf(esc_html__('%1$s', 'o-marketing'), $print_text); ?></span>
                </h5>
            <?php } ?>
            <?php if($mobile_number || $mobile_text) { ?>
                <h5 class="portfolio__numbers-item">
                    <?php echo esc_html($mobile_number); ?>
                    <span><?php printf(esc_html__('%1$s', 'o-marketing'), $mobile_text); ?></span>
                </h5>
            <?php } ?>
        </div>
    </div>
</section>