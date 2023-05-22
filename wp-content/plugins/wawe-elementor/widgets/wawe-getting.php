<?php
class Elementor_Getting_Widget extends \Elementor\Widget_Base {
    // Widget Methods
    public function get_name() {
        return 'getting';
    }
    public function get_title() {
        return esc_html__( 'Getting', 'wawe-elementor' );
    }
    public function get_icon() {
        return 'eicon-rating';
    }
    public function get_custom_help_url() {
        return 'https://go.elementor.com/widget-getting';
    }
    public function get_categories() {
        return [ 'wawe_category' ];
    }
    public function get_keywords() {
        return [ 'getting', 'rating' ];
    }

    // Controls поля в Админке
    protected function register_controls() {
        // Открываем секцию для Getting
        $this->start_controls_section(
            'getting_content',
            [
                'label' => esc_html__( 'Getting Content', 'wawe-elementor' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

        // Поле Text
        $this->add_control(
			'getting_title',
			[
				'label' => esc_html__( 'Getting Title', 'wawe-elementor' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( '', 'wawe-elementor' ),
				'placeholder' => esc_html__( 'Type your getting title here', 'wawe-elementor' ),
			]
		);

        // Открываем табы Getting
        $this->start_controls_tabs(
			'getting_tabs'
		);

        // Открываем таб Getting Items
        $this->start_controls_tab(
			'getting_items_tab',
			[
				'label' => esc_html__( 'Getting Items', 'wawe-elementor' ),
			]
		);

        // Поле Media (icon)
        $this->add_control(
            'getting_residence_icon',
            [
                'label' => esc_html__( 'Residence Icon', 'wawe-elementor' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => '', // Заглушка картинки (следует сделать параметр пустым)
                ],
            ]
        );

        // Поле Text
        $this->add_control(
			'getting_residence_title',
			[
				'label' => esc_html__( 'Residence Title', 'wawe-elementor' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( '', 'wawe-elementor' ),
				'placeholder' => esc_html__( 'Type your residence title here', 'wawe-elementor' ),
			]
		);

        // Поле TextArea
        $this->add_control(
            'getting_residence_text',
            [
                'label' => esc_html__( 'Residence Text', 'wawe-elementor' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'rows' => 10,
                'default' => esc_html__( '', 'wawe-elementor' ),
                'placeholder' => esc_html__( 'Type your residence text here', 'wawe-elementor' ),
            ]
        );


        // Поле Media (icon)
        $this->add_control(
            'getting_flight_icon',
            [
                'label' => esc_html__( 'Flight Icon', 'wawe-elementor' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => '', // Заглушка картинки (следует сделать параметр пустым)
                ],
            ]
        );

        // Поле Text
        $this->add_control(
			'getting_flight_title',
			[
				'label' => esc_html__( 'Flight Title', 'wawe-elementor' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( '', 'wawe-elementor' ),
				'placeholder' => esc_html__( 'Type your flight title here', 'wawe-elementor' ),
			]
		);

        // Поле TextArea
        $this->add_control(
            'getting_flight_text',
            [
                'label' => esc_html__( 'Flight Text', 'wawe-elementor' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'rows' => 10,
                'default' => esc_html__( '', 'wawe-elementor' ),
                'placeholder' => esc_html__( 'Type your flight text here', 'wawe-elementor' ),
            ]
        );


        // Поле Media (icon)
        $this->add_control(
            'getting_training_icon',
            [
                'label' => esc_html__( 'Training Icon', 'wawe-elementor' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => '', // Заглушка картинки (следует сделать параметр пустым)
                ],
            ]
        );

        // Поле Text
        $this->add_control(
			'getting_training_title',
			[
				'label' => esc_html__( 'Training Title', 'wawe-elementor' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( '', 'wawe-elementor' ),
				'placeholder' => esc_html__( 'Type your training title here', 'wawe-elementor' ),
			]
		);

        // Поле TextArea
        $this->add_control(
            'getting_training_text',
            [
                'label' => esc_html__( 'Training Text', 'wawe-elementor' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'rows' => 10,
                'default' => esc_html__( '', 'wawe-elementor' ),
                'placeholder' => esc_html__( 'Type your training text here', 'wawe-elementor' ),
            ]
        );

        // Закрываем таб Getting Items
        $this->end_controls_tab();

        // Открываем таб Getting Info
        $this->start_controls_tab(
			'getting_info_tab',
			[
				'label' => esc_html__( 'Getting Info', 'wawe-elementor' ),
			]
		);

        // Поле Text
        $this->add_control(
			'getting_info_arrived',
			[
				'label' => esc_html__( 'Getting Arrived', 'wawe-elementor' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( '', 'wawe-elementor' ),
				'placeholder' => esc_html__( 'Type your getting arrived here', 'wawe-elementor' ),
			]
		);


        // Поле Text
        $this->add_control(
			'getting_info_learned',
			[
				'label' => esc_html__( 'Getting Learned', 'wawe-elementor' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( '', 'wawe-elementor' ),
				'placeholder' => esc_html__( 'Type your getting learned here', 'wawe-elementor' ),
			]
		);


        // Поле Text
        $this->add_control(
			'getting_info_satisfied',
			[
				'label' => esc_html__( 'Getting Satisfied', 'wawe-elementor' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( '', 'wawe-elementor' ),
				'placeholder' => esc_html__( 'Type your getting satisfied here', 'wawe-elementor' ),
			]
		);

        // Поле Media (Line)
        $this->add_control(
            'getting_info_line',
            [
                'label' => esc_html__( 'Getting Line', 'wawe-elementor' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => '', // Заглушка картинки (следует сделать параметр пустым)
                ],
            ]
        );

        // Поле WYSIWYG
        $this->add_control(
			'getting_info_text',
			[
				'label' => esc_html__( 'Getting Text', 'wawe-elementor' ),
				'type' => \Elementor\Controls_Manager::WYSIWYG,
				'default' => esc_html__( '', 'wawe-elementor' ),
				'placeholder' => esc_html__( 'Type your getting text here', 'wawe-elementor' ),
			]
		);

        // Закрываем таб Getting Info
        $this->end_controls_tab();
        // Закрываем табы Getting
        $this->end_controls_tabs();

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
        <div class="getting">
            <div class="container">
                <?php if($settings['getting_title']) { ?>
                    <h2 class="title getting__title"><?php echo esc_html__($settings['getting_title']); ?></h2>
                <?php } ?>
                <div class="getting__items">
                    <?php if($settings['getting_residence_title'] || $settings['getting_residence_text']) { ?>
                        <div class="getting__item">
                            <h4 class="getting__item-title" style="background-image: url('<?php if($settings['getting_residence_icon']['url']) { ?><?php echo esc_html__($settings['getting_residence_icon']['url']); ?><?php } ?>'); background-repeat: no-repeat;">
                                <?php echo esc_html__($settings['getting_residence_title']); ?>
                            </h4>
                            <p class="getting__item-text">
                                <?php echo wp_kses($settings['getting_residence_text'], $html_tags); ?>
                            </p>
                        </div>
                    <?php } ?>

                    <?php if($settings['getting_flight_title'] || $settings['getting_flight_text']) { ?>
                        <div class="getting__item">
                            <h4 class="getting__item-title" style="background-image: url('<?php if($settings['getting_flight_icon']['url']) { ?><?php echo esc_html__($settings['getting_flight_icon']['url']); ?><?php } ?>'); background-repeat: no-repeat;">
                                <?php echo esc_html__($settings['getting_flight_title']); ?>
                            </h4>
                            <p class="getting__item-text">
                                <?php echo wp_kses($settings['getting_flight_text'], $html_tags); ?>
                            </p>
                        </div>
                    <?php } ?>

                    <?php if($settings['getting_training_title'] || $settings['getting_training_text']) { ?>
                        <div class="getting__item">
                            <h4 class="getting__item-title" style="background-image: url('<?php if($settings['getting_training_icon']['url']) { ?><?php echo esc_html__($settings['getting_training_icon']['url']); ?><?php } ?>'); background-repeat: no-repeat;">
                                <?php echo esc_html__($settings['getting_training_title']); ?>
                            </h4>
                            <p class="getting__item-text">
                                <?php echo wp_kses($settings['getting_training_text'], $html_tags); ?>
                            </p>
                        </div>
                    <?php } ?>
                </div>
                
                <div class="getting__info">
                    <div class="getting__info-items">
                        <?php
                            $arrived = $settings['getting_info_arrived'];
                            $learned = esc_html__($settings['getting_info_learned']);
                            $satisfied = esc_html__($settings['getting_info_satisfied']);
                        ?>
                        <?php if($arrived) { ?>
                            <div class="getting__info-item">
                                <div class="getting__info-line">
                                    <img
                                        class="getting__info-img"
                                        src="<?php if($settings['getting_info_line']['url']) { ?><?php echo esc_html__($settings['getting_info_line']['url']); ?><?php } ?>"
                                        style="width: calc(100% - <?php echo $arrived ?>%);"
                                        alt=""
                                    />
                                    <span><?php echo 100 - $arrived; ?>%</span>
                                </div>
                                <?php echo esc_html('Приехали второй раз', 'wawe-elementor'); ?>
                            </div>
                        <?php } ?>

                        <?php if($learned) { ?>
                            <div class="getting__info-item">
                                <div class="getting__info-line">
                                    <img
                                        class="getting__info-img"
                                        src="<?php if($settings['getting_info_line']['url']) { ?><?php echo esc_html__($settings['getting_info_line']['url']); ?><?php } ?>"
                                        style="width: calc(100% - <?php echo $learned ?>%)"
                                        alt=""
                                    />
                                    <span><?php echo 100 - $learned; ?>%</span>
                                </div>
                                <?php echo esc_html('Научились кататься', 'wawe-elementor'); ?>
                            </div>
                        <?php } ?>

                        <?php if($satisfied) { ?>
                            <div class="getting__info-item">
                                <div class="getting__info-line">
                                    <img
                                        class="getting__info-img"
                                        src="<?php if($settings['getting_info_line']['url']) { ?><?php echo esc_html__($settings['getting_info_line']['url']); ?><?php } ?>"
                                        style="width: calc(100% - <?php echo $satisfied ?>%)"
                                        alt=""
                                    />
                                    <span><?php echo 100 - $satisfied; ?>%</span>
                                </div>
                                <?php echo esc_html('Довольных клиентов', 'wawe-elementor'); ?>
                            </div>
                        <?php } ?>
                    </div>
                    <div class="getting__info-text">
                        <?php echo wp_kses($settings['getting_info_text'], $html_tags); ?>
                    </div>
                </div>
            </div>
        </div>
    <?php }
}