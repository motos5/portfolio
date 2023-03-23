<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="header">
	<div class="container">
		<div class="header__inner">
			<?php
				// Logo
				$logo =  wp_get_attachment_url( get_theme_mod( 'custom_logo' ) );
			?>
			<?php if($logo) { ?>
				<a class="logo" href="#">
					<img class="logo__img" src="<?php echo esc_url($logo); ?>" alt="Logo">
				</a>
			<?php } ?>
			
				<?php
				// Menu
				$menu_btn = '<button class="menu__btn">
								<svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" fill="none">
									<path fill="#fff" d="M9 13h31v3H9zM9 22h31v3H9zM9 31h31v3H9z"/>
								</svg>
							</button>';

				wp_nav_menu( [
					'theme_location'  => 'menu-header',
					'container'       => 'nav',
					'container_class' => 'menu',
					'menu_class'      => 'menu__list',
					'menu_id'         => false,
					'echo'            => true,
					'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>' . $menu_btn,
				] );
				?>
			</nav>
		</div>
	</div>
</header>