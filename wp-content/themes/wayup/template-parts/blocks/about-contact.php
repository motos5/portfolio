<?php
// About Number
$about_contact_title = get_field('about_contact_title');

?>

<!-- Connect -->
<section class="connect">
	<div class="connect__decor"></div>
	<div class="wrapper">
		<div class="connect__wrap">
            <?php if($about_contact_title) { ?>
			    <h3 class="connect__title"><?php printf(esc_html__('%1$s', 'wayup'), $about_contact_title); ?></h3>
            <?php } ?>
			<a href="<?php echo home_url("/").'/contacts/'; ?>" class="connect__btn btn-white popup-link"><?php echo esc_html__('Connect with us', 'wayup') ?></a>
		</div>
		<div class="connect__img"></div>
	</div>
</section><!-- End connect -->