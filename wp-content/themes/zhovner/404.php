<?php get_header(); ?>

<!-- Ошибка 404 -->
<div class="page404">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="error_code"><?php echo esc_html('404', 'zhovner') ?></h2>
                <p class="warning_text"><?php echo esc_html__('Error!', 'zhovner') ?></p>
                <p class="description_text"><?php echo esc_html__('Unfortunately, such a page does not exist.', 'zhovner') ?></p>
            </div>
        </div>
    </div>
</div>

<?php
get_footer();
