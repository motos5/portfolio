<?php
// (Catalog Settings)
$produuct_gallery = get_field('produuct_gallery');

// Group  (Product Availability)
$product_availability = get_field('product_availability');
$choice = $product_availability['choice'];
$in_stock = $product_availability['in_stock'];
$out_of_stock = $product_availability['out_of_stock'];

$availability = '';
if($choice) {
    $availability = $in_stock;
} else {
    $availability = $out_of_stock;
}



get_header();
?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<div id="main">
        <!-- Страница одной двери -->
        <div class="door-template">
            <div class="container">
                <div class="row">
                    <div class="col-6 col-lg-12">
                        <?php if($produuct_gallery) { ?>
                            <div class="door-gallery">
                                
                                <?php
                                foreach($produuct_gallery as $image) { ?>
                                    <a href="<?php echo esc_url($image['url']); ?>" data-caption="<?php echo esc_attr__($image['alt'], 'zhovner'); ?>">
                                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr__($image['alt'], 'zhovner'); ?>">
                                    </a>
                                <?php } ?>
                                
                            </div>
                        <?php } ?>
                    </div>
                    <div class="col-6 col-lg-12 door-description">
                        <h2><?php echo esc_html__(get_the_title()); ?> <span><?php printf(esc_html__('%1$s', 'zhovner'), $availability); ?></span></h2>
                        
                        <?php the_content(); ?>
                        <h3><?php echo esc_html__(get_the_excerpt()); ?> &#8372;</h3>

                        <!-- Product Form AJAX -->
                        <form action="<?php echo admin_url('admin-ajax.php?action=order'); ?>" method="POST" id="contact-form">
                            <input type="hidden" name="product" value="<?php echo esc_html__(get_the_title()); ?>"><br>
                            <input type="text" name="name" placeholder="<?php echo esc_attr__('Name', 'zhovner'); ?>" autofocus required><br>
                            <input type="text" name="phone" placeholder="<?php echo esc_attr__('Phone', 'zhovner'); ?>" required pattern="[+]{1}[0-9]{12}"><br>
                            <textarea name="message" placeholder="<?php echo esc_attr__('Message', 'zhovner'); ?>"></textarea><br>
                            <?php
                            $disabled = '';
                            if($availability == $out_of_stock) {
                                $disabled = 'disabled';
                            } else {
                                $disabled = '';
                            }
                            ?>
                            <button class="btn" type="submit" rel="reg_form" <?php echo esc_attr($disabled); ?>><?php echo esc_html__('Order measurement', 'zhovner'); ?></button>
                            <div id="response"></div>
                        </form>
                        <!-- End Product Form AJAX -->

                        <table>
                            <caption><?php echo esc_html__('Features', 'zhovner'); ?></caption>
                            <?php
                            if ( have_rows('product_features') ) {
                            while ( have_rows('product_features') ) { the_row();
                                $feature_key = get_sub_field('key');
                                $feature_value = get_sub_field('value');
                            ?>
                                <tr>
                                    <td><?php printf(esc_html__('%1$s', 'zhovner'), $feature_key); ?></td>
                                    <td><?php printf(esc_html__('%1$s', 'zhovner'), $feature_value); ?></td>
                                </tr>
                            <?php }
                            }
                        ?>

                            
                        </table>
                        <a class="btn" href="<?php echo esc_url(home_url("/").'/information/'); ?>"><?php echo esc_html__('Helpful information', 'zhovner'); ?></a>
                    </div>
                </div>
            </div>
        </div>
        </div>
    <?php endwhile;
else : ?>
    <p><?php echo esc_html__('Content not found.', 'zhovner'); ?></p>
<?php endif; ?>

<?php get_footer();
