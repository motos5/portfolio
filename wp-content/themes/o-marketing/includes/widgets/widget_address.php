<?php

// Добавляем Widget Socials
class O_Marketing_Widget_Address extends WP_Widget {
    public function __construct() {
        $widget_options = array(
            'classname' => 'o_marketing_widget_address',
            'description' => esc_html__('Widget for address', 'o-marketing'),
        );
        parent::__construct( 'o_marketing_widget_address', esc_html__('Widget Address', 'o-marketing'), $widget_options );
    }

    public function widget( $args, $instance ) {
    // Params
        $address = $instance['address'];
        $phone = $instance['phone'];
        $email = $instance['email'];

    // Display
        echo $args['before_widget']; ?>

        <div class="footer__contact">
            <address class="address">
                <?php printf(esc_html__('%1$s', 'o-marketing'), $address); ?>
            </address>
            <a class="phone" href="tel:+3806765252222"><?php printf(esc_html__('%1$s', 'o-marketing'), $phone); ?></a>
            <a class="email" href="mailto:<?php printf(esc_html__('%1$s', 'o-marketing'), $email); ?>"><?php printf(esc_html__('%1$s', 'o-marketing'), $email); ?></a>
        </div>
    <?php   
        echo $args['after_widget'];
    }

    public function form( $instance ) {
    // Params
        $address = @ $instance['address'] ?: esc_html__('', 'o-marketing');
        $phone = @ $instance['phone'] ?: esc_html__('', 'o-marketing');
        $email = @ $instance['email'] ?: esc_html__('', 'o-marketing');
       
    // Display
    ?>
        <p>
            <label for="<?php echo $this->get_field_id( 'address' ); ?>"><?php _e( 'Address:' ); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id( 'address' ); ?>" name="<?php echo $this->get_field_name( 'address' ); ?>" type="text" value="<?php echo esc_attr( $address ); ?>">
        </p>
        <p>
            <label for="<?php echo $this->get_field_id( 'phone' ); ?>"><?php _e( 'Phone:' ); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id( 'phone' ); ?>" name="<?php echo $this->get_field_name( 'phone' ); ?>" type="text" value="<?php echo esc_attr( $phone ); ?>">
        </p>

        <p>
            <label for="<?php echo $this->get_field_id( 'email' ); ?>"><?php _e( 'Email:' ); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id( 'email' ); ?>" name="<?php echo $this->get_field_name( 'email' ); ?>" type="text" value="<?php echo esc_attr( $email ); ?>">
        </p>
        
        <?php
    }

    public function update( $new_instance, $old_instance ) {
		$instance = $old_instance;

		$instance['address'] = ( ! empty( $new_instance['address'] ) ) ? strip_tags( $new_instance['address'] ) : '';
		$instance['phone'] = ( ! empty( $new_instance['phone'] ) ) ? strip_tags( $new_instance['phone'] ) : '';
        $instance['email'] = ( ! empty( $new_instance['email'] ) ) ? strip_tags( $new_instance['email'] ) : '';
		
		return $instance;
	}
}