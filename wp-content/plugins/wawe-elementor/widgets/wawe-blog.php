<?php
class Elementor_Blog_Widget extends \Elementor\Widget_Base {
    // Widget Methods
    public function get_name() {
        return 'blog';
    }
    public function get_title() {
        return esc_html__( 'Blog', 'wawe-elementor' );
    }
    public function get_icon() {
        return 'eicon-edit';
    }
    public function get_custom_help_url() {
        return 'https://go.elementor.com/widget-blog';
    }
    public function get_categories() {
        return [ 'wawe_category' ];
    }
    public function get_keywords() {
        return [ 'blog', 'texts' ];
    }

    // Controls поля в Админке
    protected function register_controls() {
        // Открываем секцию для Blog
        $this->start_controls_section(
            'blog_content',
            [
                'label' => esc_html__( 'Blog Content', 'wawe-elementor' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

        // Поле Text
        $this->add_control(
			'blog_title',
			[
				'label' => esc_html__( 'Blog Title', 'wawe-elementor' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( '', 'wawe-elementor' ),
				'placeholder' => esc_html__( 'Type your blog title here', 'wawe-elementor' ),
			]
		);


        // Закрываем секцию для Blog
        $this->end_controls_section();
    }

    protected function render() {
        $settings = $this->get_settings_for_display();

        $count = 10;

        $blog = new WP_Query( [
            'posts_per_page' => $count,  // Сколько выводить постов
            'post_type'      => 'post',  // Какие посты нам нужно выводить
        ] );
        ?>
        <div class="blog" id="blog">
            <?php if($settings['blog_title']) { ?>
                <h2 class="title blog__title"><?php echo esc_html__($settings['blog_title']); ?></h2>
            <?php } ?>
            <div class="blog__wrapper">
                <div class="container">
                    <div class="blog__inner">
                        <?php if ( $blog->have_posts() ) : while ( $blog->have_posts() ) : $blog->the_post(); ?>
                            <div class="blog__inner-item">
                                <a class="blog__inner-item-link" href="#">
                                    <h3 class="blog__inner-item-title">
                                        <?php the_title(); ?>
                                    </h3>
                                    <?php the_content(); ?>
                                </a>
                            </div>
                        <?php endwhile; wp_reset_postdata(); else: ?>
                            <p><?php echo esc_html__('Content not found.', 'o-marketing'); ?></p>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    <?php }
}