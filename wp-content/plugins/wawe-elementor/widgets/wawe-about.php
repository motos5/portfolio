<?php
class Elementor_About_Widget extends \Elementor\Widget_Base {
    // Widget Methods
    public function get_name() {
        return 'about';
    }
    public function get_title() {
        return esc_html__( 'About', 'wawe-elementor' );
    }
    public function get_icon() {
        return 'eicon-preferences';
    }
    public function get_custom_help_url() {
        return 'https://go.elementor.com/widget-about';
    }
    public function get_categories() {
        return [ 'wawe_category' ];
    }
    public function get_keywords() {
        return [ 'about', 'preferences' ];
    }

    // Controls поля в Админке
    protected function register_controls() {
        // Открываем секцию для About
        $this->start_controls_section(
            'about_content',
            [
                'label' => esc_html__( 'About Content', 'wawe-elementor' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

        // Поле Text
        $this->add_control(
			'about_title',
			[
				'label' => esc_html__( 'Title', 'wawe-elementor' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( '', 'wawe-elementor' ),
				'placeholder' => esc_html__( 'Type your title here', 'wawe-elementor' ),
			]
		);

        // Поле WYSIWYG (Left)
        $this->add_control(
			'about_left',
			[
				'label' => esc_html__( 'Text Left', 'wawe-elementor' ),
				'type' => \Elementor\Controls_Manager::WYSIWYG,
				'default' => esc_html__( '', 'wawe-elementor' ),
				'placeholder' => esc_html__( 'Type your left text here', 'wawe-elementor' ),
			]
		);

        // Поле WYSIWYG (Right)
        $this->add_control(
			'about_right',
			[
				'label' => esc_html__( 'Text Right', 'wawe-elementor' ),
				'type' => \Elementor\Controls_Manager::WYSIWYG,
				'default' => esc_html__( '', 'wawe-elementor' ),
				'placeholder' => esc_html__( 'Type your right text here', 'wawe-elementor' ),
			]
		);

        // Закрываем секцию для About
        $this->end_controls_section();
    }

    protected function render() {
        $settings = $this->get_settings_for_display();
        $html_tags = array(
            'p' => array(),
        )
        ?>
        <div class="about">
            <div class="container">
                <?php if($settings['about_title']) { ?>
                    <h2 class="title about__title"><?php echo esc_html__($settings['about_title']); ?></h2>
                <?php } ?>
                <div class="about__text">
                    <div class="about__text-left">
                        <?php echo wp_kses($settings['about_left'], $html_tags) ; ?>
                    </div>
                    <div class="about__text-right">
                        <?php echo wp_kses($settings['about_right'], $html_tags) ; ?>
                    </div>
                </div>
            </div>
        </div>
    <?php }
}