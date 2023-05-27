<?php
// Remove Action for Pagination
remove_action( 'pre_get_posts', 'wayup_per_post_types' );


// Group Post Types Settings (Post Types Settings)
$testimonials = get_field('testimonials', 'option');
$subtitle = $testimonials['subtitle'];
$title = $testimonials['title'];
$title_form = $testimonials['title_form'];


// Post Type - Testimonials
$testimonials_count = get_field('testimonials', 'option');
$count = $testimonials_count['post_per_page'];
$count_posts = '';
if($count ) {
	$count_posts = $count;
} else {
	$count_posts = 6;
}


get_header();
?>

<section class="inner clients">
	<div class="wrapper">
		<?php if($subtitle || $title) { ?>
			<h2 class="clients__title secondary-title"><span><?php printf(esc_html__('%1$s', 'wayup'), $subtitle); ?></span><br><?php printf(esc_html__('%1$s', 'wayup'), $title); ?></h2>
		<?php } ?>

		<?php
		
		$testimonials = new WP_Query( [
			'posts_per_page' => $count_posts,
			'post_type'      => 'testimonials',
			'paged' => $paged
		] );

		if ( $testimonials->have_posts() ) : while ( $testimonials->have_posts() ) : $testimonials->the_post(); ?>
		<?php
			// Metaboxes (Testimonials)
			$testimonials_link = get_post_meta(get_the_ID(), 'wayup_testimonials_link', true);
			$testimonials_date = get_post_meta(get_the_ID(), 'wayup_testimonials_date', true);
		?>
			<div class="clients__box">
				<div class="clients__photo">
					<div class="clients__img">
						<?php echo get_the_post_thumbnail(get_the_ID(), 'archive-testimonials'); ?>
					</div>
					<?php if($testimonials_link) { ?>
						<a href="<?php echo esc_url($testimonials_link); ?>" class="clients__link" target="_blank">
							<svg  width="14" height="17">
								<use xlink:href="#facebook"/>
							</svg>
						</a>
					<?php } ?>
				</div>
				<div class="clients__say">
					<p class="clients__name"><?php the_title(); ?></p>
					<div class="clients__text">
						<?php the_content(); ?>
					</div>
				</div>
				<?php if($testimonials_date) { ?>
					<div class="add-time">
						<svg width="13" height="13">
							<use xlink:href="#time"/>
						</svg>
						<p class="add-time__date"><?php printf(esc_html__('%1$s', 'wayup'), $testimonials_date); ?></p>
					</div>
				<?php } ?>
			</div>
		<?php endwhile; wp_reset_postdata(); else: ?>
			<p><?php echo esc_html__('Content not found.', 'wayup'); ?></p>
		<?php endif; ?>

		

		<!-- Pagination -->
		
		<?php   if($testimonials->max_num_pages > 1) { ?>
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
								'total'	=> $testimonials->max_num_pages
							)); ?>

					<?php
						// Right Arrow for last page
						if(get_query_var('paged') == $testimonials->max_num_pages) { ?>
							<span class="next page-numbers last"></span>
					<?php } ?>
				</div>
			</nav>
		<?php }  ?>
		
		
		<div class="clients__form-block">
			<div class="log__wrap form">
				<h3 class="log__title form"><?php printf(esc_html__('%1$s', 'wayup'), $title_form); ?></h3>
				<form action="<?php echo admin_url('admin-ajax.php?action=my_action'); ?>" class="clients__form review-form" id="popupMessage">
					<div class="log__wrap">
						<div class="log__group">
							<label for="name"><?php echo esc_html__('Name', 'wayup'); ?></label>
							<input class="log__input" type="text" id="name" name="name">
						</div>
						<div class="log__group">
							<label for="email"><?php echo esc_html__('Email', 'wayup'); ?></label>
							<input class="log__input" type="email" id="email" name="email">
						</div>
						<div class="log__group">
							<label for="tel"><?php echo esc_html__('Phone', 'wayup'); ?></label>
							<input class="log__input" type="tel" id="tel" name="tel">
						</div>
						<div class="log__group log__group_socials">
							<label for="social"><?php echo esc_html__('Link to social network', 'wayup'); ?></label>
							<input class="log__input" type="text" id="social" name="social">
						</div>
						<div class="log__group log__group_textarea">
							<label for="message"><?php echo esc_html__('Your feedback', 'wayup'); ?></label>
							<textarea class="log__input" type="text" id="message" name="message"></textarea>
						</div>
						<p class="log__line"><span>*</span><?php echo esc_html__('Mandatory fields', 'wayup'); ?></p>
						<div class="log__btn">
							<input class="btn" id="send" type="submit" data-submit value="<?php echo esc_attr__('Send', 'wayup'); ?>" />
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</section>

<?php get_footer();