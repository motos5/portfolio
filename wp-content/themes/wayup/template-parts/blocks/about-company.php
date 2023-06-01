<?php
// About Content
$about_subtitle = get_field('about_subtitle');
$about_title = get_field('about_title');
$about_content = get_field('about_content');
$about_image = get_field('about_image');

// About Director
$about_director_image = get_field('about_director_image');
$about_director_quote = get_field('about_director_quote');
$about_director_name = get_field('about_director_name');
$about_director_position = get_field('about_director_position');
$about_director_signature = get_field('about_director_signature');


?>

<!-- Choice -->
<section class="choice">
	<div class="wrapper">
		<div class="choice__block">
			<div class="choice__image">
                <?php if($about_image) { ?>
                    <div class="choice__pic blue-noise">
                        <img src="<?php echo esc_url($about_image['url']); ?>" alt="<?php echo esc_attr($about_image['alt']); ?>">
                    </div>
                <?php } ?>
				<div class="director">
                    <?php if($about_director_image) { ?>
                        <div class="director__img">
                            <img src="<?php echo esc_url($about_director_image['url']); ?>" alt="<?php echo esc_attr($about_director_image['alt']); ?>">
                        </div>
                    <?php } ?>
					<div class="director__text">
                        <?php if($about_director_quote) { ?>
						    <p class="director__quote"><?php printf(esc_html__('%1$s', 'wayup'), $about_director_quote); ?></p>
                        <?php } ?>
                        <?php if($about_director_name || $about_director_position) { ?>
                            <div class="director__pers">
                                <span><?php printf(esc_html__('%1$s', 'wayup'), $about_director_name); ?></span>
                                <?php printf(esc_html__('%1$s', 'wayup'), $about_director_position); ?>
                            </div>
                        <?php } ?>
					</div>
                    <?php if($about_director_signature) { ?>
                        <div class="director__sign">
                            <img src="<?php echo esc_url($about_director_signature['url']); ?>" alt="<?php echo esc_attr($about_director_signature['alt']); ?>">
                        </div>
                    <?php } ?>
				</div>
			</div>
			<div class="choice__wrap">
                <?php if($about_subtitle || $about_title) { ?>
				    <h2 class="choice__title secondary-title"><span><?php printf(esc_html__('%1$s', 'wayup'), $about_subtitle); ?></span><br><?php printf(esc_html__('%1$s', 'wayup'), $about_title); ?></h2>
                <?php } ?>
                <?php if($about_content) { ?>
                    <div class="choice__descr">
                        <?php printf(esc_html__('%1$s', 'wayup'), $about_content); ?>
                    </div>
                <?php } ?>
			</div>
		</div>
	</div>
</section><!-- End choice -->