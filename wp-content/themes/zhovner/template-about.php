<?php
/*
Template Name: About
Template Post Type: post, page, product
*/

// (Global Settings)
$about_bg = get_field('about_bg', 'option');

$style_about = '';
if($about_bg) {
	$style_about = 'style="background-image: url(' . esc_attr($about_bg) . ');"';
} else {
	$style_about = 'style="background-image: url(' . get_template_directory_uri() . '/assets/img/background.jpg);"';
}

$technical_certificate_bg = get_field('technical_certificate_bg', 'option');

$style_technical = '';
if($technical_certificate_bg) {
	$style_technical = 'style="background-image: url(' . esc_attr($technical_certificate_bg) . ');"';
} else {
	$style_technical = 'style="background-image: url(' . get_template_directory_uri() . '/assets/img/bg-advantages.png);"';
}

$technical_certificate_title = get_field('technical_certificate_title', 'option');
$technical_certificate_text = get_field('technical_certificate_text', 'option');
$technical_certificate_file_open = get_field('technical_certificate_file_open', 'option');
$technical_certificate_file_download = get_field('technical_certificate_file_download', 'option');



get_header(); ?>


<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
 
<!-- О компании -->
<div class="about-company" <?php echo $style_about; ?>>
	<div class="container">
		<div class="row">
			<div class="col-12">
				<img src="<?php echo wp_get_attachment_image_url(get_post_thumbnail_id(get_the_ID()), 'full'); ?>" alt="<?php the_title(); ?>">
				<h2><?php the_title(); ?></h2>
				<?php the_content(); ?>
			</div>
		</div>
	</div>
</div>

<?php 
	get_template_part('template-parts/advantages');
?>


<!-- Технический паспорт -->
<div class="pasport" <?php echo $style_technical; ?>>
	<div class="container">
		<div class="row">
			<div class="col-12">
				<h2><?php printf(esc_html__('%1$s', 'wayup'), $technical_certificate_title); ?></h2>
				<p><?php printf(esc_html__('%1$s', 'wayup'), $technical_certificate_text); ?></p>
				<a href="<?php echo esc_url($technical_certificate_file_open['link']); ?>" class="btn" target="_blank"><?php echo esc_html__('Open', 'zhovner'); ?></a>
				<a href="<?php echo esc_url($technical_certificate_file_download['url']); ?>" class="btn" download=""><?php echo esc_html__('Download DOC', 'zhovner'); ?></a>
			</div>
		</div>
	</div>
</div>



<?php endwhile; else: ?>
	<p><?php echo esc_html__('Content not found.', 'wayup'); ?></p>
<?php endif; ?>


<?php get_footer();