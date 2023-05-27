<?php
	$title = get_field('title', 'option');
	$sub_title = get_field('sub_title', 'option');
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> id="body">
<?php

	$style_for_header = '';
	if(is_page()) {
		$style_for_header = 'style="background-image: url(' . wp_get_attachment_url(get_post_thumbnail_id(get_the_ID())) . '); background-repeat: no-repeat; background-position: center center; background-size: cover;"';
	} else {
		$style_for_header = 'style="display: none;"';
	}
?>
<?php wp_body_open(); ?>
<header class="header">
	<div class="header__top">
		<div class="container">
			<div class="header__top-inner">
				<?php
					// Logo
					$logo_black =  wp_get_attachment_url( get_theme_mod( 'custom_logo' ) );
					$logo_white = esc_url( wp_get_attachment_url( get_theme_mod( 'footer_logo' ) ) );
				?>
				<a class="logo" href="<?php echo esc_url(home_url("/")); ?>">
					<img class="logo__img black" src="<?php echo esc_url($logo_black); ?>" alt="">
					<img class="logo__img white" src="<?php echo esc_url($logo_white); ?>" alt="">
				</a>
					
				<?php
					// Menu
					$menu_btn = '<button class="menu__btn">
									<svg xmlns="http://www.w3.org/2000/svg" xml:space="preserve" width="32" height="32">
										<path  d="M4 10h24a2 2 0 0 0 0-4H4a2 2 0 0 0 0 4zm24 4H4a2 2 0 0 0 0 4h24a2 2 0 0 0 0-4zm0 8H4a2 2 0 0 0 0 4h24a2 2 0 0 0 0-4z" fill="black" />
									</svg>
								</button>';

					// echo $button;
				
					wp_nav_menu( [
						'theme_location'  => 'menu-header',
						'container'       => 'nav',
						'container_class' => 'menu',
						'menu_class'      => 'menu__list',
						'menu_id'         => false,
						'echo'            => true,
						'items_wrap'      => $menu_btn . '<ul id="%1$s" class="%2$s">%3$s</ul>',
					] );
				?>
			</div>
		</div>
	</div>
	<div class="header__content"  <?php echo $style_for_header; ?>>
		<div class="container">
			<div class="header__content-inner">
				<?php if($title || $sub_title) { ?>
					<h1 class="header__title"><?php printf(esc_html__('%1$s', 'o-marketing'), $title); ?></h1>
					<h4 class="header__subtitle"><?php printf(esc_html__('%1$s', 'o-marketing'), $sub_title); ?></h4>
				<?php } ?>
				<a class="header__icon" href="#">
					<img src="<?php the_field('icon', 'option'); ?>" alt="">
				</a>
			</div>
		</div>
	</div>
</header>


	
