<?php get_header();
// (Block Settings)
$header_bg = get_field('header_bg', 'option');

$style_header = '';
if($header_bg) {
	$style_header = 'style="background-image: url(' . esc_attr($header_bg) . ');"';
} else {
	$style_header = 'style="background-image: url(' . get_template_directory_uri() . '/assets/img/header.png);"';
}

$home_catalog = get_field('home_catalog', 'option');
$catalog_title = $home_catalog['catalog_title'];
$catalog_items = $home_catalog['catalog_items'];
$order_title = $home_catalog['order_title'];
$order_items = $home_catalog['order_items'];


$home_about_bg = get_field('home_about_bg', 'option');

$style_home_about = '';
if($home_about_bg) {
	$style_home_about = 'style="background-image: url(' . esc_attr($home_about_bg) . ');"';
} else {
	$style_home_about = 'style="background-image: url(' . get_template_directory_uri() . '/assets/img/bg-about.jpg);"';
}

$home_about_title = get_field('home_about_title', 'option');
$home_about_text = get_field('home_about_text', 'option');


$popular_goods_title = get_field('popular_goods_title', 'option');


$home_contact_form_bg = get_field('home_contact_form_bg', 'option');

$style_home_contact = '';
if($home_contact_form_bg) {
	$style_home_contact = 'style="background-image: url(' . esc_attr($home_contact_form_bg) . ');"';
} else {
	$style_home_contact = 'style="background-image: url(' . get_template_directory_uri() . '/assets/img/bg-contacts.png);"';
}

$home_contact_form_title = get_field('home_contact_form_title', 'option');
$home_contact_form_text = get_field('home_contact_form_text', 'option');
$home_contact_form_shortcode = get_field('home_contact_form_shortcode', 'option');
?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<!-- Шапка -->
<div class="header" <?php echo $style_header; ?>>
	<div class="container">
		<div class="row">
			<div class="col-6 col-lg-12">
				<div class="header-inner">
					<div class="header-catalog">
						<?php if($catalog_title) { ?>
							<h2><?php printf(esc_html__('%1$s', 'zhovner'), $catalog_title); ?></h2>
						<?php } ?>
						<div class="doors">
							<?php
							foreach($catalog_items as $item) {
								$image_url = $item['image'];
								$text = $item['text'];
								?>
								<div class="door">
									<div class="name" style="background-image: url(<?php echo esc_attr($image_url); ?>); background-size: cover; background-repeat: no-repeat;">
										<span><?php printf(esc_html__('%1$s', 'zhovner'), $text); ?></span>
									</div>
								</div>
							<?php } ?>
						</div>
						<a class="btn" href="<?php echo esc_url(home_url("/").'/category/doors/'); ?>"><?php echo esc_html__('Look', 'zhovner'); ?></a>
					</div>
					<div class="header-order">
						<?php if($order_title) { ?>
							<h2><?php printf(esc_html__('%1$s', 'zhovner'), $order_title); ?></h2>
						<?php } ?>
						<div class="doors">
						<?php
							foreach($order_items as $item) {
								$image_url = $item['image'];
								$text = $item['text'];
								?>
								<div class="door">
									<div class="name" style="background-image: url(<?php echo esc_attr($image_url); ?>); background-size: cover; background-repeat: no-repeat;">
										<span><?php printf(esc_html__('%1$s', 'zhovner'), $text); ?></span>
									</div>
								</div>
							<?php } ?>
						</div>
						<a class="btn" href="<?php echo esc_url(home_url("/").'/order/'); ?>"><?php echo esc_html__('Look', 'zhovner'); ?></a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php 
	get_template_part('template-parts/advantages');
?>


<!-- О нас -->
<div class="about" <?php echo $style_home_about; ?>>
	<div class="container">
		<div class="row about-inner">
			<div class="col-6 col-lg-12">
				<h2><?php printf(esc_html__('%1$s', 'zhovner'), $home_about_title); ?></h2>
				<?php printf(esc_html__('%1$s', 'zhovner'), $home_about_text); ?>
			</div>
			<div class="col-6 col-lg-12 text-center">
				<a href="<?php echo esc_url(home_url("/").'/category/doors/'); ?>" class="btn"><?php echo esc_html__('Go to catalog', 'zhovner'); ?></a>
			</div>
		</div>
	</div>
</div>

<!-- Популярные товары -->
<div class="popular" style="background-image: url(img/background.jpg)">
	<div class="container">
		<div class="row popular-title">
			<h2><?php printf(esc_html__('%1$s', 'zhovner'), $popular_goods_title); ?></h2>
		</div>
		<?php
			$зщзгдфк_doors = new WP_Query( [
				'post_type' => 'post',
				'posts_per_page' => 8,
				'category_name' => 'popular',
				'orderby' => 'title',
				'order' => 'DESC',
			] );
		?>
		<div class="row popular-goods">
			<?php if ( $зщзгдфк_doors->have_posts() ) : while ( $зщзгдфк_doors->have_posts() ) : $зщзгдфк_doors->the_post(); ?>
				<div class="col-3 col-lg-6 col-sm-12 product">
					<?php the_post_thumbnail('full'); ?>
					<h3><?php echo esc_html__(get_the_title()); ?></h3>
					<div><?php echo esc_html__(get_the_excerpt()); ?> &#8372;</div>
					<a href="<?php echo esc_url(get_the_permalink()); ?>" class="btn"><?php echo esc_html__('More', 'zhovner'); ?></a>
				</div>
			<?php endwhile; wp_reset_postdata(); else: ?>
				<p><?php echo esc_html__('Content not found.', 'zhovner'); ?></p>
			<?php endif; ?>
		</div>
		<div class="row">
			<div class="col-12 text-center">
				<a href="<?php echo esc_url(home_url("/").'/category/doors/'); ?>" class="btn"><?php echo esc_html__('Go to catalog', 'zhovner'); ?></a>
			</div>
		</div>
	</div>
</div>

<!-- Форма обратной связи -->
<div class="contacts" <?php echo $style_home_contact; ?>>
	<div class="container">
		<div class="row">
			<div class="col-4 col-lg-12 contacts-item">
				<h3><?php printf(esc_html__('%1$s', 'zhovner'), $home_contact_form_title); ?></h3>
				<p><?php printf(esc_html__('%1$s', 'zhovner'), $home_contact_form_title); ?></p>
				<?php echo do_shortcode($home_contact_form_shortcode); ?>
				<!-- <form action="">
					<input type="text" placeholder="Имя">
					<input type="text" placeholder="Телефон">
					<input type="text" placeholder="Когда позвонить?">
					<button class="btn">Заказать звонок</button>
				</form> -->
			</div>
			<?php
				if ( have_rows('home_contact_form_item', 'option') ) {
				while ( have_rows('home_contact_form_item', 'option') ) { the_row();
					$item_icon = get_sub_field('icon');
					$item_icon_alt = $item_icon['alt'];
					$item_icon_url = $item_icon['url'];
					$item_title = get_sub_field('title');
					$item_text = get_sub_field('text'); ?>
					<div class="col-4 col-lg-6 col-sm-12 text-center contacts-item">
						<img src="<?php echo esc_url($item_icon_url); ?>" alt="<?php echo esc_attr__($item_icon_alt); ?>">
						<h3><?php printf(esc_html__('%1$s', 'zhovner'), $item_title); ?></h3>
						<p><?php printf(esc_html__('%1$s', 'zhovner'), $item_text); ?></p>
					</div>
				<?php }
				}
				?>
		</div>
	</div>
</div>


	
<?php endwhile; else: ?>
	<p><?php echo esc_html__('Content not found.', 'wawe_setup'); ?></p>
<?php endif; ?>



<?php get_footer();