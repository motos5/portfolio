<?php get_header(); ?>

<?php
$count = 5;

$services = new WP_Query( [
	'posts_per_page' => $count,
	'post_type'      => 'services',
] );

if ( $services->have_posts() ) : while ( $services->have_posts() ) : $services->the_post(); ?>
   <!-- Здесь находится HTML разметка самого поста -->
<?php endwhile; wp_reset_postdata(); else: ?>
	<p><?php echo esc_html__('Content not found.', 'wayup'); ?></p>
<?php endif; ?>

<?php get_footer();