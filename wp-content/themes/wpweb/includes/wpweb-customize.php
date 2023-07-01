<?php
// Тестовый кастомайзер
// Функция регистрации Customize
function wpweb_customize_register($wp_customize) {

	// Добавление настройку для загрузки Footer Logo
	$wp_customize->add_setting('light_logo', array(
		'default' => '',
		'sanitize_callback' => 'absint',
	));

	// Добавляем Control для загрузки Light Logo
	$wp_customize->add_control(new WP_Customize_Media_Control($wp_customize, 'light_logo', array(
		'section' => 'title_tagline',
		'label' => esc_html__('Light Logo', 'wpweb'),
	)));

	// Добавляем загрузчик Logo в Site Identity
	$wp_customize->selective_refresh->add_partial('light_logo', array(
		'selector' => '.logo__img.logo__img--active',
		'render_callback' => function() {
			$logo = get_theme_mod('light_logo');
			$img = wp_get_attachment_image_src($logo, 'full');
			if ($img) {
				return '<img src="' . $img[0] . '" alt="">';
			} else {
				return '';
			}
		}
	));

}
add_action( 'customize_register', 'wpweb_customize_register' );