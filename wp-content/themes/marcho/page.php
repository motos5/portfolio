<?php get_header(); ?>

<main class="main">
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<?php 
		get_template_part('template-parts/content','top-slider');
		get_template_part('template-parts/content','categories-info');
		get_template_part('template-parts/content','fashion-video');
		get_template_part('template-parts/content','product');
		get_template_part('template-parts/content','promo');
		get_template_part('template-parts/content','blog');
	?>
	<?php endwhile; else: ?>
		<p><?php echo esc_html__('Content not found.', 'marcho'); ?></p>
	<?php endif; ?>
</main>


<?php get_footer();
