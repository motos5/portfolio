<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<!-- Header Page -->
<header class="header-page">
	<div class="container">
		<div class="header-page__inner">
			<div class="header-page__start">
				<div class="logo">
					<img class="logo__img" src="<?php echo get_template_directory_uri() ?>/assets/img/logo.svg" alt="Logo" width="127" height="21">
				</div>
			</div>
			<div class="header-page__end">
				<nav class="header-page__nav">
					<ul class="header-page__list">
						<li class="header-page__item">
							<a class="header-page__link" href="#">pizza</a>
						</li>
						<li class="header-page__item">
							<a class="header-page__link" href="#">about</a>
						</li>
						<li class="header-page__item">
							<a class="header-page__link" href="#">contacts</a>
						</li>
					</ul>
				</nav>
				<div class="phone header-page__phone">
					<a class="phone__item" href="tel:+380999999999">+38 (099) 999-99-99</a>
				</div>
				<div class="header-page__hamburger">
					<button class="btn-menu" type="button">
						<svg width="24" height="24">
							<g stroke="#fff" stroke-width="2">
								<path d="M1 12h22"></path>
								<path d="M1 6h22"></path>
								<path d="M1 18h22"></path>
							</g>
						</svg>
					</button>
				</div>
			</div>
		</div>
	</div>
</header>
<!-- End Header Page -->

	
