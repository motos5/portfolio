<?php get_header();

// (Global Settings)
$catalog_bg = get_field('catalog_bg', 'option');

$style_catalog = '';
if($catalog_bg) {
	$style_catalog = 'style="background-image: url(' . esc_attr($catalog_bg) . ');"';
} else {
	$style_catalog = 'style="background-image: url(' . get_template_directory_uri() . '/assets/img/background.jpg);"';
}


$title = get_category('3')->name;

$category1 = get_category('14')->slug;
$category1_name = get_category('14')->name;
$category2 = get_category('15')->slug;
$category2_name = get_category('15')->name;
$category3 = get_category('16')->slug;
$category3_name = get_category('16')->name;

?>

<div class="popular" <?php echo $style_catalog; ?>>
	<div class="container">
		<div class="row popular-title">
			<h2><?php printf(esc_html__('%1$s', 'zhovner'), $title); ?></h2>
		</div>
		<div class="category-controll text-center">
			<button class="btn" type="button" data-filter="all"><?php echo esc_html__('All', 'zhovner'); ?></button>
			<button class="btn" type="button" data-filter=".<?php echo esc_attr($category1); ?>"><?php printf(esc_html__('%1$s', 'zhovner'), $category1_name); ?></button>
			<button class="btn" type="button" data-filter=".<?php echo esc_attr($category2); ?>"><?php printf(esc_html__('%1$s', 'zhovner'), $category2_name); ?></button>
			<button class="btn" type="button" data-filter=".<?php echo esc_attr($category3); ?>"><?php printf(esc_html__('%1$s', 'zhovner'), $category3_name); ?></button>
			<button class="btn" type="button" data-sort="order:asc"><?php echo esc_html__('Ascending', 'zhovner'); ?></button>
			<button class="btn" type="button" data-sort="order:descending"><?php echo esc_html__('Descending', 'zhovner'); ?></button>
		</div>
		<div class="row popular-goods catalog">
			<?php
				$catalog_doors = new WP_Query( [
					'post_type' => 'post',
					'posts_per_page' => -1,
					'category_name' => 'doors',
					'orderby' => 'title',
					'order' => 'DESC',
					'paged' => $paged
				] );
			?>

			<?php if ( $catalog_doors->have_posts() ) : while ( $catalog_doors->have_posts() ) : $catalog_doors->the_post(); ?>
				<?php
				$all_categories = get_the_category();
				$res_name = '';
				foreach($all_categories as $categry) {
					if($categry->term_id == 14 || $categry->term_id == 15 || $categry->term_id == 16) {
						$res_name = $categry->slug;
					}
				}
				?>

				<div class="col-3 col-lg-6 col-sm-12 product mix <?php echo esc_attr($res_name, 'zhovner'); ?>" data-order="<?php echo esc_html__(get_the_excerpt()); ?>">
					<?php the_post_thumbnail('full'); ?>
					<h3><?php echo esc_html__(get_the_title()); ?></h3>
					<div><?php echo esc_html__(get_the_excerpt()); ?> &#8372;</div>
					<a href="<?php echo esc_url(get_the_permalink()); ?>" class="btn"><?php echo esc_html__('More', 'zhovner'); ?></a>
				</div>
				
			<?php endwhile; wp_reset_postdata(); else: ?>
				<p><?php echo esc_html__('Content not found.', 'zhovner'); ?></p>
			<?php endif; ?>
			
		</div>

		<?php if($catalog_doors->max_num_pages > 1) {
			// Left Arrow for first page
			if(get_query_var('paged') == 0) { ?>
				<span class="prev page-numbers first">Left</span>
			<?php }

		// Standart Pagination
		$big = 999999999; // уникальное число для замены
		echo paginate_links(array(
			'base'    => str_replace( $big, '%#%', get_pagenum_link( $big ) ),
			'format'  => '',
			'current' => max( 1, get_query_var('paged') ),
			'prev_text'    => '',
			'next_text'    => '',
			'total'	=> $catalog_doors->max_num_pages
		)); } ?>
		<!-- <nav class="navigation pagination" role="navigation">
			<div class="nav-links"><span aria-current="page" class="page-numbers current">1</span>
			<a class="page-numbers" href="">2</a>
			<a class="next page-numbers" href="">Далее</a></div>
		</nav> -->
	</div>
</div>


<?php get_footer();