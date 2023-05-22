<?php
class Elementor_Header_Widget extends \Elementor\Widget_Base {
    // Widget Methods
    public function get_name() {
        return 'header';
    }
    public function get_title() {
        return esc_html__( 'Header', 'wawe-elementor' );
    }
    public function get_icon() {
        return 'eicon-header';
    }
    public function get_custom_help_url() {
        return 'https://go.elementor.com/widget-header';
    }
    public function get_categories() {
        return [ 'wawe_category' ];
    }
    public function get_keywords() {
        return [ 'header', 'top' ];
    }

    // Controls поля в Админке
    protected function register_controls() {
        // Открываем секцию для Header
        $this->start_controls_section(
            'header_content',
            [
                'label' => esc_html__( 'Header Content', 'wawe-elementor' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

        // Поле Text
        $this->add_control(
			'header_title',
			[
				'label' => esc_html__( 'Title', 'wawe-elementor' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( '', 'wawe-elementor' ),
				'placeholder' => esc_html__( 'Type your title here', 'wawe-elementor' ),
			]
		);

        // Поле Text
        $this->add_control(
			'header_subtitle',
			[
				'label' => esc_html__( 'Sub Title', 'wawe-elementor' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( '', 'wawe-elementor' ),
				'placeholder' => esc_html__( 'Type your sub title here', 'wawe-elementor' ),
			]
		);

        // Поле Media (image)
        $this->add_control(
            'header_icon',
            [
                'label' => esc_html__( 'Icon', 'wawe-elementor' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => '', // Заглушка картинки (следует сделать параметр пустым)
                ],
            ]
        );



        // Закрываем секцию для Header
        $this->end_controls_section();
    }

    protected function render() {
        $settings = $this->get_settings_for_display(); ?>
        <div class="header">
            <div class="header__top">
                <div class="container">
                    <div class="header__top-inner">
                        <?php
                        if( has_custom_logo() ) { ?>
                            <a class="logo" href="<?php echo esc_url(home_url( '/' )); ?>">
								<img class="logo-img" src="<?php echo esc_url( wp_get_attachment_url( get_theme_mod( 'custom_logo' ) ) ); ?>" alt="Logo" />
							</a>
                        <?php } ?>
                        <?php
                            //Menu
                            $menu_btn = '<button class="menu__btn">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="18" viewBox="0 0 30 18" fill="none">
                                                <path d="M0 0H30V2H0V0Z" fill="black"></path>
                                                <path d="M0 8H30V10H0V8Z" fill="black"></path>
                                                <rect y="16" width="30" height="2" fill="black"></rect>
                                            </svg>
                                        </button>';
                            wp_nav_menu( [
                                'theme_location'  => 'menu-header',
                                'container'       => 'nav',
                                'container_class' => 'menu',
                                'menu_class'      => 'menu__list',
                                'menu_id'         => false,
                                'echo'            => true,
                                'items_wrap'      => $menu_btn . '<ul id="%1$s" class="%2$s">%3$s</ul>',
                            ] );
                        ?>
                    </div>
                </div>
            </div>
            <div class="header__content" style="background: url(<?php echo wp_get_attachment_url(get_post_thumbnail_id(get_the_ID()));?>); background-repeat: no-repeat; background-position: center center; background-size: cover;">
                <div class="container">
                    <div class="header__content-inner">
                        <?php if($settings['header_title'] || $settings['header_subtitle']) { ?>
                            <h1 class="header__title"><?php echo esc_html__($settings['header_title']); ?></h1>
                            <p class="header__subtitle">
                            <?php echo esc_html__($settings['header_subtitle']); ?>
                            </p>
                        <?php } ?>
                        <?php if($settings['header_title']) { ?>
                            <a class="header__icon" href="#">
                                <img src="<?php echo esc_attr__($settings['header_icon']['url']); ?>" alt="">
                            </a>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    <?php }
}