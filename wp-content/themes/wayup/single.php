<?php


get_header();
?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<section class="single event">
    <div class="event-top" style="background: #fff url(<?php echo wp_get_attachment_image_url(get_post_thumbnail_id(get_the_ID()), 'single-news'); ?>) no-repeat center top/ cover;">
        <div class="wrapper">
            <div class="event-top__wrap">
                <div class="add-time">
                    <svg width="13" height="13">
                        <use xlink:href="#time"/>
                    </svg>
                    <p class="add-time__date"><?php the_date(); ?></p>
                </div>
                <div class="rate"></div>
            </div>
            <h1 class="event-top__title">
                <?php the_title(); ?>
            </h1>
            <?php
            // Get Taxonomy for News Single
            $news_types = wp_get_post_terms(get_the_ID(), 'category');
            ?>
            <ul class="tags-list">
                <?php foreach ($news_types as $type) { ?>
                    <li><a href="<?php echo get_term_link($type); ?>"><?php echo $type->name; ?></a></li>
                <?php } ?>
            </ul>
        </div>
    </div>
    <div class="wrapper">
        <div class="event__content">
            
            <?php the_content(); ?>

            <div class="event__wrap">
                <div class="share">
                    <p class="share__title">
                        <svg width="15" height="15">
                            <use xlink:href="#link"/>
                        </svg>
                        <?php echo esc_html__('Share', 'wayup'); ?>:
                    </p>
                    <ul class="social">
                        <?php
                            // Share Data
                            $share_url = get_the_permalink();
                            $title = get_the_title();
                            $description = wayup_excerpt(30);
                        ?>
                        <li class="social__item">
                            <span><?php echo esc_html__('Fb', 'wayup'); ?></span>
                            <a class="social__icon social__icon_fb" href="<?php echo 'https://www.facebook.com/sharer.php?u=' . $share_url; ?>" onclick="window.open(this.href, 'Share on Facebook', 'width=600, height=400'); return false;">
                                <svg  width="14" height="17">
                                    <use xlink:href="#facebook"/>
                                </svg>
                            </a>
                        </li>
                        <li class="social__item">
                            <span><?php echo esc_html__('Tw', 'wayup'); ?></span>
                            <a class="social__icon social__icon_tw" href="<?php echo 'https://twitter.com/intent/tweet?url=' . $share_url . '&text=' . $description; ?>" onclick="window.open(this.href, 'Share on Twitter', 'width=600, height=400'); return false;">
                                <svg  width="18" height="15">
                                    <use xlink:href="#twitter"/>
                                </svg>
                            </a>
                        </li>
                    </ul>
                </div>
                <ul class="event__nav">
                    <?php
                        $prev_post = get_previous_post();
                        if(!empty($prev_post )) { ?>
                            <li class="prev">
                                <a href="<?php echo $prev_post->guid; ?>"><?php echo esc_html__('Previous news', 'wayup'); ?></a>
                            </li>
                    <?php } ?>
                   
                    <?php
                        $next_post = get_next_post();
                        if(!empty($next_post)) { ?>
                            <li class="next">
                                <a href="<?php echo esc_url(get_permalink($next_post->ID)); ?>"><?php echo esc_html__('Next news', 'wayup'); ?></a>
                            </li>
                    <?php } ?>
                </ul>
            </div>
            
            <?php
            if ( ( is_singular() && ( have_comments() || 'open' == $post->comment_status ) ) ) {
                comments_template();
            }
            ?>
        </div>
        <?php get_sidebar(); ?>
        
    </div>
</section>


<?php endwhile; else: ?>
	<p><?php echo esc_html__('Content not found.', 'wayup'); ?></p>
<?php endif; ?>

<?php get_footer();