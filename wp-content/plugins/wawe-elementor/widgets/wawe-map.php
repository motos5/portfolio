<?php
class Elementor_Map_Widget extends \Elementor\Widget_Base {
    // Widget Methods
    public function get_name() {
        return 'map';
    }
    public function get_title() {
        return esc_html__( 'Map', 'wawe-elementor' );
    }
    public function get_icon() {
        return 'eicon-map-pin';
    }
    public function get_custom_help_url() {
        return 'https://go.elementor.com/widget-map';
    }
    public function get_categories() {
        return [ 'wawe_category' ];
    }
    public function get_keywords() {
        return [ 'map', 'rating' ];
    }

    // Controls поля в Админке
    protected function register_controls() {
        // Открываем секцию для Map
        $this->start_controls_section(
            'map_content',
            [
                'label' => esc_html__( 'Map Content', 'wawe-elementor' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

        // Поле Media (Map Image)
        $this->add_control(
            'map_image',
            [
                'label' => esc_html__( 'Map Image', 'wawe-elementor' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => '', // Заглушка картинки (следует сделать параметр пустым)
                ],
            ]
        );

        // Закрываем секцию для Map
        $this->end_controls_section();
    }

    protected function render() {
        $settings = $this->get_settings_for_display(); ?>
        <div class="map">
            <img class="map-img" src="<?php echo esc_html__($settings['map_image']['url']); ?>" alt="<?php echo esc_html__($settings['map_image']['alt']); ?>" />
        </div>
    <?php }
}