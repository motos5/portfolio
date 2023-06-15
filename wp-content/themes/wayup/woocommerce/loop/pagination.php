<?php
/**
 * Pagination - Show numbered pagination for catalog pages
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/loop/pagination.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.3.1
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$total   = isset( $total ) ? $total : wc_get_loop_prop( 'total_pages' );
$current = isset( $current ) ? $current : wc_get_loop_prop( 'current_page' );
$base    = isset( $base ) ? $base : esc_url_raw( str_replace( 999999999, '%#%', remove_query_arg( 'add-to-cart', get_pagenum_link( 999999999, false ) ) ) );
$format  = isset( $format ) ? $format : '';

if ( $total <= 1 ) {
	return;
}
?>
<nav class="woocommerce-pagination">
	<!-- Pagination -->
		
	<?php   if($total > 1) { ?>
				<nav class="pagination">
					<div class="nav-links">
								
					<?php 
							// Left Arrow for first page
							if(get_query_var('paged') == 0) { ?>
								<span class="prev page-numbers first"></span>
							<?php } ?>

							<?php
							
							// Standart Pagination
								$big = 999999999; // уникальное число для замены
								echo paginate_links(array(
									'base'    => str_replace( $big, '%#%', get_pagenum_link( $big ) ),
									'format'  => '',
									'current' => max( 1, get_query_var('paged') ),
									'prev_text'    => '',
									'next_text'    => '',
									'total'	=> $total
								)); ?>

						<?php
							// Right Arrow for last page
							if(get_query_var('paged') == $total) { ?>
								<span class="next page-numbers last"></span>
						<?php } ?>
					</div>
				</nav>
			<?php }  ?>
</nav>
