<?php
class Elementor_Team_Widget extends \Elementor\Widget_Base {
    // Widget Methods
    public function get_name() {
        return 'team';
    }
    public function get_title() {
        return esc_html__( 'Team', 'wawe-elementor' );
    }
    public function get_icon() {
        return 'eicon-person';
    }
    public function get_custom_help_url() {
        return 'https://go.elementor.com/widget-team';
    }
    public function get_categories() {
        return [ 'wawe_category' ];
    }
    public function get_keywords() {
        return [ 'team', 'persons' ];
    }

    // Controls поля в Админке
    protected function register_controls() {
        // Открываем секцию для Team
        $this->start_controls_section(
            'team_content',
            [
                'label' => esc_html__( 'Team Content', 'wawe-elementor' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

        // Поле Text
        $this->add_control(
			'team_title',
			[
				'label' => esc_html__( 'Team Title', 'wawe-elementor' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( '', 'wawe-elementor' ),
				'placeholder' => esc_html__( 'Type your team title here', 'wawe-elementor' ),
			]
		);

        // Team One //
        // Поле Media (Image)
        $this->add_control(
            'team_image_1',
            [
                'label' => esc_html__( 'Team 1', 'wawe-elementor' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => '', // Заглушка картинки (следует сделать параметр пустым)
                ],
            ]
        );

        // Поле Text
        $this->add_control(
			'team_name_1',
			[
				'label' => esc_html__( 'Name 1', 'wawe-elementor' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( '', 'wawe-elementor' ),
				'placeholder' => esc_html__( 'Type your team name one here', 'wawe-elementor' ),
			]
		);

        // Поле Text
        $this->add_control(
			'team_profession_1',
			[
				'label' => esc_html__( 'Profession 1', 'wawe-elementor' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( '', 'wawe-elementor' ),
				'placeholder' => esc_html__( 'Type your team profession one here', 'wawe-elementor' ),
			]
		);
        // End Team One //


        // Team Two //
        // Поле Media (Image)
        $this->add_control(
            'team_image_2',
            [
                'label' => esc_html__( 'Team 2', 'wawe-elementor' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => '', // Заглушка картинки (следует сделать параметр пустым)
                ],
            ]
        );

        // Поле Text
        $this->add_control(
			'team_name_2',
			[
				'label' => esc_html__( 'Name 2', 'wawe-elementor' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( '', 'wawe-elementor' ),
				'placeholder' => esc_html__( 'Type your team name two here', 'wawe-elementor' ),
			]
		);

        // Поле Text
        $this->add_control(
			'team_profession_2',
			[
				'label' => esc_html__( 'Profession 2', 'wawe-elementor' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( '', 'wawe-elementor' ),
				'placeholder' => esc_html__( 'Type your team profession two here', 'wawe-elementor' ),
			]
		);
        // End Team Two //


        // Team Three //
        // Поле Media (Image)
        $this->add_control(
            'team_image_3',
            [
                'label' => esc_html__( 'Team 3', 'wawe-elementor' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => '', // Заглушка картинки (следует сделать параметр пустым)
                ],
            ]
        );

        // Поле Text
        $this->add_control(
			'team_name_3',
			[
				'label' => esc_html__( 'Name 3', 'wawe-elementor' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( '', 'wawe-elementor' ),
				'placeholder' => esc_html__( 'Type your team name three here', 'wawe-elementor' ),
			]
		);

        // Поле Text
        $this->add_control(
			'team_profession_3',
			[
				'label' => esc_html__( 'Profession 3', 'wawe-elementor' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( '', 'wawe-elementor' ),
				'placeholder' => esc_html__( 'Type your team profession three here', 'wawe-elementor' ),
			]
		);
        // End Team Three //

        // Закрываем секцию для Team
        $this->end_controls_section();
    }

    protected function render() {
        $settings = $this->get_settings_for_display(); ?>
        <div class="team">
            <div class="container">
                <?php if($settings['team_title']) { ?>
                    <h2 class="title team__title"><?php echo esc_html__($settings['team_title']); ?></h2>
                <?php } ?>
                <div class="team__items">
                    <?php if($settings['team_image_1']['url'] && $settings['team_name_1']) { ?>
                        <div class="team__item">
                            <img class="team__item-img" src="<?php echo esc_html__($settings['team_image_1']['url']); ?>" alt="<?php echo esc_html__($settings['team_image_1']['alt']); ?>" />
                            <div class="team__item-name"><?php echo esc_html__($settings['team_name_1']); ?></div>
                            <?php if($settings['team_profession_1']) { ?>
                                <div class="team__item-profession"><?php echo esc_html__($settings['team_profession_1']); ?></div>
                            <?php } ?>
                        </div>
                    <?php } ?>
                    <?php if($settings['team_image_2']['url'] && $settings['team_name_2']) { ?>
                        <div class="team__item">
                            <img class="team__item-img" src="<?php echo esc_html__($settings['team_image_2']['url']); ?>" alt="<?php echo esc_html__($settings['team_image_2']['alt']); ?>" />
                            <div class="team__item-name"><?php echo esc_html__($settings['team_name_2']); ?></div>
                            <?php if($settings['team_profession_2']) { ?>
                                <div class="team__item-profession"><?php echo esc_html__($settings['team_profession_2']); ?></div>
                            <?php } ?>
                        </div>
                    <?php } ?>
                    <?php if($settings['team_image_3']['url'] && $settings['team_name_3']) { ?>
                        <div class="team__item">
                            <img class="team__item-img" src="<?php echo esc_html__($settings['team_image_3']['url']); ?>" alt="<?php echo esc_html__($settings['team_image_3']['alt']); ?>" />
                            <div class="team__item-name"><?php echo esc_html__($settings['team_name_3']); ?></div>
                            <?php if($settings['team_profession_3']) { ?>
                                <div class="team__item-profession"><?php echo esc_html__($settings['team_profession_3']); ?></div>
                            <?php } ?>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    <?php }
}