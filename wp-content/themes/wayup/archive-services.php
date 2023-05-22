<?php
// (Global Settings)
$main_currency = get_field('main_currency', 'option');

// Group Post Types Settings (Post Types Settings)
$services = get_field('services', 'option');
$subtitle = $services['subtitle'];
$title = $services['title'];
$text = $services['text'];

get_header();
?>

   
<!-- Services -->
	<section class="inner services tabs">
		<div class="wrapper">
			<?php if($subtitle || $title) { ?>
				<h2 class="services__title secondary-title"><span><?php printf(esc_html__('%1$s', 'wayup'), $subtitle); ?></span><br><?php printf(esc_html__('%1$s', 'wayup'), $title); ?></h2>
			<?php } ?>
			
			<div class="tabs__wrap">
				<?php if($text) { ?>
					<p class="tabs__descr"><?php printf(esc_html__('%1$s', 'wayup'), $text); ?></p>
				<?php } ?>

				<!-- Cases titles -->
				<?php
					$services_types = get_terms( array(
						'taxonomy' => 'category-services',
						'hide_empty' => false,
					) );
				?>
				<ul class="tabs__caption">
					<?php
					$i = '';
					$active = '';
					foreach ($services_types as $type) {
						if($i == 0) {
							$active = 'class="active"';
						} else {
							$active = '';
						}
						$i++;
					?>
						<li <?php echo $active; ?>><?php echo $type->name; ?></li>
					<?php } ?>
				</ul>
			</div>

			<?php
				$j = 0;
				$tab_active = '';
				foreach($services_types as $category) {
					if($j == 0) {$tab_active = 'active';
				} else {
					$tab_active = '';
				}

				$services = new WP_Query( [
					'posts_per_page' => -1,
					'post_type'      => 'services',
					'tax_query' => array(
						array(
							'taxonomy' => 'category-services',
							'field'    => 'slug',
							'terms'    => $category->slug
					)),
				]);
			?>
				<!-- Cases content one-->
				<div class="tabs__content <?php echo esc_attr($tab_active); ?>">
					<ul class="services__list">

						<?php if ( $services->have_posts() ) : while ( $services->have_posts() ) : $services->the_post(); ?>
						<?php 
						// Metaboxes Services
						$services_price = get_post_meta(get_the_ID(), 'wayup_services_price', true);
						$services_bg_image = get_post_meta(get_the_ID(), 'wayup_services_bg-image', true);

						$services__item = '';
						$services__bg = '';
						if($services_bg_image) {
							$services__item = 'services__item_' . $services_bg_image;
							$services__bg = 'services__bg_' . $services_bg_image;
						} else {
							$services__item = 'services__item_stat';
							$services__bg = 'services__bg_stat';
						}

						?>
							<li class="services__item <?php echo $services__item; ?>">
								<h3 class="services__heading"><?php the_title(); ?></h3>
								<div class="services__descr"><?php the_excerpt(); ?></div>
								<p class="services__price"><?php echo esc_html($main_currency); ?><?php printf(esc_html('%1$s', 'wayup'), $services_price); ?></p>
								<a href="<?php the_permalink(); ?>" class="services__order btn"><?php echo esc_html__('More', 'wayup') ?></a>
								<div class="services__bg <?php echo $services__bg; ?>"></div>
							</li>
						<?php endwhile; wp_reset_postdata(); else: ?>
							<p><?php echo esc_html__('Content not found.', 'wayup'); ?></p>
						<?php endif; ?>
					</ul>
				</div><!-- End cases content one-->
			<?php $j++; } ?>

		</div>

	</section>
<!-- End services -->




<?php get_footer();