<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<?php
	get_template_part('template-parts/content','about');
	get_template_part('template-parts/content','expertise');
	get_template_part('template-parts/content','magic');
	get_template_part('template-parts/content','portfolio');
	get_template_part('template-parts/content','slider-blog');
	get_template_part('template-parts/content','team');
	get_template_part('template-parts/content','pricing');
	get_template_part('template-parts/content','clients');
	get_template_part('template-parts/content','form');
?>
<?php endwhile; else: ?>
	<p><?php echo esc_html__('Content not found.', 'o-marketing_setup'); ?></p>
<?php endif; ?>



<?php get_footer();
