<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<?php 
	get_template_part('template-parts/content','top-slider'); ?>
	<section class="blog">
		<div class="container">
			<h2 class="blog__title">Aktuelle Beiträge</h2>
			<div class="blog__inner">
				
				<?php
					$count = 6;

					$blog = new WP_Query( [
						'posts_per_page' => $count,
						'post_type'      => 'post',
					] );
				?>

				<?php if ( $blog->have_posts() ) : while ( $blog->have_posts() ) : $blog->the_post(); ?>
					<?php get_template_part('template-parts/content','blog-item'); ?>
				<?php endwhile; wp_reset_postdata(); else: ?>
					<p><?php echo esc_html__('Posts not found.', 'elvinci'); ?></p>
				<?php endif; ?>

			</div>
		</div>
	</section>
<?php endwhile; else: ?>
	<p><?php echo esc_html__('Content not found.', 'elvinci'); ?></p>
<?php endif; ?>


<?php get_footer();
