<?php
// Home News
$news_subtitle = get_field('news_subtitle');
$news_title = get_field('news_title');
?>

<!-- News -->
<section class="news">
    <div class="wrapper">
        <h2 class="news__title secondary-title"><span><?php printf(esc_html__('%1$s', 'wayup'), $news_subtitle); ?></span><br><?php printf(esc_html__('%1$s', 'wayup'), $news_title); ?></h2>

        <?php
        $news = new WP_Query( [
            'posts_per_page' => 8,
            'post_type' => 'post',
        ] );
        ?>

        <div class="news__slider">
            <?php if ( $news->have_posts() ) : while ( $news->have_posts() ) : $news->the_post(); ?>
                <div class="news__slide">
                    <div class="news__item">
                        <div class="add-time">
                            <svg width="13" height="13">
                                <use xlink:href="#time"/>
                            </svg>
                            <p class="add-time__date"><?php echo get_the_date(); ?></p>
                        </div>
                        <h5 class="news__heading"><?php the_title(); ?></h5>
                        <div class="news__text"><?php echo wayup_excerpt(25); ?></div>
                        <a href="<?php the_permalink(); ?>" class="news__link link-more">
                            <?php echo esc_html__('Read more', 'wayup'); ?>
                            <svg width="18" height="20">
                                <use xlink:href="#nav-right"/>
                            </svg>
                        </a>
                    </div>
                    <div class="news__img blue-noise">
                        <?php
                        // The Thumbnail Image
                        if( has_post_thumbnail() ) {
                            the_post_thumbnail( 'archive-news');
                            }
                        else {
                            echo '<img src="'.get_template_directory_uri().'/assets/img/photo.jpg" alt="No Photo" />';
                            }
                        ?>
                    </div>
                </div>
            <?php endwhile; wp_reset_postdata(); else: ?>
                <p><?php echo esc_html__('Content not found.', 'wayup'); ?></p>
            <?php endif; ?>   
        </div>

            <a href="<?php echo get_post_type_archive_link('post'); ?>" class="news__btn btn"><?php echo esc_html('All news', 'wayup'); ?></a>
        </div>
</section><!-- End news -->