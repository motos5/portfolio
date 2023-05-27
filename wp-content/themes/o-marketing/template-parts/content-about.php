<?php
	$about_title = get_field('about_title', 'option');
	$about_text = get_field('about_text', 'option');
?>
<section class="about" id="about">
    <div class="container">
        <div class="about__inner">
            <?php if($about_title) { ?>
                <h2 class="title about__title"><?php printf(esc_html__('%1$s', 'o-marketing'), $about_title); ?></h2>
            <?php } ?>
            <div class="about__text">
                <?php if($about_text) { ?>
                    <?php printf(esc_html__('%1$s', 'o-marketing'), $about_text); ?>
                <?php } ?>
            </div>
        </div>
    </div>
</section>