<?php
// Group Header Phones (Global Settings)
$heeder_phones = get_field('heeder_phones', 'option');
$phone_label = $heeder_phones['phone_label'];
$phone = $heeder_phones['phone'];

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
		$style_for_header = 'style="background: #fff url(' . get_template_directory_uri() . '/assets/img/bg.jpg) no-repeat center top/ cover;"';
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
					<div class="call__icon btn">
						<svg width="22" height="22">
							<use xlink:href="#phone-solid"/>
						</svg>
					</div>
					<div class="call__block">
						<p class="call__text"><?php printf(esc_html__('%1$s', 'wayup'), $phone_label); ?></p>
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
				<div class="offer__slide">
					<p class="offer__text">Вы хотите изменить мир.</p>
					<h1 class="offer__title">Мы хотим вам помочь.</h1>
					<p class="offer__descr">Мы современная Юридическая фирма,<br> помогающая перспективным стартапам, фрилансерам и малому бизнесу.</p>
					<a href=contacts.html#callback" class="offer__btn btn popup-link">Бесплатная консультация</a>
				</div>
				<div class="offer__slide">
					<p class="offer__text">Вы хотите изменить мир.</p>
					<h1 class="offer__title">Мы хотим вам помочь.</h1>
					<p class="offer__descr">Юристы JC проведут вас и вашу компанию через многочисленные юридические проблемы, стоящие перед компаниями Москвы сегодня.</p>
					<a href="contacts.html#callback" class="offer__btn btn popup-link">Бесплатная консультация</a>
				</div>
				<div class="offer__slide">
					<p class="offer__text">Вы хотите изменить мир.</p>
					<h1 class="offer__title">Мы хотим вам помочь.</h1>
					<p class="offer__descr">Мы предпочитаем обсуждать проблемы и решения, а не участвовать в теоретических юридических дебатах, которые никогда не заканчиваются.</p>
					<a href="contacts.html#callback" class="offer__btn btn">Бесплатная консультация</a>
				</div>
			</div>

			<a class="offer__video popup-with-zoom-anim popup-youtube" href="https://www.youtube.com/watch?v=FWxRRbnwRf0" rel="nofollow" >
				<p class="offer__time">1:30</p>
				<div class="offer__play"></div>
				<p class="offer__watch">Посмотрите короткое видео о нашей компании</p>
			</a>
		</div>
	</div>
	<?php } else { ?>
	<div class="caption">
		<div class="wrapper">
			<h1 class="caption__title">Page Title</h1>
			<div class="caption__bc">
				<span>
					<a href="index.html">Home</a>
				</span>
				<span class="sep">/</span>
				<span class="current">Page Title</span>
			</div>
		</div>
	</div>
	<?php } ?>

</header><!-- End header -->



	
