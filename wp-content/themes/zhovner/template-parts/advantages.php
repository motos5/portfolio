<?php
// (Blocks Settings)
$advantages_title = get_field('advantages_title', 'option');

$top_background = get_field('top_background', 'option');

$style_advantages_top = '';
if($top_background) {
	$style_advantages_top = 'style="background-image: url(' . esc_attr($top_background) . '); background-repeat: no-repeat; background-size: cover;"';
} else {
	$style_advantages_top = 'style="background-image: url(' . get_template_directory_uri() . '/assets/img/bg-advantages.png); background-repeat: no-repeat; background-size: cover;"';
}


$bottom_background = get_field('bottom_background', 'option');

$style_advantages_bottom = '';
if($bottom_background) {
	$style_advantages_bottom = 'style="background-image: url(' . esc_attr($bottom_background) . '); background-repeat: no-repeat; background-size: cover;"';
} else {
	$style_advantages_bottom = 'style="background-image: url(' . get_template_directory_uri() . '/assets/img/background.jpg); background-repeat: no-repeat; background-size: cover;"';
}

?>

<!-- Преимущества  -->
<?php if($advantages_title) { ?>
    <div class="advantages" <?php echo $style_advantages_top; ?>>
        <div class="container">
            <h2><?php printf(esc_html__('%1$s', 'wayup'), $advantages_title); ?></h2>
        </div>
    </div>
<?php } ?>

<?php
$advantages = new WP_Query( [
    'post_type' => 'post',
	'posts_per_page' => 6,
    'category_name' => 'advantages',
    'orderby' => 'title',
    'order' => 'DESC'
] );
?>

<div class="advantages-cards" <?php echo $style_advantages_bottom; ?>>
	<div class="container">
		<div class="row advantages-cards-inner">
            <?php if ( $advantages->have_posts() ) : while ( $advantages->have_posts() ) : $advantages->the_post(); ?>
                <div class="col-4 col-lg-6 col-sm-12 advantages-card">
                    <?php
                    if( has_post_thumbnail() ) {
                        the_post_thumbnail('zhovner_advantages');
                        }
                    else {
                        echo '<img src="'.get_template_directory_uri().'/assets/img/like.png" />';
                        }
                    ?>
                    <h3><?php echo esc_html__(get_the_title()); ?></h3>
                    <?php echo get_the_content(); ?>
                </div>
            <?php endwhile; wp_reset_postdata(); else: ?>
                <p><?php echo esc_html__('Content not found.', 'zhovner'); ?></p>
            <?php endif; ?>
		</div>
	</div>
</div>