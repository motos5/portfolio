<?php
/*
Template Name: About
Template Post Type: post, page, product
*/

get_header(); ?>


<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
 
	

<?php endwhile; else: ?>
	<p><?php echo esc_html__('Content not found.', 'wawe_setup'); ?></p>
<?php endif; ?>



<?php get_footer();