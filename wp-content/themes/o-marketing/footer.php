        <footer class="footer">
            <div class="footer__top">
                <a class="footer__logo" href="#">
                    <?php
                    $footer_logo = get_theme_mod('footer_logo');
                    $img = wp_get_attachment_image_src($footer_logo, 'full');
                    if ($img) : ?>
                        <img src="<?php echo $img[0]; ?>" alt="Logo">
                    <?php endif; ?>
                </a>
                <?php
                    // Выводим сайтбар из файла sidebar-footer.php
                    get_sidebar('footer');
                ?>

                <a class="go-top" href="#body">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/arrow-top.svg" alt="Arrow top">
                </a>
            </div>
            <div class="footer__copy">
                <p>©<?php echo date('Y'); ?> | <?php echo get_bloginfo( 'name' ); ?></p>
            </div>
        </footer>
        <?php wp_footer(); ?>
    </body>
</html>
