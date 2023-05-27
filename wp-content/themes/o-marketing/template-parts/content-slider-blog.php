<?php
    $count = 5;

    $blog = new WP_Query( [
        'posts_per_page' => $count,  // Сколько выводить постов
        'post_type'      => 'post',  // Какие посты нам нужно выводить
    ] );
?>

<section class="slider-blog" id="blog">
    <div class="container">
        <div class="slider-blog__inner">
            <?php if ( $blog->have_posts() ) : while ( $blog->have_posts() ) : $blog->the_post(); ?>
                <div class="slider-blog__item">
                    <a class="slider-blog__item-link" href="#">
                        <h3 class="slider-blog__item-title">
                            <?php the_title(); ?>
                        </h3>
                    </a>
                    <?php the_content(); ?>
                </div>
            <?php endwhile; else: ?>
                <p><?php esc_html__('Content not found.', 'o-marketing'); ?></p>
            <?php endif; ?>
        </div>
    </div>
</section>