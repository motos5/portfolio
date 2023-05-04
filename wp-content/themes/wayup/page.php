<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
 
	

<?php endwhile; else: ?>
	<p><?php echo esc_html__('Content not found.', 'wayup'); ?></p>
<?php endif; ?>

<?php get_footer();
