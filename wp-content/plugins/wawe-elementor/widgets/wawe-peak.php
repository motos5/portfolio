<?php
class Elementor_Peak_Widget extends \Elementor\Widget_Base {
    // Widget Methods
    public function get_name() {
        return 'peak';
    }
    public function get_title() {
        return esc_html__( 'Peak', 'wawe-elementor' );
    }
    public function get_icon() {
        return 'eicon-meetup';
    }
    public function get_custom_help_url() {
        return 'https://go.elementor.com/widget-peak';
    }
    public function get_categories() {
        return [ 'wawe_category' ];
    }
    public function get_keywords() {
        return [ 'peak', 'other' ];
    }

    // Controls поля в Админке
    protected function register_controls() {
        // Открываем секцию для Peak
        $this->start_controls_section(
            'peak_content',
            [
                'label' => esc_html__( 'Peak Content', 'wawe-elementor' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

        // Поле Media (icon)
        $this->add_control(
            'peak_bg',
            [
                'label' => esc_html__( 'Peak Background', 'wawe-elementor' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => '', // Заглушка картинки (следует сделать параметр пустым)
                ],
            ]
        );

        // Поле Text
        $this->add_control(
			'peak_title',
			[
				'label' => esc_html__( 'Peak Title', 'wawe-elementor' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( '', 'wawe-elementor' ),
				'placeholder' => esc_html__( 'Type your peak title here', 'wawe-elementor' ),
			]
		);

        // Поле WYSIWYG (Right)
        $this->add_control(
			'peak_text',
			[
				'label' => esc_html__( 'Peak Text', 'wawe-elementor' ),
				'type' => \Elementor\Controls_Manager::WYSIWYG,
				'default' => esc_html__( '', 'wawe-elementor' ),
				'placeholder' => esc_html__( 'Type your peak text here', 'wawe-elementor' ),
			]
		);

        

        // Закрываем секцию для Header
        $this->end_controls_section();
    }

    protected function render() {
        $settings = $this->get_settings_for_display();
        $html_tags = array(
            'p' => array(),
            'br' => array(),
        )
        ?>
        <div class="peak">
            <div class="peak__bg" style="background: url('<?php if($settings['peak_bg']['url']) { ?><?php echo esc_html__($settings['peak_bg']['url']); ?><?php } ?>'); background-repeat: no-repeat; background-position: right top; background-size: 50% cover; background-color: #fff;"></div>
            <div class="container">
                <div class="peak__inner">
                    <?php if($settings['peak_title']) { ?>
                        <h2 class="title peak__title"><?php echo esc_html__($settings['peak_title']); ?></h2>
                    <?php } ?>
                    <?php if($settings['peak_text']) { ?>
                        <div class="peak__text">
                            <?php echo wp_kses($settings['peak_text'], $html_tags); ?>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    <?php }
}