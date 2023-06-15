<?php

// Group Footer Contacts (Global Settings)
$footer_widget = get_field('footer_widget', 'option');
$section_1 = $footer_widget['section_1'];
$section_2 = $footer_widget['section_2'];
$section_3 = $footer_widget['section_3'];
$section_4 = $footer_widget['section_4'];

// Footer Contacts - (Global Settings)
$footer_contacts = get_field('footer_contacts', 'option');
$phone_1 = $footer_contacts['phone_1'];
$phone_1_link = $footer_contacts['phone_1_link'];
$phone_2 = $footer_contacts['phone_2'];
$phone_2_link = $footer_contacts['phone_2_link'];
$phone_3 = $footer_contacts['phone_3'];
$phone_3_link = $footer_contacts['phone_3_link'];
$address = $footer_contacts['address'];
$e_mail = $footer_contacts['e_mail'];
$subscribe_form = $footer_contacts['subscribe_form'];



$footer_info = get_field('footer_info', 'option');
$footer_copyrights = get_field('footer_copyrights', 'option');

?>

<!-- Footer -->
<footer class="footer">
    <div class="wrapper">
        <div class="footer__block">
            <a href="index.html" class="logo noise">
                <p class="logo__icon"><?php bloginfo('name'); ?></p>
                <p class="logo__desc"><?php bloginfo('description'); ?></p>
            </a>
            <ul class="social">
            <?php
				if ( have_rows('socials', 'option') ) {
				while ( have_rows('socials', 'option') ) { the_row();
					
					$icon_social = '';
					if(get_sub_field('header') == 'Fb') {
						$icon_social = '<svg  width="21" height="18">
											<use xlink:href="#facebook"/>
										</svg>';
					} else if(get_sub_field('header') == 'In') {
						$icon_social = '<svg  width="21" height="18">
											<use xlink:href="#instagram"/>
										</svg>';
					} else if(get_sub_field('header') == 'Tw') {
						$icon_social = '<svg  width="21" height="18">
											<use xlink:href="#twitter"/>
										</svg>';
					}
					?>
						<li class="social__item">
							<span><?php echo $icon_social; ?></span>
							<a class="social__icon " href="<?php the_sub_field('link'); ?>" target="_blank">
								<?php echo $icon_social; ?>
							</a>
						</li>
				
				<?php }
				}
			?>
            </ul>
            <?php if($footer_info) { ?>
                <p class="footer__special"><?php printf(esc_html__('%1$s', 'wayup'), $footer_info); ?></p>
            <?php } ?>
        </div>
        <nav class="guide">
            <?php if($section_1) { ?>
                <p class="guide__title"><?php printf(esc_html__('%1$s', 'wayup'), $section_1); ?></p>
            <?php } ?>
            <?php
                wp_nav_menu( [
                    'theme_location'  => 'menu-footer-1',
                    'container'       => '',
                    'container_class' => '',
                    'menu_class'      => '',
                    'menu_id'         => '',
                    'echo'            => true,
                    'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                ] );
            ?>
        </nav>
        <div class="serv">
            <?php if($section_2) { ?>
                <p class="serv__title"><?php printf(esc_html__('%1$s', 'wayup'), $section_2); ?></p>
            <?php } ?>
            <?php
                wp_nav_menu( [
                    'theme_location'  => 'menu-footer-2',
                    'container'       => '',
                    'container_class' => '',
                    'menu_class'      => '',
                    'menu_id'         => '',
                    'echo'            => true,
                    'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                ] );
            ?>
        </div>
        <div class="contact">
            <?php if($section_3) { ?>
                <p class="contact__title"><?php printf(esc_html__('%1$s', 'wayup'), $section_3); ?></p>
            <?php } ?>
            <ul class="contact__list">
                <?php if($address) { ?>
                    <li class="contact__item">
                        <svg width="20" height="25">
                            <use xlink:href="#pin"/>
                        </svg>
                        <p class="contact__text contact__text_address"><?php printf(esc_html__('%1$s', 'wayup'), $address); ?></p>
                    </li>
                <?php } ?>
                <?php if($phone_1 || $phone_2 || $phone_3) { ?>
                    <li class="contact__item">
                        <svg width="21" height="21">
                            <use xlink:href="#phone"/>
                        </svg>
                        
                        <div class="contact__phones">
                            <?php if($phone_1_link || $phone_1) { ?>
                                <a href="tel:<?php printf(esc_html__('%1$s', 'wayup'), $phone_1_link); ?>" class="contact__text contact__text_phone"><?php printf(esc_html__('%1$s', 'wayup'), $phone_1); ?></a>
                            <?php } ?>
                            <?php if($phone_2_link || $phone_2) { ?>
                                <a href="tel:<?php printf(esc_html__('%1$s', 'wayup'), $phone_2_link); ?>" class="contact__text contact__text_phone"><?php printf(esc_html__('%1$s', 'wayup'), $phone_2); ?></a>
                            <?php } ?>
                            <?php if($phone_3_link || $phone_3) { ?>
                                <a href="tel:<?php printf(esc_html__('%1$s', 'wayup'), $phone_3_link); ?>" class="contact__text contact__text_phone"><?php printf(esc_html__('%1$s', 'wayup'), $phone_3); ?></a>
                            <?php } ?>
                        </div>
                    </li>
                <?php } ?>
                <?php if($e_mail) { ?>
                    <li class="contact__item">
                        <svg width="25" height="19">
                            <use xlink:href="#mail"/>
                        </svg>
                        <a class="contact__text contact__text_mail" href="mailto:<?php // printf(esc_attr('%1$s', 'wayup'), $e_mail); ?>"><?php printf(esc_html__('%1$s', 'wayup'), $e_mail); ?></a>
                    </li>
                <?php } ?>
            </ul>
        </div>
        <div class="subscribe">
            <?php if($section_4) { ?>
                <p class="subscribe__title"><?php printf(esc_html__('%1$s', 'wayup'), $section_4); ?></p>
            <?php } ?>

            <?php echo do_shortcode($subscribe_form); ?>
            
            <div class="control">
                <div class="language">
                    <ul>
                        <li class="lang-item active">
                            <a href="#">En</a>
                        </li>
                        <li class="lang-item">
                            <a href="#">Uk</a>
                        </li>
                    </ul>
                </div>
                <div class="control__wrap">
                    <a  href="#enter" class="control__enter popup-link-1">
                        <svg class="control__icon" width="19" height="17">
                            <use xlink:href="#login"/>
                        </svg>
                        <?php echo esc_html__('Log in', 'wayup') ?>
                    </a>
                    <a style="display: none;" href="cabinet.html" class="control__enter control__enter_cab">
                        <svg class="control__icon" width="16" height="16">
                            <use xlink:href="#user"/>
                        </svg>
                        <?php echo esc_html__('Personal Area', 'wayup') ?>
                    </a>
                    <a href="#reg" class="control__reg noise popup-link-2"><?php echo esc_html__('Register', 'wayup') ?></a>
                </div>
            </div>
        </div>
        
        <p class="footer__copy"><?php echo esc_html('©2007', 'wayup') ?>-<?php the_date('Y'); ?> <?php if($footer_copyrights) { ?><?php printf(esc_html__('%1$s', 'wayup'), $footer_copyrights); ?><?php } ?></p>
        
    </div>
</footer><!-- End footer -->

<?php
if(is_singular('product')) {
    get_template_part('template-parts/popups/order-popup');
}
?>

<?php wp_footer(); ?>
</body>
</html>
