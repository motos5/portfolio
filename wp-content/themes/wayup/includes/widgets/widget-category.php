<?php
class Wayup_Widget_Category extends WP_Widget {
    // Основная инормация о виджете и его название с классом
    public function __construct() {
        $widget_options = array(
            'classname' => 'wayup_widget_category',
            'description' => esc_html__('Widget for Category News', 'wayup'),
        );

        parent::__construct( 'wayup_widget_category', esc_html__('Wayup | Category News', 'wayup'), $widget_options );

    }

    // Отображение виджета на сайте
    public function widget( $args, $instance ) {
        // Задаваемые переменные
        $title = apply_filters( 'widget_title', $instance['title'] );
        
        // Код вывода на сайте
        echo $args['before_widget'];
        
        ?>
        <div class="categories side-nav">
            <?php if ( ! empty( $title ) ) { ?>
                <h5 class="categories__title">
                    <svg  width="19" height="19">
                        <use xlink:href="#content-post"/>
                    </svg>
                    <?php printf(esc_html__('%1$s', 'wayup'), $title); ?>
                </h5>
            <?php } ?>
            <?php
                $categories = get_terms( array(
                    'taxonomy' => 'category',
                    'hide_empty' => false,
                ) );
                
            ?>
            <ul>
                <?php
                foreach ($categories as $type) { ?>
                    <li>
                        <a href="<?php echo get_term_link($type); ?>"><?php echo $type->name; ?></a>
                        <span><?php echo $type->count; ?></span>
                    </li>
				<?php } ?>
                
            </ul>
        </div>
            
        <?php echo $args['after_widget'];
    }

    // Отображение виджета в админке
	public function form( $instance ) {
        // Задаваемые переменные
        $title = @ $instance['title'] ?: esc_html('', 'wayup'); ?>

        <p>
            <label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>">
        </p>
        
        <?php
    }

    // Сохранение и обновление частей виджета
	public function update( $new_instance, $old_instance ) {
		$instance = $old_instance;
		$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';

		return $instance;
	}
}