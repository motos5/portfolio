<?php
	$magic_title = get_field('magic_title', 'option');
	$magic_text = get_field('magic_text', 'option');
?>
<section class="magic" style="background: url('<?php the_field('magic_bg', 'option'); ?>'); background-repeat: no-repeat; background-position: left 80%; background-size: 50%; background-color: #F6F8FA;">
    <div class="container">
        <div class="magic__inner">
            <?php if($magic_title) { ?>
                <h2 class="title magic__title"><?php printf(esc_html__('%1$s', 'o-marketing'), $magic_title); ?></h2>
            <?php } ?>
            <?php if($magic_text) { ?>
                <div class="magic__text">
                <?php printf(esc_html__('%1$s', 'o-marketing'), $magic_text); ?>
                </div>
            <?php } ?>
        </div>
    </div>
</section>