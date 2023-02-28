<?php
class Elementor_Service_Widget extends \Elementor\Widget_Base {
    // Widget Methods
    public function get_name() {
        return 'service';
    }
    public function get_title() {
        return esc_html__( 'Service', 'wawe-elementor' );
    }
    public function get_icon() {
        return 'eicon-wrench';
    }
    public function get_custom_help_url() {
        return 'https://go.elementor.com/widget-service';
    }
    public function get_categories() {
        return [ 'wawe_category' ];
    }
    public function get_keywords() {
        return [ 'service', 'rating' ];
    }

    // Controls поля в Админке
    protected function register_controls() {
        // Открываем секцию для Service
        $this->start_controls_section(
            'service_content',
            [
                'label' => esc_html__( 'Service Content', 'wawe-elementor' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

        // Поле Text
        $this->add_control(
			'service_title',
			[
				'label' => esc_html__( 'Service Title', 'wawe-elementor' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( '', 'wawe-elementor' ),
				'placeholder' => esc_html__( 'Type your service title here', 'wawe-elementor' ),
			]
		);

        // Открываем табы Service
        $this->start_controls_tabs(
			'service_tabs'
		);

        // Открываем таб Service Standart
        $this->start_controls_tab(
			'service_standart_tab',
			[
				'label' => esc_html__( 'Standart', 'wawe-elementor' ),
			]
		);

        // Поле Text
        $this->add_control(
			'service_standart_name',
			[
				'label' => esc_html__( 'Service Name', 'wawe-elementor' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( '', 'wawe-elementor' ),
				'placeholder' => esc_html__( 'Type your service name here', 'wawe-elementor' ),
			]
		);

        // Поле Text
        $this->add_control(
			'service_standart_accommodation',
			[
				'label' => esc_html__( 'Service Accommodation', 'wawe-elementor' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( '', 'wawe-elementor' ),
				'placeholder' => esc_html__( 'Type your service accommodation here', 'wawe-elementor' ),
			]
		);

        // Поле Text
        $this->add_control(
			'service_standart_class',
			[
				'label' => esc_html__( 'Service Class', 'wawe-elementor' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( '', 'wawe-elementor' ),
				'placeholder' => esc_html__( 'Type your service class here', 'wawe-elementor' ),
			]
		);

        // Поле Text
        $this->add_control(
			'service_standart_equipment',
			[
				'label' => esc_html__( 'Service Equipment', 'wawe-elementor' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( '', 'wawe-elementor' ),
				'placeholder' => esc_html__( 'Type your service equipment here', 'wawe-elementor' ),
			]
		);

        // Поле Text
        $this->add_control(
			'service_standart_education',
			[
				'label' => esc_html__( 'Service Education', 'wawe-elementor' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( '', 'wawe-elementor' ),
				'placeholder' => esc_html__( 'Type your service education here', 'wawe-elementor' ),
			]
		);

        // Поле Text
        $this->add_control(
			'service_standart_insurance',
			[
				'label' => esc_html__( 'Service Insurance', 'wawe-elementor' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( '', 'wawe-elementor' ),
				'placeholder' => esc_html__( 'Type your service insurance here', 'wawe-elementor' ),
			]
		);

        // Поле Text
        $this->add_control(
			'service_standart_party',
			[
				'label' => esc_html__( 'Service Party', 'wawe-elementor' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( '', 'wawe-elementor' ),
				'placeholder' => esc_html__( 'Type your service party here', 'wawe-elementor' ),
			]
		);

        // Поле Text
        $this->add_control(
			'service_standart_sum',
			[
				'label' => esc_html__( 'Service Sum', 'wawe-elementor' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( '', 'wawe-elementor' ),
				'placeholder' => esc_html__( 'Type your service sum here', 'wawe-elementor' ),
			]
		);

        // Закрываем таб Service Standart
        $this->end_controls_tab();


        // Открываем таб Service Inclusive
        $this->start_controls_tab(
			'service_inclusive_tab',
			[
				'label' => esc_html__( 'Inclusive', 'wawe-elementor' ),
			]
		);

        // Поле Text
        $this->add_control(
			'service_inclusive_name',
			[
				'label' => esc_html__( 'Service Name', 'wawe-elementor' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( '', 'wawe-elementor' ),
				'placeholder' => esc_html__( 'Type your service name here', 'wawe-elementor' ),
			]
		);

        // Поле Text
        $this->add_control(
			'service_inclusive_accommodation',
			[
				'label' => esc_html__( 'Service Accommodation', 'wawe-elementor' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( '', 'wawe-elementor' ),
				'placeholder' => esc_html__( 'Type your service accommodation here', 'wawe-elementor' ),
			]
		);

        // Поле Text
        $this->add_control(
			'service_inclusive_class',
			[
				'label' => esc_html__( 'Service Class', 'wawe-elementor' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( '', 'wawe-elementor' ),
				'placeholder' => esc_html__( 'Type your service class here', 'wawe-elementor' ),
			]
		);

        // Поле Text
        $this->add_control(
			'service_inclusive_equipment',
			[
				'label' => esc_html__( 'Service Equipment', 'wawe-elementor' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( '', 'wawe-elementor' ),
				'placeholder' => esc_html__( 'Type your service equipment here', 'wawe-elementor' ),
			]
		);

        // Поле Text
        $this->add_control(
			'service_inclusive_education',
			[
				'label' => esc_html__( 'Service Education', 'wawe-elementor' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( '', 'wawe-elementor' ),
				'placeholder' => esc_html__( 'Type your service education here', 'wawe-elementor' ),
			]
		);

        // Поле Text
        $this->add_control(
			'service_inclusive_insurance',
			[
				'label' => esc_html__( 'Service Insurance', 'wawe-elementor' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( '', 'wawe-elementor' ),
				'placeholder' => esc_html__( 'Type your service insurance here', 'wawe-elementor' ),
			]
		);

        // Поле Text
        $this->add_control(
			'service_inclusive_party',
			[
				'label' => esc_html__( 'Service Party', 'wawe-elementor' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( '', 'wawe-elementor' ),
				'placeholder' => esc_html__( 'Type your service party here', 'wawe-elementor' ),
			]
		);

        // Поле Text
        $this->add_control(
			'service_inclusive_flight',
			[
				'label' => esc_html__( 'Service Flight', 'wawe-elementor' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( '', 'wawe-elementor' ),
				'placeholder' => esc_html__( 'Type your service flight here', 'wawe-elementor' ),
			]
		);

        // Поле Text
        $this->add_control(
			'service_inclusive_breakfasts',
			[
				'label' => esc_html__( 'Service Breakfasts', 'wawe-elementor' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( '', 'wawe-elementor' ),
				'placeholder' => esc_html__( 'Type your service breakfasts here', 'wawe-elementor' ),
			]
		);

        // Поле Text
        $this->add_control(
			'service_inclusive_sum',
			[
				'label' => esc_html__( 'Service Sum', 'wawe-elementor' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( '', 'wawe-elementor' ),
				'placeholder' => esc_html__( 'Type your service sum here', 'wawe-elementor' ),
			]
		);

        // Закрываем таб Service Inclusive
        $this->end_controls_tab();


        // Открываем таб Service Pro
        $this->start_controls_tab(
			'service_pro_tab',
			[
				'label' => esc_html__( 'Pro', 'wawe-elementor' ),
			]
		);

        // Поле Text
        $this->add_control(
			'service_pro_name',
			[
				'label' => esc_html__( 'Service Name', 'wawe-elementor' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( '', 'wawe-elementor' ),
				'placeholder' => esc_html__( 'Type your service name here', 'wawe-elementor' ),
			]
		);

        // Поле Text
        $this->add_control(
			'service_pro_accommodation',
			[
				'label' => esc_html__( 'Service Accommodation', 'wawe-elementor' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( '', 'wawe-elementor' ),
				'placeholder' => esc_html__( 'Type your service accommodation here', 'wawe-elementor' ),
			]
		);

        // Поле Text
        $this->add_control(
			'service_pro_class',
			[
				'label' => esc_html__( 'Service Class', 'wawe-elementor' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( '', 'wawe-elementor' ),
				'placeholder' => esc_html__( 'Type your service class here', 'wawe-elementor' ),
			]
		);

        // Поле Text
        $this->add_control(
			'service_pro_equipment',
			[
				'label' => esc_html__( 'Service Equipment', 'wawe-elementor' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( '', 'wawe-elementor' ),
				'placeholder' => esc_html__( 'Type your service equipment here', 'wawe-elementor' ),
			]
		);

        // Поле Text
        $this->add_control(
			'service_pro_education',
			[
				'label' => esc_html__( 'Service Education', 'wawe-elementor' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( '', 'wawe-elementor' ),
				'placeholder' => esc_html__( 'Type your service education here', 'wawe-elementor' ),
			]
		);

        // Поле Text
        $this->add_control(
			'service_pro_insurance',
			[
				'label' => esc_html__( 'Service Insurance', 'wawe-elementor' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( '', 'wawe-elementor' ),
				'placeholder' => esc_html__( 'Type your service insurance here', 'wawe-elementor' ),
			]
		);

        // Поле Text
        $this->add_control(
			'service_pro_party',
			[
				'label' => esc_html__( 'Service Party', 'wawe-elementor' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( '', 'wawe-elementor' ),
				'placeholder' => esc_html__( 'Type your service party here', 'wawe-elementor' ),
			]
		);

        // Поле Text
        $this->add_control(
			'service_pro_flight',
			[
				'label' => esc_html__( 'Service Flight', 'wawe-elementor' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( '', 'wawe-elementor' ),
				'placeholder' => esc_html__( 'Type your service flight here', 'wawe-elementor' ),
			]
		);

        // Поле Text
        $this->add_control(
			'service_pro_breakfasts',
			[
				'label' => esc_html__( 'Service Breakfasts', 'wawe-elementor' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( '', 'wawe-elementor' ),
				'placeholder' => esc_html__( 'Type your service breakfasts here', 'wawe-elementor' ),
			]
		);

        // Поле Text
        $this->add_control(
			'service_pro_sum',
			[
				'label' => esc_html__( 'Service Sum', 'wawe-elementor' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( '', 'wawe-elementor' ),
				'placeholder' => esc_html__( 'Type your service sum here', 'wawe-elementor' ),
			]
		);

        // Закрываем таб Service Pro
        $this->end_controls_tab();

        // Закрываем табы Service
        $this->end_controls_tabs();

        // Закрываем секцию для Service
        $this->end_controls_section();
    }

    protected function render() {
        $settings = $this->get_settings_for_display();
        $html_tags = array(
            'p' => array(),
            'br' => array(),
        )
        ?>
        <div class="service">
            <div class="container">
				<?php if($settings['service_title']) { ?>
                	<h2 class="title service__title"><?php echo esc_html__($settings['service_title']); ?></h2>
				<?php } ?>
                <div class="service__items">
					<?php if($settings['service_standart_name'] && $settings['service_standart_sum']) { ?>
						<a class="service__link" href="#">
							<ul class="service__item">
								<li class="service__item-name"><?php echo esc_html__($settings['service_standart_name']); ?></li>
								<?php
								$accommodation = $settings['service_standart_accommodation'];
								$class = $settings['service_standart_class'];
								$equipment = $settings['service_standart_equipment'];
								$education = $settings['service_standart_education'];
								$insurance = $settings['service_standart_insurance'];
								$party = $settings['service_standart_party'];

								if($accommodation || $class || $equipment || $education || $insurance || $party) { ?>
									<li><?php echo esc_html__($accommodation); ?></li>
									<li><?php echo esc_html__($class); ?></li>
									<li><?php echo esc_html__($equipment); ?></li>
									<li><?php echo esc_html__($education); ?></li>
									<li><?php echo esc_html__($insurance); ?></li>
									<li><?php echo esc_html__($party); ?></li>
								<?php } ?>
								<li class="service__item-sum"><?php echo esc_html__($settings['service_standart_sum']); ?><span><?php echo esc_html('$', 'wawe-elementor'); ?></span></li>
							</ul>
						</a>
					<?php } ?>
					<?php if($settings['service_inclusive_name'] && $settings['service_inclusive_sum']) { ?>
						<a class="service__link" href="#">
							<ul class="service__item">
								<li class="service__item-name"><?php echo esc_html__($settings['service_inclusive_name']); ?></li>
								<?php
								$accommodation = $settings['service_inclusive_accommodation'];
								$class = $settings['service_inclusive_class'];
								$equipment = $settings['service_inclusive_equipment'];
								$education = $settings['service_inclusive_education'];
								$insurance = $settings['service_inclusive_insurance'];
								$party = $settings['service_inclusive_party'];
								$flight = $settings['service_inclusive_flight'];
								$breakfasts = $settings['service_inclusive_breakfasts'];

								if($accommodation || $class || $equipment || $education || $insurance || $party || $flight || $breakfasts) { ?>
									<li><?php echo esc_html__($accommodation); ?></li>
									<li><?php echo esc_html__($class); ?></li>
									<li><?php echo esc_html__($equipment); ?></li>
									<li><?php echo esc_html__($education); ?></li>
									<li><?php echo esc_html__($insurance); ?></li>
									<li><?php echo esc_html__($party); ?></li>
									<li><?php echo esc_html__($flight); ?></li>
									<li><?php echo esc_html__($breakfasts); ?></li>
								<?php } ?>
								<li class="service__item-sum"><?php echo esc_html__($settings['service_inclusive_sum']); ?><span><?php echo esc_html('$', 'wawe-elementor'); ?></span></li>
							</ul>
						</a>
					<?php } ?>
					<?php if($settings['service_pro_name'] && $settings['service_pro_sum']) { ?>
						<a class="service__link" href="#">
							<ul class="service__item">
								<li class="service__item-name"><?php echo esc_html__($settings['service_pro_name']); ?></li>
								<?php
								$accommodation = $settings['service_pro_accommodation'];
								$class = $settings['service_pro_class'];
								$equipment = $settings['service_pro_equipment'];
								$education = $settings['service_pro_education'];
								$insurance = $settings['service_pro_insurance'];
								$party = $settings['service_pro_party'];
								$flight = $settings['service_pro_flight'];
								$breakfasts = $settings['service_pro_breakfasts'];

								if($accommodation || $class || $equipment || $education || $insurance || $party || $flight || $breakfasts) { ?>
									<li><?php echo esc_html__($accommodation); ?></li>
									<li><?php echo esc_html__($class); ?></li>
									<li><?php echo esc_html__($equipment); ?></li>
									<li><?php echo esc_html__($education); ?></li>
									<li><?php echo esc_html__($insurance); ?></li>
									<li><?php echo esc_html__($party); ?></li>
									<li><?php echo esc_html__($flight); ?></li>
									<li><?php echo esc_html__($breakfasts); ?></li>
								<?php } ?>
								<li class="service__item-sum"><?php echo esc_html__($settings['service_pro_sum']); ?><span><?php echo esc_html('$', 'wawe-elementor'); ?></span></li>
							</ul>
						</a>
					<?php } ?>
                </div>
            </div>
        </div>
    <?php }
}