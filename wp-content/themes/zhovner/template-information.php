<?php
/*
Template Name: Information
Template Post Type: post, page, product
*/

get_header(); ?>


<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
 
<!-- Полезная информация -->
<?php
$forged_strip = get_category('7')->name;

$forged_strip_query = new WP_Query( [
    'post_type' => 'post',
	'posts_per_page' => -1,
    'category_name' => 'forged_strip',
    'orderby' => 'title',
    'order' => 'DESC'
] );


$door_handles = get_category('8')->name;

$door_handles_query = new WP_Query( [
    'post_type' => 'post',
	'posts_per_page' => -1,
    'category_name' => 'door_handles',
    'orderby' => 'title',
    'order' => 'DESC'
] );


$forging_elements = get_category('9')->name;

$forging_elements_query = new WP_Query( [
    'post_type' => 'post',
	'posts_per_page' => -1,
    'category_name' => 'forging_elements',
    'orderby' => 'title',
    'order' => 'DESC'
] );


$colors = get_category('10')->name;

$colors_query = new WP_Query( [
    'post_type' => 'post',
	'posts_per_page' => -1,
    'category_name' => 'colors',
    'orderby' => 'title',
    'order' => 'DESC'
] );

$drawing_mdf_10 = get_category('11')->name;

$drawing_mdf_10_query = new WP_Query( [
    'post_type' => 'post',
	'posts_per_page' => -1,
    'category_name' => 'drawing_mdf_10',
    'orderby' => 'title',
    'order' => 'DESC'
] );


$drawing_mdf_16 = get_category('12')->name;

$drawing_mdf_16_query = new WP_Query( [
    'post_type' => 'post',
	'posts_per_page' => -1,
    'category_name' => 'drawing_mdf_16',
    'orderby' => 'title',
    'order' => 'DESC'
] );


$colors_mdf = get_category('13')->name;

$colors_mdf_query = new WP_Query( [
    'post_type' => 'post',
	'posts_per_page' => -1,
    'category_name' => 'colors_mdf',
    'orderby' => 'title',
    'order' => 'DESC'
] );

?>
<div class="information_page">
    <div class="container">
			<!-- Кованная полоса -->
      <div class="row information_title">
        <div class="col-12">
		<?php if($forged_strip) { ?>
          <h2><?php printf(esc_html__('%1$s', 'wayup'), $forged_strip); ?></h2>
		<?php } ?>
        </div>
      </div>
		<div class="row information_grid">
			<?php if ( $forged_strip_query->have_posts() ) : while ( $forged_strip_query->have_posts() ) : $forged_strip_query->the_post(); ?>
				<div class="col-3 col-lg-6 col-sm-12">
					<?php the_post_thumbnail('full'); ?>
					<h3><?php echo esc_html__(get_the_title()); ?></h3>  
				</div>
			<?php endwhile; wp_reset_postdata(); else: ?>
				<p><?php echo esc_html__('Content not found.', 'zhovner'); ?></p>
			<?php endif; ?>
		</div>
		<!-- Ручки -->
		<div class="row information_title">
        <div class="col-12">
		<?php if($door_handles) { ?>
          <h2><?php printf(esc_html__('%1$s', 'wayup'), $door_handles); ?></h2>
		<?php } ?>
        </div>
      </div>
			<div class="row information_grid">
				<?php if ( $door_handles_query->have_posts() ) : while ( $door_handles_query->have_posts() ) : $door_handles_query->the_post(); ?>
					<div class="col-3 col-lg-6 col-sm-12">
						<?php the_post_thumbnail('full'); ?>
						<h3><?php echo esc_html__(get_the_title()); ?></h3>  
					</div>
				<?php endwhile; wp_reset_postdata(); else: ?>
					<p><?php echo esc_html__('Content not found.', 'zhovner'); ?></p>
				<?php endif; ?>
			</div>
			<!-- Элементы ковки -->
			<div class="row information_title">
        <div class="col-12">
		<?php if($forging_elements) { ?>
          <h2><?php printf(esc_html__('%1$s', 'wayup'), $forging_elements); ?></h2>
		<?php } ?>
        </div>
      </div>
			<div class="row information_grid">
				<?php if ( $forging_elements_query->have_posts() ) : while ( $forging_elements_query->have_posts() ) : $forging_elements_query->the_post(); ?>
					<div class="col-3 col-lg-6 col-sm-12">
						<?php the_post_thumbnail('full'); ?>
						<h3><?php echo esc_html__(get_the_title()); ?></h3>  
					</div>
				<?php endwhile; wp_reset_postdata(); else: ?>
					<p><?php echo esc_html__('Content not found.', 'zhovner'); ?></p>
				<?php endif; ?>
			</div>
			<!-- Цвет -->
			<div class="row information_title">
        <div class="col-12">
		<?php if($colors) { ?>
          <h2><?php printf(esc_html__('%1$s', 'wayup'), $colors); ?></h2>
		<?php } ?>
        </div>
      </div>
			<div class="row information_grid">
				<?php if ( $colors_query->have_posts() ) : while ( $colors_query->have_posts() ) : $colors_query->the_post(); ?>
					<div class="col-3 col-lg-6 col-sm-12">
						<?php the_post_thumbnail('full'); ?>
						<h3><?php echo esc_html__(get_the_title()); ?></h3>  
					</div>
				<?php endwhile; wp_reset_postdata(); else: ?>
					<p><?php echo esc_html__('Content not found.', 'zhovner'); ?></p>
				<?php endif; ?>
			</div>
			<!-- Рисунок МДФ 10мм -->
			<div class="row information_title">
        <div class="col-12">
		<?php if($drawing_mdf_10) { ?>
          <h2><?php printf(esc_html__('%1$s', 'wayup'), $drawing_mdf_10); ?></h2>
		<?php } ?>
        </div>
      </div>
			<div class="row information_grid">
				<?php if ( $drawing_mdf_10_query->have_posts() ) : while ( $drawing_mdf_10_query->have_posts() ) : $drawing_mdf_10_query->the_post(); ?>
					<div class="col-3 col-lg-6 col-sm-12">
						<?php the_post_thumbnail('full'); ?>
						<h3><?php echo esc_html__(get_the_title()); ?></h3>  
					</div>
				<?php endwhile; wp_reset_postdata(); else: ?>
					<p><?php echo esc_html__('Content not found.', 'zhovner'); ?></p>
				<?php endif; ?>
			</div>
			<!-- Рисунок МДФ 16мм -->
			<div class="row information_title">
        <div class="col-12">
		<?php if($drawing_mdf_16) { ?>
          <h2><?php printf(esc_html__('%1$s', 'wayup'), $drawing_mdf_16); ?></h2>
		<?php } ?>
        </div>
      </div>
			<div class="row information_grid">
				<?php if ( $drawing_mdf_16_query->have_posts() ) : while ( $drawing_mdf_16_query->have_posts() ) : $drawing_mdf_16_query->the_post(); ?>
					<div class="col-3 col-lg-6 col-sm-12">
						<?php the_post_thumbnail('full'); ?>
						<h3><?php echo esc_html__(get_the_title()); ?></h3>  
					</div>
				<?php endwhile; wp_reset_postdata(); else: ?>
					<p><?php echo esc_html__('Content not found.', 'zhovner'); ?></p>
				<?php endif; ?>
			</div>
			<!-- Цвета МДФ -->
			<div class="row information_title">
        <div class="col-12">
		<?php if($colors_mdf) { ?>
          <h2><?php printf(esc_html__('%1$s', 'wayup'), $colors_mdf); ?></h2>
		<?php } ?>
        </div>
      </div>
			<div class="row information_grid">
				<?php if ( $colors_mdf_query->have_posts() ) : while ( $colors_mdf_query->have_posts() ) : $colors_mdf_query->the_post(); ?>
					<div class="col-3 col-lg-6 col-sm-12">
						<?php the_post_thumbnail('full'); ?>
						<h3><?php echo esc_html__(get_the_title()); ?></h3> 
					</div>
				<?php endwhile; wp_reset_postdata(); else: ?>
					<p><?php echo esc_html__('Content not found.', 'zhovner'); ?></p>
				<?php endif; ?>
			</div>
    </div>
  </div>

<?php endwhile; else: ?>
	<p><?php echo esc_html__('Content not found.', 'wayup'); ?></p>
<?php endif; ?>


<?php get_footer();