<?php
class Wayup_Widget_About extends WP_Widget {
    // Основная инормация о виджете и его название с классом
    public function __construct() {
        $widget_options = array(
            'classname' => 'wayup_widget_about',
            'description' => esc_html__('Info about company JC', 'wayup'),
        );

        parent::__construct( 'wayup_widget_about', esc_html__('Wayup | About', 'wayup'), $widget_options );

    }

    // Отображение виджета на сайте
    public function widget( $args, $instance ) {
        // Задаваемые переменные
        $title = apply_filters( 'widget_title', $instance['title'] );
        $sub_title = $instance['sub_title'];
        $link = $instance['link'];
        $img_link = $instance['img_link'];
        
        // Код вывода на сайте
        echo $args['before_widget'];
        
        ?>
        
        <div class="banner" style="background: url(<?php echo esc_url($img_link); ?>) no-repeat center top/ cover;">
            <?php if ( ! empty( $title ) ) { ?>
                <h4 class="banner__title">
                    <?php printf(esc_html__('%1$s', 'wayup'), $title); ?>
                </h4>
            <?php } ?>
            <?php if ( ! empty( $sub_title ) ) { ?>
                <p class="banner__text">
                    <?php printf(esc_html__('%1$s', 'wayup'), $sub_title); ?>
                </p>
            <?php } ?>
            <?php if ( ! empty( $link ) ) { ?>
                <a class="banner__btn btn" href="<?php echo esc_url($link); ?>" target="_blank"><?php echo esc_html__('More', 'wayup') ?></a>
            <?php } ?>
        </div>
            
        <?php echo $args['after_widget'];
    }

    // Отображение виджета в админке
	public function form( $instance ) {
        // Задаваемые переменные
        $title = @ $instance['title'] ?: esc_html('', 'wayup');
        $sub_title = @ $instance['sub_title'] ?: esc_html('', 'wayup');
        $link = @ $instance['link'] ?: esc_html('', 'wayup');
        $img_link = @ $instance['img_link'] ?: esc_html('', 'wayup');
        
        ?>

        <p>
            <label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>">
        </p>
        <p>
            <label for="<?php echo $this->get_field_id( 'sub_title' ); ?>"><?php _e( 'Sub Title:' ); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id( 'sub_title' ); ?>" name="<?php echo $this->get_field_name( 'sub_title' ); ?>" type="text" value="<?php echo esc_attr( $sub_title ); ?>">
        </p>
        <p>
            <label for="<?php echo $this->get_field_id( 'link' ); ?>"><?php _e( 'Link:' ); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id( 'link' ); ?>" name="<?php echo $this->get_field_name( 'link' ); ?>" type="text" value="<?php echo esc_attr( $link ); ?>">
        </p>
        <p>
            <label for="<?php echo $this->get_field_id( 'img_link' ); ?>"><?php _e( 'Image Link:' ); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id( 'img_link' ); ?>" name="<?php echo $this->get_field_name( 'img_link' ); ?>" type="text" value="<?php echo esc_attr( $img_link ); ?>">
        </p>
        
        <?php
    }

    // Сохранение и обновление частей виджета
	public function update( $new_instance, $old_instance ) {
		$instance = $old_instance;
		$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
		$instance['sub_title'] = ( ! empty( $new_instance['sub_title'] ) ) ? strip_tags( $new_instance['sub_title'] ) : '';
		$instance['link'] = ( ! empty( $new_instance['link'] ) ) ? strip_tags( $new_instance['link'] ) : '';
		$instance['img_link'] = ( ! empty( $new_instance['img_link'] ) ) ? strip_tags( $new_instance['img_link'] ) : '';

		return $instance;
	}
}