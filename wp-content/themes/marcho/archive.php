<?php
get_header();
?>

<main class="main">
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	
		<!-- <h1>Test Archive</h1> -->

	<?php endwhile; else: ?>
		<p><?php echo esc_html__('Content not found.', 'wawe_setup'); ?></p>
	<?php endif; ?>
</main>


<?php
get_footer();