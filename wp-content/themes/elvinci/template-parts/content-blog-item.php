<div class="blog__item">
    <a class="blog__item-tag-link" href="#">
        <span class="blog__item-tag"><?php echo esc_html__('Tag-Name_1', 'elvinci'); ?></span>
    </a>
    <?php
        if( has_post_thumbnail() ) {
            the_post_thumbnail( 'full', array('class' => "blog__item-img",));
        }
        else {
            echo '<img class="blog__item-img" src="' . get_template_directory_uri() . '/assets/img/post-types/1.png" alt="Blog Image">';
        }
    ?>
    
    <div class="blog__item-info">
        <a class="blog__item-info-data-link" href="#">
            <p class="blog__item-info-data"><?php esc_html(the_time('d.m.Y')); ?></p>
        </a>
        <span class="blog__item-info-delimiter"></span>
        <a class="blog__item-info-author-link" href="#">
            <p class="blog__item-info-author"><?php esc_html__(the_author(), 'elvinci'); ?></p>
        </a>
    </div>
    <h3 class="blog__item-title"><?php esc_html__(the_title(), 'elvinci'); ?></h3>
    <p class="blog__item-text">
        <?php echo esc_html__(elvinci__excerpt(24), 'elvinci'); ?>
    </p>
    <a class="blog__item-link" href="#"><?php echo esc_html__('Ansehen', 'elvinci'); ?></a>
</div>
            
        