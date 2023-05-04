<?php
// Group Header Phones (Global Settings)
$heeder_phones = get_field('heeder_phones', 'option');
$phone_label = $heeder_phones['phone_label'];
$phone = $heeder_phones['phone'];

$header_background = get_field('header_background', 'option');

$header_video = get_field('header_video', 'option');
$link = $header_video['link'];
$time = $header_video['time'];
$description = $header_video['description'];

?>


<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<?php wp_head(); ?>

	<!-- Enqueue SVG -->
	<div class="svg-placeholder" style="display: none;"></div>
	<script>document.querySelector('.svg-placeholder').innerHTML = SVG_SPRITE;</script>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<?php
	$class_header = '';
	$style_for_header = '';

	if(is_page_template('default')) {
		$class_header = 'header-home';
		$style_for_header = '';
		if($header_background) {
			$style_for_header = 'style="background: #fff url(' . esc_attr($header_background) . ') no-repeat center top/ cover;"';
		} else {
			$style_for_header = 'style="background: #fff url(' . get_template_directory_uri() . '/assets/img/bg.jpg) no-repeat center top/ cover;"';
		}
	} else {
		$class_header = 'header-inner';
		$style_for_header = '';
	}
?>

<!-- Header -->
<header class="header <?php echo esc_attr($class_header); ?>" <?php echo $style_for_header; ?>>

	<div class="heading">
		<ul class="social">

			<?php
				if ( have_rows('socials', 'option') ) {
				while ( have_rows('socials', 'option') ) { the_row();
					
					$icon_social = '';
					if(get_sub_field('header') == 'Fb') {
						$icon_social = '<svg  width="21" height="18">
											<use xlink:href="#facebook"/>
										</svg>';
					} else if(get_sub_field('header') == 'In') {
						$icon_social = '<svg  width="21" height="18">
											<use xlink:href="#instagram"/>
										</svg>';
					} else if(get_sub_field('header') == 'Tw') {
						$icon_social = '<svg  width="21" height="18">
											<use xlink:href="#twitter"/>
										</svg>';
					}
					?>
						<li class="social__item">
							<span><?php echo $icon_social; ?></span>
							<a class="social__icon " href="<?php the_sub_field('link'); ?>" target="_blank">
								<?php echo $icon_social; ?>
							</a>
						</li>
				
				<?php }
				}
			?>

			
		</ul>
		<div class="heading__block">
			<a href="cart.html" class="heading__bag">
				<svg width="17" height="20">
					<use xlink:href="#bag"/>
				</svg>
			</a>
			<div class="language">
				<ul>
					<li class="lang-item active">
						<a href="#">En</a>
					</li>
					<li class="lang-item">
						<a href="#">Uk</a>
					</li>
				</ul>
			</div>
		</div>
		<div class="control">
			<a href="#enter" class="control__enter popup-link-1">
				<svg class="control__icon" width="19" height="17">
					<use xlink:href="#login"/>
				</svg>
				<?php echo esc_html__('Log in', 'wayup') ?>
			</a>
			<a style="display: none;" href="cabinet.html" class="control__enter control__enter_cab">
				<svg class="control__icon" width="16" height="16">
					<use xlink:href="#user"/>
				</svg>
				<?php echo esc_html__('Personal Area', 'wayup') ?>
			</a>
			<a href="#reg" class="control__reg noise popup-link-2"><?php echo esc_html__('Register', 'wayup') ?></a>
		</div>
	</div>

	<div class="navigation">
		<div class="logo noise">
			<p class="logo__icon"><?php bloginfo('name'); ?></p>
			<p class="logo__desc"><?php bloginfo('description'); ?></p>
		</div>

		<div class="navigation__wrap">
			<?php if($phone) { ?>
				<a href="#call" class="call popup-link-1">
					<div class="call__icon">
						<svg width="22" height="22">
							<use xlink:href="#phone-solid"/>
						</svg>
					</div>
					<div class="call__block">
						<?php if($phone_label) { ?>
							<p class="call__text"><?php printf(esc_html__('%1$s', 'wayup'), $phone_label); ?></p>
						<?php } ?>
						<p class="call__number"><?php printf(esc_html__('%1$s', 'wayup'), $phone); ?></p>
					</div>
				</a>
			<?php } ?>
			<!-- Main menu -->
			<nav id="nav-wrap" class="menu">
				
				<a class="mobile-btn" href="#nav-wrap" title="<?php echo esc_attr__('Show navigation', 'wayup'); ?>"><?php echo esc_html__('Show navigation', 'wayup'); ?></a>
				<a class="mobile-btn" href="#" title="<?php echo esc_attr__('Hide navigation', 'wayup'); ?>"><?php echo esc_html__('Hide navigation', 'wayup'); ?></a>

				<?php
					wp_nav_menu( [
						'theme_location'  => 'menu-header',
						'container'       => '',
						'container_class' => '',
						'menu_class'      => 'menu__list',
						'menu_id'         => 'nav',
						'echo'            => true,
						'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
					] );
				?>

			</nav><!-- End main menu -->
			
			<div class="widget widget_search">
				<?php echo get_search_form(); ?>
				
			</div>
		</div>

	</div>

	<?php if( is_page_template('default') ) { ?>
	<div class="offer">
		<div class="wrapper">
			<div class="offer__slider">
			<?php
				if ( have_rows('header_slider', 'option') ) {
				while ( have_rows('header_slider', 'option') ) { the_row(); ?>	
					<div class="offer__slide">
						<p class="offer__text"><?php the_sub_field('text'); ?></p>
						<h1 class="offer__title"><?php the_sub_field('title'); ?></h1>
						<p class="offer__descr"><?php the_sub_field('description'); ?></p>
						<a href=contacts.html#callback" class="offer__btn btn popup-link"><?php echo esc_html__('Free consultation', 'wayup'); ?></a>
					</div>
				<?php }
				}
			?>
			</div>

			<?php if($link) { ?>
				<a class="offer__video popup-with-zoom-anim popup-youtube" href="<?php echo esc_url($link); ?>" rel="nofollow" >
					<?php if($time) { ?>
						<p class="offer__time"><?php echo esc_html($time); ?></p>
					<?php } ?>
					<div class="offer__play"></div>
					<?php if($description) { ?>
						<p class="offer__watch"><?php printf(esc_html__('%1$s', 'wayup'), $description); ?></p>
					<?php } ?>
				</a>
			<?php } ?>
		</div>
	</div>
	<?php } else { ?>
	<div class="caption">
		<div class="wrapper">
			<h1 class="caption__title"><?php wp_title(''); ?></h1>
			<?php echo wayup_breadcrumbs(); ?>
		</div>
	</div>
	<?php } ?>

</header><!-- End header -->



	
