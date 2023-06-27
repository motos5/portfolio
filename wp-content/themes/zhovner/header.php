<?php
// (Block Settings)
$phone_number = get_field('phone_number', 'option');
?>

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
			
			<div class="phone">
			<?php
				$phone= $phone_number;
				$parts=sscanf($phone,'%1c%2c%3c%3c%2c%2c'); // Количество символов в частях
				$phone_number_format = "+$parts[1] ($parts[2]) $parts[3]-$parts[4]-$parts[5]"; // Вывод полученных частей
			?>
				<a href="tel:<?php echo esc_attr($phone_number); ?>">&#9742; <?php echo esc_html($phone_number_format); ?></a>
			</div>
		</div>
	</div>
</div>
