<?php
$title_left = get_field('contacts_title_left');

$contacts_data = get_field('contacts_data');
$address = $contacts_data['address'];
$phones = $contacts_data['phones'];
$email = $contacts_data['email'];




$title_right = get_field('contacts_title_right');
$subtitle_right = get_field('contacts_subtitle_right');

$conacts_schedule = get_field('conacts_schedule');
$contacts_map_shortcode = get_field('contacts_map_shortcode');








?>

<section class="inner contacts">
    <div class="wrapper">
        <div class="detail">
            <?php if($title_left) { ?>
                <p class="detail__title"><?php printf(esc_html__('%1$s', 'wayup'), $title_left); ?></p>
            <?php } ?>
            <ul class="contact">
                <?php if($address) { ?>
                    <li class="contact__item">
                        <div class="contact__icon">
                            <svg width="19" height="24">
                                <use xlink:href="#pin"/>
                            </svg>
                        </div>
                        <p class="contact__text contact__text_address"><?php printf(esc_html__('%1$s', 'wayup'), $address); ?></p>
                    </li>
                <?php } ?>
                <?php if( $phones ) { ?>
                    <li class="contact__item">
                        <div class="contact__icon">
                            <svg width="17" height="17">
                                <use xlink:href="#phone"/>
                            </svg>
                        </div>

                        <div class="contact__phones">
                            <?php
                                foreach( $phones as $row ) {
                                    // Format Phone Number
                                    $phone= $row['phone'];
                                    $parts=sscanf($phone,'%1c%2c%3c%3c%2c%2c');
                                    $phone_format = "+$parts[1] ($parts[2]) $parts[3]-$parts[4]-$parts[5]";
                                ?>
                                    <a class="contact__text contact__text_phone" href="tel:<?php echo esc_attr($row['phone']); ?>"><?php echo esc_html($phone_format); ?></a>    
                                <?php }
                            ?>
                        </div>
                    </li>
                <?php } ?>
                <?php if($email) { ?>
                    <li class="contact__item">
                        <div class="contact__icon">
                            <svg width="23" height="17">
                                <use xlink:href="#mail"/>
                            </svg>
                        </div>
                        <a class="contact__text contact__text_mail" href="mailto:<?php echo esc_attr($email); ?>"><?php printf(esc_html__('%1$s', 'wayup'), $email); ?></a>
                    </li>
                <?php } ?>
            </ul>
            <?php if($conacts_schedule) { ?>
                <div class="detail__time">
                    <svg width="35" height="35">
                        <use xlink:href="#time"/>
                    </svg>
                    <p><?php printf(esc_html__('%1$s', 'wayup'), $conacts_schedule); ?></p>
                </div>
            <?php } ?>
        </div>
        <form class="inner__form log contacts-form" action="<?php echo admin_url('admin-ajax.php?action=contacts'); ?>" id="popupOrder">
            <?php if($title_right || $subtitle_right) { ?>
                <p class="log__title"><?php printf(esc_html__('%1$s', 'wayup'), $title_right); ?></p>
                <p class="log__subtitle"><?php printf(esc_html__('%1$s', 'wayup'), $subtitle_right); ?></p>
            <?php } ?>
            <div class="log__group contacts-form__box">
                <label class="contacts-form__label"><?php echo esc_html__('Name', 'wayup'); ?>
                    <input type="text" name="name" class="log__input contacts-form__input">
                </label>
            </div>
            <div class="log__group contacts-form__box">
                <label class="contacts-form__label"><?php echo esc_html__('Phone', 'wayup'); ?>
                    <input type="tel" name="tel" class="log__input contacts-form__input">
                </label>
            </div>
            <div class="log__group log__group_company contacts-form__box">
                <label class="contacts-form__label"><?php echo esc_html__('Company', 'wayup'); ?>
                    <input type="text" name="company" class="log__input contacts-form__input">
                </label>
            </div>
            <div class="log__group log__group_textarea contacts-form__box">
                <label class="contacts-form__label"><?php echo esc_html__('Message', 'wayup'); ?>
                    <textarea type="text" name="message" class="log__input contacts-form__input"></textarea>
                </label>
            </div>
            <p class="log__line"><span>*</span><?php echo esc_html__('Mandatory fields', 'wayup'); ?></p>
            <div class="log__wrap">
                <div class="log__group check">
                    <input id="insight" type="checkbox" name="learn" value="learn">
                    <label for="insight"><?php echo esc_html__('I have read and agree to the', 'wayup'); ?> <span><a href="#"><?php echo esc_html__('terms of use', 'wayup'); ?></a></span> <?php echo esc_html__('and', 'wayup'); ?> <span><a href="#"><?php echo esc_html__('privacy policy', 'wayup'); ?></a></span> <?php echo esc_html__('of the site', 'wayup'); ?></label>
                </div>
                <div class="log__btn">
                    <input id="order" data-submit type="submit" value="<?php echo esc_attr__('Send', 'wayup'); ?>" class="btn"/>
                </div>
            </div>
        </form>
    </div>
</section>
<?php if($contacts_map_shortcode) { ?>
    <section class="map">
        <?php echo do_shortcode($contacts_map_shortcode); ?>
    </section>
<?php } ?>