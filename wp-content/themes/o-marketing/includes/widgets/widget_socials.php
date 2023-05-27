<?php

// Добавляем Widget Socials
class O_Marketing_Widget_Socials extends WP_Widget {
    public function __construct() {
        $widget_options = array(
            'classname' => 'o_marketing_widget_socials',
            'description' => esc_html__('Widget for socials', 'o-marketing'),
        );
        parent::__construct( 'o_marketing_widget_socials', esc_html__('Widget Socials', 'o-marketing'), $widget_options );
    }

    public function widget( $args, $instance ) {
    // Params
        $link_1 = $instance['link_1'];
        $name_1 = $instance['name_1'];

        $link_2 = $instance['link_2'];
        $name_2 = $instance['name_2'];

        $link_3 = $instance['link_3'];
        $name_3 = $instance['name_3'];

        $link_4 = $instance['link_4'];
        $name_4 = $instance['name_4'];

        $link_5 = $instance['link_5'];
        $name_5 = $instance['name_5'];

        $link_6 = $instance['link_6'];
        $name_6 = $instance['name_6'];

    // Display
        echo $args['before_widget']; ?>

        <ul class="footer__social">
            
            <li class="footer__social-list">
                <a class="footer__social-link" href="<?php printf(esc_url('%1$s', 'o-marketing'), $link_1); ?>"><?php printf(esc_html__('%1$s', 'o-marketing'), $name_1); ?></a>
            </li>
            <li class="footer__social-list">
                <a class="footer__social-link" href="<?php printf(esc_url('%1$s', 'o-marketing'), $link_2); ?>"><?php printf(esc_html__('%1$s', 'o-marketing'), $name_2); ?></a>
            </li>
            <li class="footer__social-list">
                <a class="footer__social-link" href="<?php printf(esc_url('%1$s', 'o-marketing'), $link_3); ?>"><?php printf(esc_html__('%1$s', 'o-marketing'), $name_3); ?></a>
            </li>
            <li class="footer__social-list">
                <a class="footer__social-link" href="<?php printf(esc_url('%1$s', 'o-marketing'), $link_4); ?>"><?php printf(esc_html__('%1$s', 'o-marketing'), $name_4); ?></a>
            </li>
            <li class="footer__social-list">
                <a class="footer__social-link" href="<?php printf(esc_url('%1$s', 'o-marketing'), $link_5); ?>"><?php printf(esc_html__('%1$s', 'o-marketing'), $name_5); ?></a>
            </li>
            <li class="footer__social-list">
                <a class="footer__social-link" href="<?php printf(esc_url('%1$s', 'o-marketing'), $link_6); ?>"><?php printf(esc_html__('%1$s', 'o-marketing'), $name_6); ?></a>
            </li>

        </ul>
    <?php   
        echo $args['after_widget'];
    }

    public function form( $instance ) {
    // Params
        
        $link_1 = @ $instance['link_1'] ?: esc_html__('#', 'o-marketing');
        $name_1 = @ $instance['name_1'] ?: esc_html__('FACEBOOK', 'o-marketing');

        $link_2 = @ $instance['link_2'] ?: esc_html__('#', 'o-marketing');
        $name_2 = @ $instance['name_2'] ?: esc_html__('TWITTER', 'o-marketing');

        $link_3 = @ $instance['link_3'] ?: esc_html__('#', 'o-marketing');
        $name_3 = @ $instance['name_3'] ?: esc_html__('GOOGLE+', 'o-marketing');

        $link_4 = @ $instance['link_4'] ?: esc_html__('#', 'o-marketing');
        $name_4 = @ $instance['name_4'] ?: esc_html__('BEHANCE', 'o-marketing');

        $link_5 = @ $instance['link_5'] ?: esc_html__('#', 'o-marketing');
        $name_5 = @ $instance['name_5'] ?: esc_html__('DRIBBLE', 'o-marketing');

        $link_6 = @ $instance['link_6'] ?: esc_html__('#', 'o-marketing');
        $name_6 = @ $instance['name_6'] ?: esc_html__('INSTAGRAM', 'o-marketing');
        
    // Display
    ?>
        <p>
            <label for="<?php echo $this->get_field_id( 'link_1' ); ?>"><?php _e( 'Link_1:' ); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id( 'link_1' ); ?>" name="<?php echo $this->get_field_name( 'link_1' ); ?>" type="text" value="<?php echo esc_attr( $link_1 ); ?>">
        </p>
        <p>
            <label for="<?php echo $this->get_field_id( 'name_1' ); ?>"><?php _e( 'Name_1:' ); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id( 'name_1' ); ?>" name="<?php echo $this->get_field_name( 'name_1' ); ?>" type="text" value="<?php echo esc_attr( $name_1 ); ?>">
        </p>

        <p>
            <label for="<?php echo $this->get_field_id( 'link_2' ); ?>"><?php _e( 'Link_2:' ); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id( 'link_2' ); ?>" name="<?php echo $this->get_field_name( 'link_2' ); ?>" type="text" value="<?php echo esc_attr( $link_2 ); ?>">
        </p>
        <p>
            <label for="<?php echo $this->get_field_id( 'name_2' ); ?>"><?php _e( 'Name_2:' ); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id( 'name_2' ); ?>" name="<?php echo $this->get_field_name( 'name_2' ); ?>" type="text" value="<?php echo esc_attr( $name_2 ); ?>">
        </p>

        <p>
            <label for="<?php echo $this->get_field_id( 'link_3' ); ?>"><?php _e( 'Link_3:' ); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id( 'link_3' ); ?>" name="<?php echo $this->get_field_name( 'link_3' ); ?>" type="text" value="<?php echo esc_attr( $link_3 ); ?>">
        </p>
        <p>
            <label for="<?php echo $this->get_field_id( 'name_3' ); ?>"><?php _e( 'Name_3:' ); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id( 'name_3' ); ?>" name="<?php echo $this->get_field_name( 'name_3' ); ?>" type="text" value="<?php echo esc_attr( $name_3 ); ?>">
        </p>

        <p>
            <label for="<?php echo $this->get_field_id( 'link_4' ); ?>"><?php _e( 'Link_4:' ); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id( 'link_4' ); ?>" name="<?php echo $this->get_field_name( 'link_4' ); ?>" type="text" value="<?php echo esc_attr( $link_4 ); ?>">
        </p>
        <p>
            <label for="<?php echo $this->get_field_id( 'name_4' ); ?>"><?php _e( 'Name_4:' ); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id( 'name_4' ); ?>" name="<?php echo $this->get_field_name( 'name_4' ); ?>" type="text" value="<?php echo esc_attr( $name_4 ); ?>">
        </p>

        <p>
            <label for="<?php echo $this->get_field_id( 'link_5' ); ?>"><?php _e( 'Link_5:' ); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id( 'link_5' ); ?>" name="<?php echo $this->get_field_name( 'link_5' ); ?>" type="text" value="<?php echo esc_attr( $link_5 ); ?>">
        </p>
        <p>
            <label for="<?php echo $this->get_field_id( 'name_5' ); ?>"><?php _e( 'Name_5:' ); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id( 'name_5' ); ?>" name="<?php echo $this->get_field_name( 'name_5' ); ?>" type="text" value="<?php echo esc_attr( $name_5 ); ?>">
        </p>

        <p>
            <label for="<?php echo $this->get_field_id( 'link_6' ); ?>"><?php _e( 'Link_6:' ); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id( 'link_6' ); ?>" name="<?php echo $this->get_field_name( 'link_6' ); ?>" type="text" value="<?php echo esc_attr( $link_6 ); ?>">
        </p>
        <p>
            <label for="<?php echo $this->get_field_id( 'name_6' ); ?>"><?php _e( 'Name_6:' ); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id( 'name_6' ); ?>" name="<?php echo $this->get_field_name( 'name_6' ); ?>" type="text" value="<?php echo esc_attr( $name_6 ); ?>">
        </p>
        <?php
    }

    public function update( $new_instance, $old_instance ) {
		$instance = $old_instance;

		$instance['link_1'] = ( ! empty( $new_instance['link_1'] ) ) ? strip_tags( $new_instance['link_1'] ) : '';
		$instance['name_1'] = ( ! empty( $new_instance['name_1'] ) ) ? strip_tags( $new_instance['name_1'] ) : '';

        $instance['link_2'] = ( ! empty( $new_instance['link_2'] ) ) ? strip_tags( $new_instance['link_2'] ) : '';
		$instance['name_2'] = ( ! empty( $new_instance['name_2'] ) ) ? strip_tags( $new_instance['name_2'] ) : '';

        $instance['link_3'] = ( ! empty( $new_instance['link_3'] ) ) ? strip_tags( $new_instance['link_3'] ) : '';
		$instance['name_3'] = ( ! empty( $new_instance['name_3'] ) ) ? strip_tags( $new_instance['name_3'] ) : '';

        $instance['link_4'] = ( ! empty( $new_instance['link_4'] ) ) ? strip_tags( $new_instance['link_4'] ) : '';
		$instance['name_4'] = ( ! empty( $new_instance['name_4'] ) ) ? strip_tags( $new_instance['name_4'] ) : '';

        $instance['link_5'] = ( ! empty( $new_instance['link_5'] ) ) ? strip_tags( $new_instance['link_5'] ) : '';
		$instance['name_5'] = ( ! empty( $new_instance['name_5'] ) ) ? strip_tags( $new_instance['name_5'] ) : '';

        $instance['link_6'] = ( ! empty( $new_instance['link_6'] ) ) ? strip_tags( $new_instance['link_6'] ) : '';
		$instance['name_6'] = ( ! empty( $new_instance['name_6'] ) ) ? strip_tags( $new_instance['name_6'] ) : '';
		return $instance;
	}
}