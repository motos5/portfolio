<?php
// Group WooCommerce Settings
$woo_subtitle = get_field('woo_subtitle', 'option');
$woo_title = get_field('woo_title', 'option');
$woo_link = get_field('woo_link', 'option');
$woo_bg_image = get_field('woo_bg_image', 'option');

if($woo_link) {
	$woo_link = $woo_link;
} else {
	$woo_link = '#';
}

/**
 * The Template for displaying product archives, including the main shop page which is a post type archive
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/archive-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.4.0
 */

defined( 'ABSPATH' ) || exit;

get_header( 'shop' ); ?>

<!-- Market -->
<section class="inner shop">
	<div class="shop-top" <?php if($woo_bg_image) { ?>style="background: #fff url('<?php echo esc_url($woo_bg_image); ?>') no-repeat center top/ cover;"<?php } ?>>
		<div class="wrapper">
			<?php if($woo_subtitle || $woo_title) { ?>
				<h1 class="shop-top__title">
					<?php printf(esc_html__('%1$s', 'wayup'), $woo_subtitle); ?> <br><span><?php printf(esc_html__('%1$s', 'wayup'), $woo_title); ?></span>
				</h1>
			<?php } ?>
			<?php if($woo_link) { ?>
				<a href="<?php echo esc_url($woo_link); ?>" class="shop-top__btn btn"><?php echo esc_html__('Buy now', 'wayup'); ?></a>
			<?php } ?>
		</div>
	</div>


	<div class="wrapper">
		<div class="shop__heading">
			<div class="shop__btns">
				<div class="shop__btn" id="on-list">
					<svg width="22" height="20">
						<use xlink:href="#list"/>
					</svg>
				</div>
				<div class="shop__btn make-grid" id="on-grid">
					<svg width="20" height="20">
						<use xlink:href="#grid"/>
					</svg>
				</div>
			</div>


			<?php // woocommerce_catalog_ordering(); ?>
			<div class="sort-menu">
				<span><?php echo esc_html__('Sort', 'wayup'); ?> <a href="#" id="parametr"><?php echo esc_html__('Default sorting', 'wayup'); ?></a></span>
				<ul>
					<li><a href="#" data-value="menu_order"><?php echo esc_html__('Default sorting', 'wayup'); ?></a></li>
					<li><a href="#" data-value="popularity"><?php echo esc_html__('Sort by popularity', 'wayup'); ?></a></li>
					<li><a href="#" data-value="rating"><?php echo esc_html__('Sort by average rating', 'wayup'); ?></a></li>
					<li><a href="#" data-value="date"><?php echo esc_html__('Sort by latest', 'wayup'); ?></a></li>
					<li><a href="#" data-value="price"><?php echo esc_html__('Sort by price: low to high', 'wayup'); ?></a></li>
					<li><a href="#" data-value="price-desc"><?php echo esc_html__('Sort by price: high to low', 'wayup'); ?></a></li>
				</ul>
			</div>
		</div>

		<?php
			// Add in woo.php
			do_action( 'woocommerce_sidebar' );
		?>

		

		<div class="market">
			<div class="market__heading">
				<?php if ( apply_filters( 'woocommerce_show_page_title', true ) ) : ?>
					<h3 class="market__title"><?php woocommerce_page_title(); ?></h3>
				<?php endif; ?>
				<?php
					/**
					 * // Removed in woo.php
					 * Hook: woocommerce_archive_description.
					 *
					 * @hooked woocommerce_taxonomy_archive_description - 10
					 * @hooked woocommerce_product_archive_description - 10
					 */
					do_action( 'woocommerce_archive_description' );
				?>
			</div>

			<?php
			/**
			 * // Removed woocommerce_breadcrumb in woo.php
			 * 
			 * Hook: woocommerce_before_main_content.
			 *
			 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
			 * @hooked woocommerce_breadcrumb - 20
			 * @hooked WC_Structured_Data::generate_website_data() - 30
			 */
			do_action( 'woocommerce_before_main_content' );



			if ( woocommerce_product_loop() ) {

				/**
				 * Hook: woocommerce_before_shop_loop.
				 *
				 * @hooked woocommerce_output_all_notices - 10
				 * @hooked woocommerce_result_count - 20
				 * @hooked woocommerce_catalog_ordering - 30
				 */
				do_action( 'woocommerce_before_shop_loop' );
			
				woocommerce_product_loop_start();
			
				if ( wc_get_loop_prop( 'total' ) ) {
					while ( have_posts() ) {
						the_post();
			
						/**
						 * Hook: woocommerce_shop_loop.
						 */
						do_action( 'woocommerce_shop_loop' );
			
						wc_get_template_part( 'content', 'product' );
					}
				}
			
				woocommerce_product_loop_end();
			
				/**
				 * Hook: woocommerce_after_shop_loop.
				 *
				 * @hooked woocommerce_pagination - 10
				 */
				do_action( 'woocommerce_after_shop_loop' );
			} else {
				/**
				 * Hook: woocommerce_no_products_found.
				 *
				 * @hooked wc_no_products_found - 10
				 */
				do_action( 'woocommerce_no_products_found' );
			}
			


			/**
			 * Hook: woocommerce_after_main_content.
			 *
			 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
			 */
			do_action( 'woocommerce_after_main_content' );

			/**
			 * Hook: woocommerce_sidebar.
			 *
			 * @hooked woocommerce_get_sidebar - 10
			 */
			do_action( 'woocommerce_sidebar' );
			?>
		</div>
	</div>
</section>

<?php


get_footer( 'shop' );
