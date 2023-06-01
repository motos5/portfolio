<?php
// About Team
$team_subtitle = get_field('team_subtitle');
$team_title = get_field('team_title');


?>

<!-- Team -->
<section class="team">
	<div class="wrapper">
		<?php if($team_subtitle || $team_title) { ?>
			<h2 class="team__title secondary-title"><span><?php printf(esc_html__('%1$s', 'wayup'), $team_subtitle); ?></span><br><?php printf(esc_html__('%1$s', 'wayup'), $team_title); ?></h2>
		<?php } ?>
	</div>
	<div class="wrapper sl">
		<div class="team__slider">

			<?php 
				if ( have_rows('about_team') ) {
				while ( have_rows('about_team') ) { the_row();
				$photo = get_sub_field('photo'); // Array
				$name = get_sub_field('name');
				$position = get_sub_field('position');
				$description = get_sub_field('description');
				$socials = get_sub_field('socials'); // Array
				?>
					<?php if($photo) { ?>
					<!-- One slide -->
					<div class="team__slide">
						<div class="team__item">
							<?php if($photo || $name || $position) { ?>
							<div class="team__img">
								<img src="<?php echo esc_url($photo['url']); ?>" alt="<?php printf(esc_attr__('%1$s', 'wayup'), $name); ?>">
								<p class="team__pers"><?php printf(esc_attr__('%1$s', 'wayup'), $name); ?></p>
								<p class="team__position"><?php printf(esc_attr__('%1$s', 'wayup'), $position); ?></p>
							</div>
							<?php } ?>
							<div class="description">
								<?php if($description) { ?>
									<?php printf(esc_attr__('%1$s', 'wayup'), $description); ?>
								<?php } ?>
								<ul class="social">
									<?php if($socials['facebook']) { ?>
										<li class="social__item">
											<span>Fb</span>
											<a class="social__icon social__icon_fb" href="<?php echo esc_url($socials['facebook']); ?>" target="_blank">
												<svg  width="14" height="17">
													<use xlink:href="#facebook"/>
												</svg>
											</a>
										</li>
									<?php } ?>
									<?php if($socials['twitter']) { ?>
										<li class="social__item">
											<span>Tw</span>
											<a class="social__icon social__icon_tw" href="<?php echo esc_url($socials['twitter']); ?>" target="_blank">
												<svg  width="18" height="15">
													<use xlink:href="#twitter"/>
												</svg>
											</a>
										</li>
									<?php } ?>
									<?php if($socials['instagram']) { ?>
										<li class="social__item">
											<a class="social__icon social__icon_inst" href="<?php echo esc_url($socials['instagram']); ?>" target="_blank">
												<svg width="16" height="16">
													<use xlink:href="#instagram"/>
												</svg>
											</a>
										</li>
									<?php } ?>
								</ul>
							</div>
						</div>
					</div><!-- End one slide -->
				<?php } }
				} else { ?>
					<p><?php echo esc_html__('Content not found.', 'wayup'); ?></p>
				<?php }
			?>
	</div>
</section>
<!-- End team -->