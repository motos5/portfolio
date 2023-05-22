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
        echo $args['before_widget'];
    ?>
        
        <form class="searchform" role="search" method="get" id="searchform" action="<?php echo home_url( '/' ); ?>">

            <input class="text-search" type="search" name="s" value="<?php the_search_query(); ?>" placeholder="<?php echo esc_attr__('Search', 'wayup'); ?>">
            <input type="submit" class="submit-search" value="" />

        </form>
            
        <?php echo $args['after_widget'];
    }

    // Отображение виджета в админке
	public function form( $instance ) { ?>
        
        <?php
    }

    // Сохранение и обновление частей виджета
	public function update( $new_instance, $old_instance ) {
		$instance = $old_instance;
		
		return $instance;
	}
}