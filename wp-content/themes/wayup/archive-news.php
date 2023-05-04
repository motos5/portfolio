<?php get_header(); ?>

<?php
$count = 5;

$news = new WP_Query( [
	'posts_per_page' => $count,
	'post_type'      => 'news',
] );

if ( $news->have_posts() ) : while ( $news->have_posts() ) : $news->the_post(); ?>
   <!-- Здесь находится HTML разметка самого поста -->
<?php endwhile; wp_reset_postdata(); else: ?>
	<p><?php echo esc_html__('Content not found.', 'wayup'); ?></p>
<?php endif; ?>

<?php get_footer();