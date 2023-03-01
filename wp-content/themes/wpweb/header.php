<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="header">
	<div class="header__inner">
		<div class="header__top">
			<div class="container">
				<div class="header__top-inner">
					<a class="logo" href="#">
						<img class="logo__img" src="<?php  echo get_template_directory_uri() ?>/assets/img/logo.svg" alt="Logo">
					</a>
					<nav class="menu">
						<ul class="menu__list">
							<li class="menu__item"><a class="menu__link" href="#">Home</a></li>
							<li class="menu__item"><a class="menu__link" href="#">About me</a></li>
							<li class="menu__item"><a class="menu__link" href="#">Service</a></li>
							<li class="menu__item"><a class="menu__link" href="#">Works</a></li>
							<li class="menu__item"><a class="menu__link" href="#">Contact</a></li>
						</ul>
						<button class="btn header__top-btn" type="button">Let's talk</button>
					</nav>
				</div>
			</div>
		</div>
		<div class="header__content">
			<div class="container">
				<div class="header__content-inner">
					<h1 class="header__title">
						Hi, <span>I'm Vitaly Izotov!</span>
					</h1>
					<p class="header__description">
						I create websites on <span>WordPress</span>
					</p>
					<div class="header__buttons">
						<a class="btn header__content-btn see" href="#">See Works</a>
						<a class="btn header__content-btn cv" href="#">Download CV</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	
</header>



	
