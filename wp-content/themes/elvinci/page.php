<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<?php 
	get_template_part('template-parts/content','top-slider');
	// get_template_part('template-parts/content','blog');

?>
<?php endwhile; else: ?>
	<p><?php echo esc_html__('Content not found.', 'wawe_setup'); ?></p>
<?php endif; ?>



<?php get_footer();
