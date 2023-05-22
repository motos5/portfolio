<?php get_header(); ?>

<?php
$count = 5;

$cases = new WP_Query( [
	'posts_per_page' => $count,
	'post_type'      => 'cases',
] );

if ( $cases->have_posts() ) : while ( $cases->have_posts() ) : $cases->the_post(); ?>
   <!-- Здесь находится HTML разметка самого поста -->
<?php endwhile; wp_reset_postdata(); else: ?>
	<p><?php echo esc_html__('Content not found.', 'wayup'); ?></p>
<?php endif; ?>

<?php get_footer();