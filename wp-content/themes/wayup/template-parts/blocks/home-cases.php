<?php
// Home Cases
$cases_subtitle = get_field('cases_subtitle');
$cases_title = get_field('cases_title');
$cases_description = get_field('cases_description');
?>

<!-- Cases -->
<section class="cases tabs">
    <div class="wrapper">
        <h2 class="cases__title secondary-title"><span><?php printf(esc_html__('%1$s', 'wayup'), $cases_subtitle); ?></span><br><?php printf(esc_html__('%1$s', 'wayup'), $cases_title); ?></h2>
        <div class="tabs__wrap">

            <?php printf(esc_html__('%1$s', 'wayup'), $cases_description); ?>
            
            <?php
                $cases_types = get_terms( array(
                    'taxonomy' => 'category-cases',
                    'hide_empty' => false,
                ) );
            ?>
            <ul class="tabs__caption">
            <?php
					$i = '';
					$active = '';
					foreach ($cases_types as $type) {
						if($i == 0) {
							$active = 'class="active"';
						} else {
							$active = '';
						}
						$i++;
					?>
						<li <?php echo $active; ?>><?php echo $type->name; ?></li>
					<?php } ?>
            </ul>

        </div>

        <?php
            $j = 0;
            $tab_active = '';
            foreach($cases_types as $category) {
                if($j == 0) {$tab_active = 'active';
            } else {
                $tab_active = '';
            }

            $cases = new WP_Query( [
                'posts_per_page' => -1,
                'post_type'      => 'cases',
                'tax_query' => array(
                    array(
                        'taxonomy' => 'category-cases',
                        'field'    => 'slug',
                        'terms'    => $category->slug
                )),
            ]);
        ?>
        <!-- Cases content one-->
            <div class="tabs__content <?php echo esc_attr($tab_active); ?>">
                <?php if ( $cases->have_posts() ) : while ( $cases->have_posts() ) : $cases->the_post(); ?>
                    <div class="cases__item">
                        <div class="cases__block">
                            <h3 class="cases__heading"><?php the_title(); ?></h3>
                            <a class="cases__link link-more" href="<?php the_permalink(); ?>">
                                <?php echo esc_html__('Read more', 'wayup'); ?>
                                <svg width="18" height="20">
                                    <use xlink:href="#nav-right"/>
                                </svg>
                            </a>
                        </div>
                        <div class="cases__img">
                            <?php echo get_the_post_thumbnail(get_the_ID(), 'archive-cases'); ?>
                        </div>
                    </div>
                <?php endwhile; wp_reset_postdata(); else: ?>
                    <p><?php echo esc_html__('Content not found.', 'wayup'); ?></p>
                <?php endif; ?>
                
            </div><!-- End cases content one-->
        <?php $j++; } ?>

        <a href="<?php echo get_post_type_archive_link('cases'); ?>" class="cases__more link-more">
            <?php echo esc_html__('Show more cases', 'wayup'); ?>
            <svg width="18" height="20">
                <use xlink:href="#nav-right"/>
            </svg>
        </a>

    </div>

</section><!-- End cases -->