<?php get_header(); ?>

<?php
$count = 5;

$cases = new WP_Query( [
	'posts_per_page' => $count,
	'post_type'      => 'cases',
] ); ?>

<div class="cases">
	<div class="wrapper">
	<h2 class="cases__title secondary-title"><span>One</span><br>cases</h2>
		<div class="cases__inner">
			<?php if ( $cases->have_posts() ) : while ( $cases->have_posts() ) : $cases->the_post(); ?>
				<div class="cases__slide">
					<div class="cases__item">
						<div class="cases__block">
							<h3 class="cases__heading"><?php the_title(); ?></h3>
							<a class="cases__link link-more" href="<?php the_permalink(); ?>">
								<?php echo esc_html__('Read more', 'wayup') ?>
								<svg width="18" height="20">
									<use xlink:href="#nav-right"/>
								</svg>
							</a>
						</div>
						<div class="cases__img">
							<?php echo get_the_post_thumbnail(get_the_ID(), 'archive-cases'); ?>
						</div>
					</div>
				</div>
			<?php endwhile; wp_reset_postdata(); else: ?>
				<p><?php echo esc_html__('Content not found.', 'wayup'); ?></p>
			<?php endif; ?>
		</div>
	</div>
</div>


<?php get_footer();