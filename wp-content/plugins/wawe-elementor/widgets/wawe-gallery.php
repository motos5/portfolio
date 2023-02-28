<?php
class Elementor_Gallery_Widget extends \Elementor\Widget_Base {

    // Вывод зарегестрированных AJAX скриптов
    public function get_script_depends() {
		return [ 'wawe-filter' ];
	}

    // Widget Methods
    public function get_name() {
        return 'gallery';
    }
    public function get_title() {
        return esc_html__( 'Gallery', 'wawe-elementor' );
    }
    public function get_icon() {
        return 'eicon-gallery-grid';
    }
    public function get_custom_help_url() {
        return 'https://go.elementor.com/widget-gallery';
    }
    public function get_categories() {
        return [ 'wawe_category' ];
    }
    public function get_keywords() {
        return [ 'gallery', 'other' ];
    }

    // Controls поля в Админке
    protected function register_controls() {
        // Открываем секцию для Gallery
        $this->start_controls_section(
            'gallery_content',
            [
                'label' => esc_html__( 'Gallery Content', 'wawe-elementor' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

        // Поле Text
        $this->add_control(
			'gallery_title',
			[
				'label' => esc_html__( 'Gallery Title', 'wawe-elementor' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( '', 'wawe-elementor' ),
				'placeholder' => esc_html__( 'Type your gallery title here', 'wawe-elementor' ),
			]
		);

        // Открываем табы Gallery
        $this->start_controls_tabs(
			'gallery_tabs'
		);

        // Открываем таб Gallery Blockquote
        $this->start_controls_tab(
			'gallery_blockquote_tab',
			[
				'label' => esc_html__( 'Blockquote', 'wawe-elementor' ),
			]
		);

        // Поле Text
        $this->add_control(
			'gallery_blockquote_text',
			[
				'label' => esc_html__( 'Blockquote Text', 'wawe-elementor' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( '', 'wawe-elementor' ),
				'placeholder' => esc_html__( 'Type your blockquote text here', 'wawe-elementor' ),
			]
		);

        // Поле Text
        $this->add_control(
			'gallery_blockquote_author',
			[
				'label' => esc_html__( 'Blockquote Author', 'wawe-elementor' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( '', 'wawe-elementor' ),
				'placeholder' => esc_html__( 'Type your blockquote author here', 'wawe-elementor' ),
			]
		);

        // Закрываем таб Gallery Blockquote
        $this->end_controls_tab();

        // Открываем таб Gallery Video
        $this->start_controls_tab(
			'gallery_video_tab',
			[
				'label' => esc_html__( 'Video', 'wawe-elementor' ),
			]
		);

        // Поле Media (Background)
        $this->add_control(
            'getting_video_bg',
            [
                'label' => esc_html__( 'Video Backgroud', 'wawe-elementor' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => '', // Заглушка картинки (следует сделать параметр пустым)
                ],
            ]
        );

        // Поле URL (Video)
        $this->add_control(
			'getting_video_link',
			[
				'label' => esc_html__( 'Video Link', 'wawe-elementor' ),
				'type' => \Elementor\Controls_Manager::URL,
				'placeholder' => esc_html__( 'https://your-link.com', 'wawe-elementor' ),
                'options' => [ 'url', 'is_external', 'nofollow' ],
				'default' => [
					'url' => '',
					'is_external' => false,
					'nofollow' => false,
					// 'custom_attributes' => '',
				],
				'label_block' => true,
			]
		);

        // Закрываем таб Gallery Video
        $this->end_controls_tab();

        // Открываем таб Gallery Numbers
        $this->start_controls_tab(
			'gallery_numbers_tab',
			[
				'label' => esc_html__( 'Numbers', 'wawe-elementor' ),
			]
		);

        // Поле Number
        $this->add_control(
			'gallery_numbers_num1',
			[
				'label' => esc_html__( 'Number 1', 'wawe-elementor' ),
				'type' => \Elementor\Controls_Manager::NUMBER,
				'min' => 5,
				'max' => 9000,
				'step' => 5,
				'default' => 450,
			]
		);

        // Поле Text
        $this->add_control(
			'gallery_numbers_text1',
			[
				'label' => esc_html__( 'Number Text 1', 'wawe-elementor' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( '', 'wawe-elementor' ),
				'placeholder' => esc_html__( 'Type your number 1 here', 'wawe-elementor' ),
			]
		);

        // Поле Number
        $this->add_control(
			'gallery_numbers_num2',
			[
				'label' => esc_html__( 'Number 2', 'wawe-elementor' ),
				'type' => \Elementor\Controls_Manager::NUMBER,
				'min' => 5,
				'max' => 9000,
				'step' => 5,
				'default' => 2500,
			]
		);

        // Поле Text
        $this->add_control(
			'gallery_numbers_text2',
			[
				'label' => esc_html__( 'Number Text 2', 'wawe-elementor' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( '', 'wawe-elementor' ),
				'placeholder' => esc_html__( 'Type your number 2 here', 'wawe-elementor' ),
			]
		);

        // Поле Number
        $this->add_control(
			'gallery_numbers_num3',
			[
				'label' => esc_html__( 'Number 3', 'wawe-elementor' ),
				'type' => \Elementor\Controls_Manager::NUMBER,
				'min' => 5,
				'max' => 9000,
				'step' => 5,
				'default' => 10,
			]
		);

        // Поле Text
        $this->add_control(
			'gallery_numbers_text3',
			[
				'label' => esc_html__( 'Number Text 3', 'wawe-elementor' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( '', 'wawe-elementor' ),
				'placeholder' => esc_html__( 'Type your number 3 here', 'wawe-elementor' ),
			]
		);

        // Поле Number
        $this->add_control(
			'gallery_numbers_num4',
			[
				'label' => esc_html__( 'Number 4', 'wawe-elementor' ),
				'type' => \Elementor\Controls_Manager::NUMBER,
				'min' => 5,
				'max' => 9000,
				'step' => 5,
				'default' => 365,
			]
		);

        // Поле Text
        $this->add_control(
			'gallery_numbers_text4',
			[
				'label' => esc_html__( 'Number Text 4', 'wawe-elementor' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( '', 'wawe-elementor' ),
				'placeholder' => esc_html__( 'Type your number 4 here', 'wawe-elementor' ),
			]
		);


        // Закрываем таб Gallery Numbers
        $this->end_controls_tab();

        // Закрываем табы Gallery
        $this->end_controls_tabs();

        // Закрываем секцию для Gallery
        $this->end_controls_section();
    }

    protected function render() {
        $settings = $this->get_settings_for_display(); ?>
        
        <div class="gallery">
            <div class="container">
                <?php if($settings['gallery_title']) { ?>
                    <h2 class="title gallery__title"><?php echo esc_html__($settings['gallery_title']); ?></h2>
                <?php } ?>
                <div class="gallery__filtr">
                <?php
                    $galleries_types = get_terms( array(
                        'taxonomy' => 'category-gallery',
                        'hide_empty' => false,
                    ) );
                ?>
                    <button class="gallery__filtr-btn" data-filter="all"><?php echo esc_html__('All', 'wawe-elementor'); ?></button>
                <?php
                    foreach ($galleries_types as $button) { ?>
                        <button class="gallery__filtr-btn" data-filter=".category-<?php echo $button->slug; ?>" data-id="<?php echo $button->term_id; ?>"><?php echo $button->name; ?></button>
                    <?php } ?>
                </div>

                <div class="gallery__content">
                    <?php
                        $galleryes = new WP_Query(array(
                            'post_type' => 'gallery',
                            'posts_per_page' => -1,
                        ));
                    ?>
                    
                    <?php if ( $galleryes->have_posts() ) : while ( $galleryes->have_posts() ) : $galleryes->the_post(); ?>
                        <div class="gallery__content-item all">
                            <?php the_post_thumbnail( 'full'); ?>
                            <a class="gallery__item-link" href="<?php echo esc_url('#'); ?>"></a>
                        </div>
                    <?php endwhile;
                    wp_reset_postdata();
                    else: ?>
                        <p><?php echo esc_html__('Not found items', 'wawe-elementor'); ?></p>
                    <?php endif; ?>
                </div>
                <a class="button-general" href="#"><?php echo esc_html__('ПОКАЗАТЬ ЕЩЕ', 'wawe-elementor'); ?></a>
            </div>
            <?php if($settings['gallery_blockquote_text'] || $settings['gallery_blockquote_author']) { ?>
                <blockquote class="blockquote">
                    «<?php echo esc_html__($settings['gallery_blockquote_text']); ?>»
                    <span class="blockquote__author">
                        <?php echo esc_html__($settings['gallery_blockquote_author']); ?>
                    </span>
                </blockquote>
            <?php } ?>
            <div class="container">
                <?php if($settings['getting_video_link']['url']) { ?>
                    <div class="gallery__video" style="background-image: url('<?php if($settings['getting_video_bg']['url']) { ?><?php echo esc_html__($settings['getting_video_bg']['url']); ?><?php } ?>'); background-repeat: no-repeat; background-size: cover;">
                        <a class="gallery__video-link" href="<?php echo esc_url($settings['getting_video_link']['url']); ?>" data-fancybox>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/play-img.svg" alt="">
                        </a>
                    </div>
                <?php } ?>
                <div class="gallery__numbers">
                    <?php if($settings['gallery_numbers_num1'] || $settings['gallery_numbers_text1']) { ?>
                        <p class="gallery__item-number"><?php echo esc_html__($settings['gallery_numbers_num1']); ?><span><?php echo esc_html__($settings['gallery_numbers_text1']); ?></span></p>
                    <?php } ?>
                    <?php if($settings['gallery_numbers_num2'] || $settings['gallery_numbers_text2']) { ?>
                        <p class="gallery__item-number"><?php echo esc_html__($settings['gallery_numbers_num2']); ?><span><?php echo esc_html__($settings['gallery_numbers_text2']); ?></span></p>
                    <?php } ?>
                    <?php if($settings['gallery_numbers_num3'] || $settings['gallery_numbers_text3']) { ?>
                        <p class="gallery__item-number"><?php echo esc_html__($settings['gallery_numbers_num3']); ?><span><?php echo esc_html__($settings['gallery_numbers_text3']); ?></span></p>
                    <?php } ?>
                    <?php if($settings['gallery_numbers_num4'] || $settings['gallery_numbers_text4']) { ?>
                        <p class="gallery__item-number"><?php echo esc_html__($settings['gallery_numbers_num4']); ?><span><?php echo esc_html__($settings['gallery_numbers_text4']); ?></span></p>
                    <?php } ?>
                </div>
            </div>
        </div>
        
        
    <?php }
}