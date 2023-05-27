<?php
if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

function o_marketing_setup() {
	
	load_theme_textdomain( 'o-marketing', get_template_directory() . '/languages' );

	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);
	add_theme_support(
		'custom-background',
		apply_filters(
			'o_marketing_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);
	add_theme_support( 'customize-selective-refresh-widgets' );

	// Logotip
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 60,
			'width'       => 80,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'o_marketing_setup' );

// Register Scripts and Stiles
function o_marketing_scripts() {
	wp_enqueue_style( 'o-marketing-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_enqueue_style( 'o-marketing-googlefonts', 'https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@1,300&family=Montserrat:wght@500;700&family=Open+Sans:wght@300;400&family=Raleway:wght@700&display=swap');
	wp_enqueue_style( 'o-marketing-fancybox', get_template_directory_uri() . '/assets/css/frontend/jquery.fancybox.min.css', array(), _S_VERSION );
	wp_enqueue_style( 'o-marketing-slick', get_template_directory_uri() . '/assets/css/frontend/slick.css', array(), _S_VERSION );
	wp_enqueue_style( 'o-marketing-main-styles', get_template_directory_uri() . '/assets/css/frontend/style.css', array(), _S_VERSION );

	// Подключение собственного файла jquery
	wp_deregister_script( 'jquery' );
	wp_register_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js', array(), _S_VERSION, true);
	wp_enqueue_script( 'jquery');
	wp_enqueue_script( 'o-marketing-fancybox', get_template_directory_uri() . '/assets/js/frontend/jquery.fancybox.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'o-marketing-mixitup', get_template_directory_uri() . '/assets/js/frontend/mixitup.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'o-marketing-slick', get_template_directory_uri() . '/assets/js/frontend/slick.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'o-marketing-main', get_template_directory_uri() . '/assets/js/frontend/main.js', array(), _S_VERSION, true );

	// Создаём Object для передачи URL темы в JavaScript файл
    $wnm_custom = array( 'o-marketing-main' => get_template_directory_uri());
    wp_localize_script( 'o-marketing-main', 'wnm_custom', $wnm_custom );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'o_marketing_scripts' );

// ================= MENU ============== //
// Register menu location
function o_marketing_menus() {
    $locations = array(
        'menu-header' => esc_html__('Header navigation', 'o_marketing'),
    );
    register_nav_menus($locations);
}
add_action('init', 'o_marketing_menus');

// Add CSS class for menu HTML teg <li>
function o_marketing_css_class_li($classes) {
	$classes[] = 'menu__list-item';
	return $classes;
}
add_filter('nav_menu_css_class', 'o_marketing_css_class_li', 10, 1);

// Add CSS class for menu HTML teg <a>
function o_marketing_css_class_a($atts) {
	$atts['class'] = "menu__list-link";
	
	if($atts['href'] === home_url("/")) {
		$atts['class'] = "menu__list-link menu__list-link--active";
		$atts['href'] = "#body";
	}
	return $atts;
}
add_filter( 'nav_menu_link_attributes', 'o_marketing_css_class_a');
// ================= END MENU ============== //



// Тестовый кастомайзер
// Функция регистрации Customize
function o_marketing_customize_register($wp_customize) {

	// Добавление настройку для загрузки Footer Logo
	$wp_customize->add_setting('footer_logo', array(
		'default' => '',
		'sanitize_callback' => 'absint',
	));

	// Добавляем Control для загрузки Footer Logo
	$wp_customize->add_control(new WP_Customize_Media_Control($wp_customize, 'footer_logo', array(
		'section' => 'title_tagline',
		'label' => esc_html__('Footer Logo', 'o-marketing'),
	)));

	// Добавляем загрузчик Logo в Site Identity
	$wp_customize->selective_refresh->add_partial('footer_logo', array(
		'selector' => '.footer__logo',
		'render_callback' => function() {
			$logo = get_theme_mod('footer_logo');
			$img = wp_get_attachment_image_src($logo, 'full');
			if ($img) {
				return '<img src="' . $img[0] . '" alt="">';
			} else {
				return '';
			}
		}
	));

}
add_action( 'customize_register', 'o_marketing_customize_register' );


// Получаем данные изображения (миниатюры)
function webwordpress_get_attachment( $attachment_id ) {

	$attachment = get_post( $attachment_id );
	return array(
		'alt' => get_post_meta( $attachment->ID, '_wp_attachment_image_alt', true ),
		'caption' => $attachment->post_excerpt,
		'description' => $attachment->post_content,
		'href' => get_permalink( $attachment->ID ),
		'src' => $attachment->guid,
		'title' => $attachment->post_title
	);
}




// ACF Options
require_once get_template_directory() . '/includes/options_acf.php';
// Post Types
require_once get_template_directory() . '/includes/post-types.php';
// Widgets
require_once get_template_directory() . '/includes/widgets/widgets.php';