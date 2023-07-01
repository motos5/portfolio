<?php
/*
Template Name: Portfolio
Template Post Type: post, page, product
*/

// (Global Settings)
$portfolio_bg = get_field('portfolio_bg', 'option');

$style_portfolio = '';
if($portfolio_bg) {
	$style_portfolio = 'style="background-image: url(' . esc_attr($portfolio_bg) . ');"';
} else {
	$style_portfolio = 'style="background-image: url(' . get_template_directory_uri() . '/assets/img/background.jpg);"';
}

get_header(); ?>


<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <!-- Наши работы -->
    <div class="portfolio" <?php echo $style_portfolio; ?>>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="gallery">
                        <?php
                            if ( have_rows('portfolio', 'option') ) {
                            while ( have_rows('portfolio', 'option') ) { the_row();
                                $portfolio_work = get_sub_field('image');
                                $portfolio_alt = $portfolio_work['alt'];
                                $portfolio_title = $portfolio_work['title']; ?>
                                    <a href="<?php echo esc_url($portfolio_work['url']); ?>" data-caption="<?php printf(esc_attr__('%1$s', 'wayup'), $portfolio_title); ?>">
                                        <img src="<?php echo esc_url($portfolio_work['url']); ?>" alt="<?php printf(esc_attr__('%1$s', 'wayup'), $portfolio_alt); ?>" />
                                    </a>
                            <?php }
                            }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

  <?php endwhile;
else : ?>
  <p><?php echo esc_html__('Content not found.', 'wayup'); ?></p>
<?php endif; ?>


<?php get_footer();
