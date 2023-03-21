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
			<a class="logo" href="#">
				<img class="logo__img" src="<?php echo get_template_directory_uri() ?>/assets/img/logo.png" alt="Logo">
			</a>
			<nav class="menu">
				<ul class="menu__list">
					<li class="menu__item"><a class="menu__link" href="#">Kaufen</a></li>
					<li class="menu__item"><a class="menu__link" href="#">Verkaufen</a></li>
					<li class="menu__item"><a class="menu__link" href="#">Über uns</a></li>
					<li class="menu__item"><a class="menu__link" href="#">Neuigkeiten</a></li>
					<li class="menu__item"><a class="menu__link" href="#">Kontakt</a></li>
				</ul>
			</nav>
		</div>
	</div>
</header>