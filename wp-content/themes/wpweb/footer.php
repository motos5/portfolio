<?php
	$left_title = get_field('footer_left_title', 'option');
	$left_text = get_field('footer_left_text', 'option');
	$footer_form_shortcode = get_field('footer_form_shortcode', 'option');

	$right_title = get_field('footer_right_title', 'option');
	$email = get_field('footer_email', 'option');

	$popup_title = get_field('popup_title', 'option');
	$popup_form_shortcode = get_field('popup_form_shortcode', 'option');
?>


<footer class="footer" id="contacts">
    <div class="container">
        <div class="footer__inner">
            <div class="footer__left">
                <?php if($left_title) { ?>
                    <h2 class="title footer__left-title">
                        <?php printf(esc_html__('%1$s', 'wpweb'), $left_title); ?>
                    </h2>
                <?php } ?>
                <?php if($left_text) { ?>
                    <p class="footer__left-text">
                        <?php printf(esc_html__('%1$s', 'wpweb'), $left_text); ?>
                    </p>
                <?php } ?>
            
                <?php if($footer_form_shortcode) { echo do_shortcode($footer_form_shortcode); } ?>
                
            </div>
            <div class="footer__right">
                <?php if($right_title) { ?>
                    <h2 class="title footer__right-title">
                        <?php printf(esc_html__('%1$s', 'wpweb'), $right_title); ?>
                    </h2>
                <?php } ?>
                
                <?php if ( have_rows('socials_list', 'option') ) {
                while ( have_rows('socials_list', 'option') ) { the_row();
                $facebook = get_sub_field('facebook');
                $instagram = get_sub_field('instagram');
                $linkedin = get_sub_field('linkedin');
                $telegram = get_sub_field('telegram');
                $skype = get_sub_field('skype');

                $social_array = array($facebook, $instagram, $linkedin, $telegram, $skype); ?>

                <ul class="socials__list">
                    <?php foreach($social_array as $social) {
                        if($social == $facebook) {
                            $socials_icon = '<svg xmlns="http://www.w3.org/2000/svg" width="52" height="52" fill="none">
                                                <path fill="#FAF7F7" d="M52 26.16C52 11.71 40.36-.004 26-.004 11.635 0-.006 11.71-.006 26.163c0 13.055 9.51 23.877 21.937 25.84v-18.28h-6.597v-7.56h6.604v-5.77c0-6.554 3.883-10.175 9.821-10.175 2.847 0 5.82.51 5.82.51v6.435h-3.278c-3.228 0-4.235 2.019-4.235 4.089v4.907h7.208l-1.15 7.56h-6.061V52C42.49 50.037 52 39.215 52 26.16Z"/>
                                            </svg>';
                        } else if($social == $instagram) {
                            $socials_icon = '<svg xmlns="http://www.w3.org/2000/svg" width="54" height="52" fill="none">
                                                <g fill="#FAF7F7" clip-path="url(#a)">
                                                    <path d="M27 17.333c-2.387 0-4.676.914-6.364 2.539C18.948 21.497 18 23.702 18 26c0 2.299.948 4.503 2.636 6.128 1.688 1.626 3.977 2.539 6.364 2.539s4.676-.913 6.364-2.539C35.052 30.503 36 28.298 36 26c0-2.299-.948-4.503-2.636-6.128-1.688-1.625-3.977-2.539-6.364-2.539Z"/>
                                                    <path fill-rule="evenodd" d="M16.2 0C11.904 0 7.783 1.644 4.745 4.57 1.707 7.494 0 11.462 0 15.6v20.8c0 4.137 1.707 8.105 4.745 11.03C7.783 50.357 11.903 52 16.2 52h21.6c4.297 0 8.417-1.644 11.455-4.57C52.293 44.506 54 40.538 54 36.4V15.6c0-4.137-1.707-8.105-4.745-11.03C46.217 1.643 42.096 0 37.8 0H16.2Zm-1.8 26c0-3.218 1.327-6.304 3.69-8.58 2.363-2.275 5.568-3.553 8.91-3.553 3.342 0 6.547 1.278 8.91 3.553 2.363 2.276 3.69 5.362 3.69 8.58s-1.328 6.304-3.69 8.58c-2.363 2.275-5.568 3.553-8.91 3.553-3.342 0-6.547-1.278-8.91-3.553-2.363-2.276-3.69-5.362-3.69-8.58Zm25.2-12.133h3.6V10.4h-3.6v3.467Z" clip-rule="evenodd"/>
                                                </g>
                                            </svg>';
                        } else if($social == $linkedin) {
                            $socials_icon = '<svg xmlns="http://www.w3.org/2000/svg" width="52" height="52" fill="none">
                                                <path fill="#FAF7F7" d="M44.304 44.312h-7.701V32.248c0-2.878-.06-6.58-4.015-6.58-4.014 0-4.628 3.13-4.628 6.367v12.277h-7.698V19.5h7.394v3.38h.102c1.032-1.95 3.546-4.004 7.3-4.004 7.803 0 9.246 5.132 9.246 11.817v13.619ZM11.562 16.104a4.467 4.467 0 0 1-4.472-4.472 4.472 4.472 0 1 1 4.472 4.472Zm3.859 28.21H7.699V19.5h7.722v24.814ZM48.155 0H3.838C1.716 0 0 1.677 0 3.744v44.512C0 50.323 1.716 52 3.838 52h44.309C50.266 52 52 50.326 52 48.256V3.744C52 1.68 50.266 0 48.147 0h.008Z"/>
                                            </svg>';
                        } else if($social == $telegram) {
                            $socials_icon = '<svg xmlns="http://www.w3.org/2000/svg" width="52" height="52" fill="none">
                                                <path fill="#FAF7F7" d="M25.879 0a26 26 0 1 0 .242 52 26 26 0 0 0-.242-52Zm10.75 15.652c.217-.004.696.05 1.008.303.207.18.34.432.37.705.035.201.079.663.044 1.022-.39 4.113-2.084 14.088-2.947 18.692-.364 1.95-1.08 2.602-1.776 2.665-1.508.14-2.655-.997-4.117-1.954-2.288-1.502-3.581-2.436-5.802-3.9-2.568-1.69-.904-2.622.559-4.139.383-.398 7.035-6.45 7.165-6.998.015-.07.03-.325-.121-.46-.152-.134-.378-.088-.54-.051-.23.052-3.885 2.47-10.966 7.247-1.04.715-1.978 1.062-2.82 1.04-.928-.017-2.713-.522-4.041-.953-1.63-.53-2.923-.81-2.81-1.71.058-.468.704-.946 1.934-1.436 7.58-3.302 12.632-5.48 15.163-6.53 7.219-3.003 8.72-3.526 9.698-3.543Z"/>
                                            </svg>';
                        } else if($social == $skype) {
                            $socials_icon = '<svg xmlns="http://www.w3.org/2000/svg" width="52" height="52" fill="none">
                                                <path fill="#FAF7F7" d="M26.15 40.894c-8.717 0-12.61-4.288-12.61-7.506 0-1.657 1.215-2.808 2.888-2.808 3.733 0 2.758 5.367 9.721 5.367 3.556 0 5.525-1.939 5.525-3.924 0-1.194-.582-2.513-2.933-3.096l-7.748-1.939c-6.24-1.569-7.373-4.953-7.373-8.127 0-6.602 6.199-9.08 12.022-9.08 5.354 0 11.685 2.974 11.685 6.93 0 1.7-1.49 2.687-3.148 2.687-3.183 0-2.596-4.413-9.022-4.413-3.183 0-4.966 1.438-4.966 3.503 0 2.065 2.498 2.726 4.674 3.222l5.713 1.272c6.264 1.406 7.852 5.083 7.852 8.545 0 5.365-4.12 9.369-12.398 9.369m24.016-10.578-.063.293-.095-.52c.032.097.095.16.127.26.26-1.463.393-2.953.393-4.446a24.527 24.527 0 0 0-7.204-17.368 24.875 24.875 0 0 0-7.79-5.257c-2.855-1.367-6.068-2.015-9.377-2.015-1.56 0-3.129.152-4.643.442l.258.13-.518-.071.258-.054A14.445 14.445 0 0 0 14.584 0 14.396 14.396 0 0 0 4.323 4.262a14.473 14.473 0 0 0-4.254 10.29c0 2.476.633 4.907 1.829 7.058l.043-.268.09.518-.133-.25a24.725 24.725 0 0 0 1.545 13.804 23.68 23.68 0 0 0 5.258 7.82 24.541 24.541 0 0 0 7.79 5.29 23.993 23.993 0 0 0 9.541 1.946c1.428 0 2.89-.13 4.284-.387l-.258-.135.52.1-.292.065A14.39 14.39 0 0 0 37.423 52a14.387 14.387 0 0 0 10.255-4.253 14.48 14.48 0 0 0 4.25-10.29 14.673 14.673 0 0 0-1.848-7.076"/>
                                            </svg>';
                        }
                        
                        if($social && $socials_icon) { ?>
                            <li class="socials__item">
                                <a class="socials__link" href="<?php echo $social; ?>" target="_blank">
                                    <?php echo $socials_icon; ?>
                                </a>
                            </li>
                        <?php }
                        }
                    }} else { ?>
                        <li><?php echo esc_html__('Nothing found', 'wpweb'); ?></li>
                <?php } ?>
                </ul>
                <?php if($email) { ?>
                    <div class="email__box">
                        <p class="email__lable"><?php echo esc_html__('Email', 'wpweb')  ?></p>
                        <a class="email__link" href="mailto:<?php printf(esc_url('%1$s'), $email); ?>"><?php printf(esc_html__('%1$s', 'wpweb'), $email); ?></a>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</footer>

<!-- PopUp -->
<div class="popup popup__talk">
    <div class="popup__wrapper">
        <div class="popup__inner">
            <div class="popup__content">
                <div class="popup__content-top">
                    <?php if($popup_title) { ?>
                        <h3 class="title popup__content-title"><?php printf(esc_html__('%1$s', 'wpweb'), $popup_title); ?></h3>
                    <?php } ?>
                    <a class="close popup__content-close" href="<?php echo esc_url('#'); ?>">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none">
                            <path fill="#FAF7F7" d="M6.4 19 5 17.6l5.6-5.6L5 6.4 6.4 5l5.6 5.6L17.6 5 19 6.4 13.4 12l5.6 5.6-1.4 1.4-5.6-5.6L6.4 19Z"/>
                        </svg>
                    </a>
                </div>
                <?php if($popup_form_shortcode) { echo do_shortcode($popup_form_shortcode); } ?>
            </div>
        </div>
    </div>
</div>

<?php wp_footer(); ?>

</body>
</html>
