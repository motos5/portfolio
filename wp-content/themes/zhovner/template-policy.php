<?php
/*
Template Name: Policy
Template Post Type: post, page, product
*/

// (Global Settings)
$policy_background = get_field('policy_background', 'option');

$style_policy = '';
if($policy_background) {
	$style_policy = 'style="background-image: url(' . esc_attr($policy_background) . ');"';
} else {
	$style_policy = 'style="background-image: url(' . get_template_directory_uri() . '/assets/img/background.jpg);"';
}

get_header(); ?>


<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
 
<!-- Privacy Policy Text -->
<div class="policy" <?php echo $style_policy; ?>>
	<div class="container">
		<div class="row">
			<h2><?php the_title(); ?></h2>
			<?php the_content(); ?>
		</div>
	</div>
</div>

<?php endwhile; else: ?>
	<p><?php echo esc_html__('Content not found.', 'zhovner'); ?></p>
<?php endif; ?>


<?php get_footer();