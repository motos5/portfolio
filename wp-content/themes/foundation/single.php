<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Elementor
 */

get_header();
?>

	<main id="primary" class="site-main">

		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<?php the_content(); ?>
		<?php endwhile; else: ?>
			<p><?php esc_html__('Not found...', 'elementor'); ?></p>
		<?php endif; ?>

	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
