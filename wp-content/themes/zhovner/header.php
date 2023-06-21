<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<!-- Menu -->
<div class="menu">
	<div class="container">
		<div class="row">
			<div class="logo">
				<?php
					if( has_custom_logo() ){
						echo get_custom_logo();
					}
				?>
			</div>
			
			<?php
				wp_nav_menu( [
					'theme_location'  => 'menu-header',
					'container'       => '',
					'container_class' => '',
					'menu_class'      => '',
					'menu_id'         => '',
					'echo'            => true,
					'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
				] );
			?>
			<!-- <ul>
				<li><a href="index.html">Главная</a></li>
				<li><a href="about.html">О компании</a></li>
				<li><a href="catalog.html">Каталог</a></li>
				<li><a href="order.html">На заказ</a></li>
				<li><a href="portfolio.html">Наши работы</a></li>
				<li><a href="contacts.html">Контакты</a></li>
			</ul> -->
			<div class="phone">
				<a href="tel:+79186687673">&#9742; +7 (918) 668-76-73</a>
			</div>
		</div>
	</div>
</div>
