<?php
class Elementor_Contact_Widget extends \Elementor\Widget_Base {
    // Widget Methods
    public function get_name() {
        return 'contact';
    }
    public function get_title() {
        return esc_html__( 'Contact', 'wawe-elementor' );
    }
    public function get_icon() {
        return 'eicon-globe';
    }
    public function get_custom_help_url() {
        return 'https://go.elementor.com/widget-contact';
    }
    public function get_categories() {
        return [ 'wawe_category' ];
    }
    public function get_keywords() {
        return [ 'contact', 'rating' ];
    }

    // Controls поля в Админке
    protected function register_controls() {
        // Открываем секцию для Contact
        $this->start_controls_section(
            'contact_content',
            [
                'label' => esc_html__( 'Contact Content', 'wawe-elementor' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

        // Поле Text
        $this->add_control(
			'contact_title',
			[
				'label' => esc_html__( 'Contact Title', 'wawe-elementor' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( '', 'wawe-elementor' ),
				'placeholder' => esc_html__( 'Type your contact title here', 'wawe-elementor', 'wawe-elementor' ),
			]
		);

        // Поле Text
        $this->add_control(
			'contact_form_shortcode',
			[
				'label' => esc_html__( 'Form Shortcode', 'wawe-elementor' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( '', 'wawe-elementor' ),
				'placeholder' => esc_html__( 'Insert shortcode from Contact Form 7 Plugin here' ),
			]
		);

        // Поле Text
        $this->add_control(
			'contact_text',
			[
				'label' => esc_html__( 'Contact Text', 'wawe-elementor' ),
				'type' => \Elementor\Controls_Manager::TEXTAREA,
				'default' => esc_html__( '', 'wawe-elementor' ),
				'placeholder' => esc_html__( 'Type your contact text here', 'wawe-elementor' ),
			]
		);

        // Поле Text
        $this->add_control(
			'contact_phone',
			[
				'label' => esc_html__( 'Contact Phone', 'wawe-elementor' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( '', 'wawe-elementor' ),
				'placeholder' => esc_html__( 'Type your contact phone here', 'wawe-elementor' ),
			]
		);

        // Поле Text
        $this->add_control(
			'contact_address',
			[
				'label' => esc_html__( 'Contact Address', 'wawe-elementor' ),
				'type' => \Elementor\Controls_Manager::TEXTAREA,
				'default' => esc_html__( '', 'wawe-elementor' ),
				'placeholder' => esc_html__( 'Type your contact address here', 'wawe-elementor' ),
			]
		);

        // Закрываем секцию для Contact
        $this->end_controls_section();


        // Открываем секцию для Social
        $this->start_controls_section(
            'social_content',
            [
                'label' => esc_html__( 'Social Content', 'wawe-elementor' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
			'list',
			[
				'label' => esc_html__( 'Socials List', 'wawe-elementor' ),
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => [
					[
						'name' => 'social_link',
						'label' => esc_html__( 'Social URL', 'wawe-elementor' ),
						'type' => \Elementor\Controls_Manager::TEXT,
						'default' => esc_html__( '' , 'wawe-elementor' ),
						'label_block' => true,
                        'placeholder' => 'https://your_social_url.com'
					],
                    [
						'name' => 'social_name',
						'label' => esc_html__( 'Social Name', 'wawe-elementor' ),
						'type' => \Elementor\Controls_Manager::TEXT,
						'default' => esc_html__( '' , 'wawe-elementor' ),
						'label_block' => true,
                        'placeholder' => 'Your social name'
					],
					
				],
				'default' => [
					[
						'social_link' => esc_url( 'https://www.instagram.com/', 'wawe-elementor' ),
						'social_name' => esc_html__( 'Instagram', 'wawe-elementor' ),
					],
					[
						'social_link' => esc_url( 'https://www.facebook.com/', 'wawe-elementor' ),
						'social_name' => esc_html__( 'Facebook', 'wawe-elementor' ),
					],
                    [
						'social_link' => esc_url( 'https://www.youtube.com/', 'wawe-elementor' ),
						'social_name' => esc_html__( 'Youtube', 'wawe-elementor' ),
					],
				],
				'title_field' => '{{{ social_name }}}',
			]
		);



        // Закрываем секцию для Social
        $this->end_controls_section();
    }

    protected function render() {
        $settings = $this->get_settings_for_display();
        $html_tags = array(
            'p' => array(),
            'br' => array(),
        );
        ?>
        <div class="contacts">
            <div class="container">
                <h2 class="title contacts__title"><?php echo esc_html__($settings['contact_title']); ?></h2>
                <div class="contacts__inner">
                    <?php echo do_shortcode($settings['contact_form_shortcode']); ?>
                    
                    <div class="adress">
                        <p>
                            <?php echo wp_kses($settings['contact_text'], $html_tags); ?>
                        </p>
                        <p>
                            <?php echo esc_html__('WhatsApp, Viber, Telegram', 'wawe-elementor') ?><br />
                            <a class="adress__tel" href="tel:+34674863788"><?php echo esc_html__($settings['contact_phone']); ?></a>
                        </p>
                        <address>
                            <?php echo esc_html__($settings['contact_address']); ?>
                        </address>
                    </div>
                </div>
                <div class="social">
                    <?php
                    if ( $settings['list'] ) {
                        foreach (  $settings['list'] as $item ) { ?>
                            <a href="<?php echo esc_url($item['social_link']); ?>"><span><?php echo esc_html__($item['social_name']); ?></span></a>
                        <?php }
                    } ?>
                    <!-- <a href="#"><span>INSTAGRAM</span></a>
                    <a href="#"><span>FACEBOOK</span></a>
                    <a href="#"><span>YOUTUBE</span></a> -->
                </div>
            </div>
        </div>
    <?php }
}