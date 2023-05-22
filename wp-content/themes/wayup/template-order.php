<?php
/*
Template Name: Order
Template Post Type: post, page, product
*/

// Sanitisations Tags-list
$html_tags = array(
    'a' => array(
        'href' => array(),
        'title' => array()
    ),
    'br' => array(),
    'em' => array(),
    'strong' => array(),
    'p' => array(),
    'h2' => array(),
    'img' => array(
        'alt' => array(),
        'src' => array()
    )
);

// (Global Settings)
$main_currency = get_field('main_currency', 'option');

// Data from Single Post Type - Services
$service_id = '';
if(isset($_GET["get_service_id"])) {
	$service_id = htmlspecialchars($_GET["get_service_id"]);
}
$title = '';
if(isset($_GET["get_title"])) {
	$title = htmlspecialchars($_GET["get_title"]);
}
$content = '';
if(isset($_GET["get_content"])) {
	$content = wp_kses ( $_GET["get_content"], $html_tags);
}
$price = '0';
if(isset($_GET["get_price"])) {
	$price = htmlspecialchars($_GET["get_price"]);
}




get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

	<!-- Content -->
    <section class="inner order-page">
        <div class="wrapper">
            <div class="inner__content">

                <h2 class="inner__title inner-title"><?php the_title(); ?>: <?php echo esc_html($title); ?></h2>
                <div class="inner__img blue-noise">
                    <?php
                        // Get Image from Single Post Type Services
                        $image_post_services = wayup_get_attachment(get_post_thumbnail_id($service_id));
                    ?>
                    
                    <?php echo get_the_post_thumbnail($service_id, 'single-services'); ?>
                    
                </div>
                <div class="inner__block">
                    <?php if($title || $content) { ?>
                        <div class="inner__text">
                            <h5 class="inner__top"><?php echo esc_html($title); ?></h5>
                            
                            <?php echo $content; ?>
                            <span class="inner__price"><?php echo esc_html($main_currency); ?><?php echo esc_html($price); ?></span>
                        </div>
                    <?php } ?>
                    <form action="<?php echo admin_url('admin-ajax.php?action=order'); ?>" class="inner__form log order-form" id="popupOrder">
                        <p class="log__title"><?php echo esc_html__('Checkout', 'wayup'); ?></p>
                        <!-- Field for Subject Message -->
                        <input type="hidden" name="subject" value="<?php echo esc_html($title); ?>" class="log__input">
                        <div class="log__group">
                            <label><?php echo esc_html__('Name', 'wayup'); ?></label>
                            <input type="text" name="name" class="log__input">
                        </div>
                        <div class="log__group">
                            <label><?php echo esc_html__('Phone', 'wayup'); ?></label>
                            <input type="tel" name="tel" class="log__input">
                        </div>
                        <div class="log__group">
                            <label><?php echo esc_html__('Email', 'wayup'); ?></label>
                            <input type="email" name="email" class="log__input">
                        </div>
                        <p class="log__line"><span>*</span><?php echo esc_html__('Mandatory fields', 'wayup'); ?></p>
                        <div class="log__btn">
                            <input id="order" type="submit" data-submit value="<?php echo esc_attr__('Order', 'wayup'); ?>" class="btn"/>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </section><!-- End content -->

<?php endwhile; else: ?>
	<p><?php echo esc_html__('Content not found.', 'wawe_setup'); ?></p>
<?php endif; ?>



<?php get_footer();