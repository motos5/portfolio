<?php


class Wayup_Widget_Search extends WP_Widget {
    // Основная инормация о виджете и его название с классом
    public function __construct() {
        $widget_options = array(
            'classname' => 'wayup_widget_search',
            'description' => esc_html__('Widget for search on site JC', 'wayup'),
        );

        parent::__construct( 'wayup_widget_search', esc_html__('Wayup | Search', 'wayup'), $widget_options );

    }

    // Отображение виджета на сайте
    public function widget( $args, $instance ) {
        $custom_placeholder = $instance['custom_placeholder'];
        $custom_posttype = $instance['custom_posttype']; 

        // Код вывода на сайте
        echo $args['before_widget'];
    ?>
        
        <form class="searchform" role="search" method="get" id="searchform" action="<?php echo home_url( '/' ); ?>">

            <input class="text-search" type="search" name="s" value="<?php the_search_query(); ?>" placeholder="<?php echo esc_attr($custom_placeholder); ?>">
            <input type="hidden" name="post_type" value="<?php echo esc_attr($custom_posttype); ?>">
            <input type="submit" class="submit-search" value="" />

        </form>
            
        <?php echo $args['after_widget'];
    }

    // Отображение виджета в админке
	public function form( $instance ) {
        $custom_placeholder = @ $instance['custom_placeholder'] ?: esc_html('News Search', 'wayup');
        $custom_posttype = @ $instance['custom_posttype'] ?: esc_html('news', 'wayup');
    ?>

        <p>
            <label for="<?php echo $this->get_field_id( 'custom_placeholder' ); ?>"><?php _e( 'Placeholder:' ); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id( 'custom_placeholder' ); ?>" name="<?php echo $this->get_field_name( 'custom_placeholder' ); ?>" type="text" value="<?php echo esc_attr( $custom_placeholder ); ?>">
        </p>
        <p>
            <label for="<?php echo $this->get_field_id( 'custom_posttype' ); ?>"><?php _e( 'Post Type:' ); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id( 'custom_posttype' ); ?>" name="<?php echo $this->get_field_name( 'custom_posttype' ); ?>" type="text" value="<?php echo esc_attr( $custom_posttype ); ?>">
        </p>
        
    <?php
    }

    // Сохранение и обновление частей виджета
	public function update( $new_instance, $old_instance ) {
		$instance = $old_instance;
        $instance['custom_placeholder'] = ( ! empty( $new_instance['custom_placeholder'] ) ) ? strip_tags( $new_instance['custom_placeholder'] ) : '';
		$instance['custom_posttype'] = ( ! empty( $new_instance['custom_posttype'] ) ) ? strip_tags( $new_instance['custom_posttype'] ) : '';
		
		return $instance;
	}
}