<?php
$top_text = '';
if( is_page_template('template-login.php') ) {
	$top_text = 'Log in';
} else if( is_page_template('template-register.php') ) {
    $top_text = 'Register';
} else if( is_page_template('template-shop-catalog.php') ) {
    $top_text = 'Shop page';
} else if( is_page_template('template-product.php') ) {
    $top_text = 'Product';
} else if(is_home()) {
    $top_text = 'Blog page';
} else if(is_single()) {
    $top_text = 'Blog details';
}
?>
<setion class="top">
    <div class="top__container" style="background-image: url('<?php echo get_template_directory_uri() ?>/assets/img/top-header-bg.jpg');">
        <div class="container">
            <h2 class="title top__title"><?php printf(esc_html__('%1$s', 'marcho'), $top_text);  ?></h2>
            <div class="breadcrumbs">
                <ul class="breadcrumbs__list">
                    <li class="breadcrumbs__item">
                        <a class="breadcrumbs__link" href="<?php echo esc_url(home_url("/")); ?>">Home</a>
                    </li>
                    <li class="breadcrumbs__item">
                        <span class="breadcrumbs__link"><?php printf(esc_html__('%1$s', 'marcho'), $top_text);  ?></span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</setion>