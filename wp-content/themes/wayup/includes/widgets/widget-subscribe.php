<?php
class Wayup_Widget_Subscribe extends WP_Widget {
    // Основная инормация о виджете и его название с классом
    public function __construct() {
        $widget_options = array(
            'classname' => 'wayup_widget_subscribe',
            'description' => esc_html__('Widget for Subscribe Form', 'wayup'),
        );

        parent::__construct( 'wayup_widget_subscribe', esc_html__('Wayup | Subscribe', 'wayup'), $widget_options );

    }

    // Отображение виджета на сайте
    public function widget( $args, $instance ) {
        // Задаваемые переменные
        $title = apply_filters( 'widget_title', $instance['title'] );
        $shortcode = $instance['shortcode'];
        
        // Код вывода на сайте
        echo $args['before_widget'];
        ?>
        <div class="subscr">
        <?php if ( ! empty( $title ) ) { ?>
            <div class="subscr__title">
                <svg  width="19" height="19">
                    <use xlink:href="#mail"/>
                </svg>
                <?php printf(esc_html__('%1$s', 'wayup'), $title); ?>
            </div>
        <?php } ?>
        <?php echo do_shortcode($shortcode); ?>
		<!-- <form action="#" class="subscr__form log" id="popupSubscribe">
			<div class="log__group">
				<label>Имя</label>
				<input type="text" name="name_mod" class="log__input">
			</div>
			<div class="log__group">
				<label>Email</label>
				<input type="email" name="email" class="log__input">
			</div>
			<div class="log__btn">
				<input id="subscribe" type="submit" data-submit value="Подписаться" class="btn"/>
			</div>
		</form> -->
	</div>
            
        <?php echo $args['after_widget'];
    }

    // Отображение виджета в админке
	public function form( $instance ) {
        // Задаваемые переменные
        $title = @ $instance['title'] ?: esc_html('', 'wayup');
        $shortcode = @ $instance['shortcode'] ?: esc_html('', 'wayup'); ?>

        <p>
            <label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>">
        </p>
        <p>
            <label for="<?php echo $this->get_field_id( 'shortcode' ); ?>"><?php _e( 'Shortcode Form:' ); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id( 'shortcode' ); ?>" name="<?php echo $this->get_field_name( 'shortcode' ); ?>" type="text" value="<?php echo esc_attr( $shortcode ); ?>">
        </p>
        
        <?php
    }

    // Сохранение и обновление частей виджета
	public function update( $new_instance, $old_instance ) {
		$instance = $old_instance;
		$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
		$instance['shortcode'] = ( ! empty( $new_instance['shortcode'] ) ) ? strip_tags( $new_instance['shortcode'] ) : '';

		return $instance;
	}
}