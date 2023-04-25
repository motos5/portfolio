<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="header <?php if(is_404()) { echo 'header--page-404'; } else { echo esc_attr(''); } ?>">
	<div class="container">
		<div class="header__inner">
			<a class="logo" href="#">
				<img class="logo__img" src="<?php echo get_template_directory_uri() ?>/app/images/logo.svg" alt="Logo">
			</a>

			<?php
				wp_nav_menu( [
					'theme_location'  => 'menu-header',
					'container'       => 'nav',
					'container_class' => 'menu',
					'menu_class'      => 'menu__list',
					'menu_id'         => false,
					'echo'            => true,
					'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
				] );
			?>

			<!-- <nav class="menu">
				<ul class="menu__list">
					<li class="menu__list-item">
						<a class="menu__list-link menu__list-link--active" href="#">Home</a>
					</li>
					<li class="menu__list-item">
						<a class="menu__list-link" href="#">Shop</a>
					</li>
					<li class="menu__list-item">
						<a class="menu__list-link" href="#">Page</a>
					</li>
					<li class="menu__list-item">
						<a class="menu__list-link" href="#">Blog</a>
					</li>
					<li class="menu__list-item">
						<a class="menu__list-link" href="#">Contact</a>
					</li>
				</ul>
			</nav> -->
			<div class="user-nav">
				<a class="user-nav__link" href="#">
					<img class="user-nav__link-img" src="<?php echo get_template_directory_uri() ?>/app/images/icons/user.svg" alt="User icon">
				</a>
				<a class="user-nav__link" href="#">
					<img class="user-nav__link-img" src="<?php echo get_template_directory_uri() ?>/app/images/icons/search.svg" alt="Search icon">
				</a>
				<a class="user-nav__link" href="#">
					<img class="user-nav__link-img" src="<?php echo get_template_directory_uri() ?>/app/images/icons/heart_icon.svg" alt="Heart icon">
					<span class="user-nav__num">3</span>
				</a>
				<a class="user-nav__link" href="#">
					<img class="user-nav__link-img" src="<?php echo get_template_directory_uri() ?>/app/images/icons/cart_icon.svg" alt="Cart icon">
					<span class="user-nav__num">7</span>
				</a>
			</div>
		</div>
	</div>
</header>