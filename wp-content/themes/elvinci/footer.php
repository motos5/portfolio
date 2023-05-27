<?php
$footer_text = get_field('footer_text', 'option');

// Socials Items
$social_item = function() {
    if ( have_rows('socials', 'option') ) {
        while ( have_rows('socials', 'option') ) { the_row();
            $link = get_sub_field('link', 'option');
            $icon = get_sub_field('icon', 'option');
            ?>
            <?php if($link && $icon) { ?>
            <li class="footer__social-item">
                <a class="footer__social-link" href="<?php  printf(esc_url('%1$s', 'elvinci'), $link); ?>">
                    <img src="<?php echo esc_url($icon['url']); ?>" alt="<?php echo esc_attr($icon['alt']); ?>">
                </a>
            </li>
        <?php }}
    }};
?>

<footer class="footer">
    <div class="container">
        <div class="footer__inner">
            <div class="footer__text">
                <p>
                    <?php printf(esc_html__('%1$s', 'elvinci'), $footer_text); ?>
                </p>
            </div>
            <ul class="footer__category-list">
                <?php $group_category = get_field('category', 'option');
                if ($group_category) {
                    foreach ($group_category as $key => $item) {
                        if ($item) { ?>
                            <li class="footer__category-item">
                                <a class="footer__category-link" href="#"><?php echo esc_html__($group_category[$key]); ?></a>
                            </li>
                <?php }}} ?>
            </ul>
            <ul class="footer__tag-list">
            <?php $group_tag = get_field('tag', 'option');
                if ($group_tag) {
                    foreach ($group_tag as $key => $item) {
                        if ($item) { ?>
                            <li class="footer__tag-item">
                                <a class="footer__tag-link" href="#"><?php echo esc_html__($group_tag[$key]); ?></a>
                            </li>
                <?php }}} ?>
            </ul>
            <div class="footer__social">
                <h4 class="footer__social-title"><?php echo esc_html__('Follow us', 'elvinci') ?>:</h4>
                <ul class="footer__social-list">
                    <?php $social_item(); ?>
                </ul>
            </div>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>

</body>
</html>
