<?php
// (Block Settings)
$footer_text = get_field('footer_text', 'option');
?>

<!-- Footer -->
<div class="footer">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <a href="<?php echo home_url("/") . '/policy/' ?>"><?php printf(esc_html__('%1$s', 'zhovner'), $footer_text); ?></a> <span class="accent-color">&copy; </span> <?php echo get_bloginfo('name'); ?>, <?php echo esc_html('2020-'); ?><?php the_time('Y'); ?>
            </div>
        </div>
    </div>
</div>

<?php wp_footer(); ?>

</body>

</html>