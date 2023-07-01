<?php
/*
Template Name: Contacts
Template Post Type: post, page, product
*/

// Group  (Global Settings)
$card_general = get_field('contact_card_general', 'option');
$card_icon_1 = $card_general['icon_1'];
$card_title_1 = $card_general['title_1'];
$card_icon_2 = $card_general['icon_2'];
$card_title_2 = $card_general['title_2'];
$card_icon_3 = $card_general['icon_3'];
$card_title_3 = $card_general['title_3'];


get_header(); ?>


<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <!-- Контакты -->
        <div class="our-contacts">
            <div class="container">
                <div class="row">
                    <div class="col-9 col-lg-12">

                    <?php
                    
                    if( have_rows('contact_block', 'option') ):
                        while( have_rows('contact_block', 'option') ) : the_row();
                        $block_title = get_sub_field('block_title');

                        
                        while( have_rows('card_data') ) : the_row();
                            // Выводим значения полей внутри группы
                            $text_1 = get_sub_field('text_1');
                            $text_2 = get_sub_field('text_2');
                            $text_3 = get_sub_field('text_3');
                        endwhile;
                        $map = get_sub_field('map_shortcode');
                        ?>

                        <div class="contacts-block">
                        <h2><?php printf(esc_html__('%1$s', 'zhovner'), $block_title); ?></h2>
                        <div class="contacts-inner">
                            <div class="contacts-card">
                                <?php if($card_icon_1 || $card_icon_1) { ?>
                                    <img src="<?php echo esc_url($card_icon_1['url']); ?>" alt="<?php echo esc_attr__($card_icon_1['alt']); ?>">
                                <?php } ?>
                                <h3><?php printf(esc_html__('%1$s', 'zhovner'), $card_title_1); ?></h3>
                                <p><?php printf(esc_html__('%1$s', 'zhovner'), $text_1); ?></p>
                            </div>
                            <div class="contacts-card">
                                <?php if($card_icon_2 || $card_icon_2) { ?>
                                    <img src="<?php echo esc_url($card_icon_2['url']); ?>" alt="<?php echo esc_attr__($card_icon_2['alt']); ?>">
                                <?php } ?>
                                <h3><?php printf(esc_html__('%1$s', 'zhovner'), $card_title_2); ?></h3>
                                <p><?php printf(esc_html__('%1$s', 'zhovner'), $text_2); ?></p>
                            </div>
                            <div class="contacts-card">
                                <?php if($card_icon_3 || $card_icon_3) { ?>
                                    <img src="<?php echo esc_url($card_icon_3['url']); ?>" alt="<?php echo esc_attr__($card_icon_3['alt']); ?>">
                                <?php } ?>
                                <h3><?php printf(esc_html__('%1$s', 'zhovner'), $card_title_3); ?></h3>
                                <p><?php printf(esc_html__('%1$s', 'zhovner'), $text_3); ?></p>
                            </div>
                        </div>
                        <div>
                            <?php echo do_shortcode($map); ?>
                        </div>
                    </div>
                            
                    <?php endwhile;
                    else :
                        echo esc_html__('Rows not found', 'zhovner');
                    endif;
                    
                    ?> 
                    </div>
                    <div class="col-3 col-lg-12" id="cities">
                        <h2>Наши дилеры</h2>
                        <input type="text" class="search" placeholder="Поиск">
                        <ul class="list">
                        <?php
                    
                        if( have_rows('dealer', 'option') ):
                            while( have_rows('dealer', 'option') ) : the_row();
                            $dealer_address = get_sub_field('address');
                            ?>
                                <li>
                                    <p class="city"><?php printf(esc_html__('%1$s', 'zhovner'), $dealer_address); ?></p>
                                </li>
                            <?php endwhile;
                            else :
                                echo esc_html__('Rows not found', 'zhovner');
                            endif;
                            
                            ?> 
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    <?php endwhile;
else : ?>
    <p><?php echo esc_html__('Content not found.', 'zhovner'); ?></p>
<?php endif; ?>


<?php get_footer();
