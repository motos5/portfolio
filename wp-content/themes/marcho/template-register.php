<?php
/*
Template Name: Register Page
Template Post Type: post, page, product
*/
get_header(); ?>

<main class="main">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<?php 
		get_template_part('template-parts/content','top');
		get_template_part('template-parts/content','modal-register');
	?>
	<?php endwhile; else: ?>
		<p><?php echo esc_html__('Content not found.', 'wawe_setup'); ?></p>
	<?php endif; ?>
</main>

<?php get_footer();