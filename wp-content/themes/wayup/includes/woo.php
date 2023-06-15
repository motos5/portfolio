<?php
// Убераем старый сайдбар и заменяем его персональным.
// Удаление старого сайдбара
remove_action('woocommerce_sidebar', 'woocommerce_get_sidebar', 10);
// Добавляем свой сайдбар
add_action('woocommerce_sidebar', function(){
    get_sidebar('shoping');
});

// Отключаем хук woocommerce_archive_description
remove_action('woocommerce_archive_description', 'woocommerce_taxonomy_archive_description', 10);
remove_action('woocommerce_archive_description', 'woocommerce_product_archive_description', 10);

// Переносим уведомление о количестве показаннных товаров
// Отключаем из хука woocommerce_before_shop_loop
remove_action('woocommerce_before_shop_loop', 'woocommerce_result_count', 20);
// Добавляем в хук woocommerce_archive_description
add_action('woocommerce_archive_description', 'woocommerce_result_count', 10);

// Переносим сортировку товаров
// Отключаем из хука woocommerce_before_shop_loop
remove_action('woocommerce_before_shop_loop', 'woocommerce_catalog_ordering', 30);


// Отключаем woocommerce_breadcrumb
remove_action('woocommerce_before_main_content', 'woocommerce_breadcrumb', 20);

// ================== Карточка товара ====================== //
function wayup_product_link_before() {
    echo '<div class="products__img">';
}
function wayup_product_link_after() {
    echo '</div>';
}

function wayup_products__bottom_before() {
    echo '<div class="products__bottom">';
}
function wayup_products__bottom_after() {
    echo '</div>';
}

function wayup_product_data() {
    global $product;

    // Короткий заголовок для товара
    $short_product_title = get_field('short_product_title');
?>
    <div class="products__detail">
        <a href="<?php the_permalink(); ?>" class="products__name">
        <?php 
            if($short_product_title) {
                printf(esc_html__('%1$s', 'wayup'), $short_product_title);
            } else {
                echo substr(the_title(), 0, 10) . '...';
            }
        ?>
        </a>
        <div class="price">
            <?php echo $product->get_price_html(); ?>
            <!-- <div class="price__old"><span class="currency">$</span>89</div>
            <div class="price__now"><span class="currency">$</span>67</div> -->
        </div>
        <?php
            $rating_count = $product->get_rating_count();
            $average      = $product->get_average_rating();

            echo wc_get_rating_html( $average, $rating_count 	);
        ?>

        <!-- <div class="rate"></div> -->
    </div>
<?php }

function wayup_show_status() {
    $sale_button_label = get_field('sale_button_label');
	$sale_button_color = get_field('sale_button_color');

	if($sale_button_label && $sale_button_color) {
		echo '<span class="sale-status" style="background-color:' . $sale_button_color . ';">' . $sale_button_label . '</span>';
	}
}

// Ссылка обромляющая картинку и добавление своих тегов "div"
remove_action('woocommerce_after_shop_loop_item', 'woocommerce_template_loop_product_link_close', 5);
add_action('woocommerce_before_shop_loop_item', 'wayup_product_link_before', 5);
add_action('woocommerce_before_shop_loop_item_title', 'woocommerce_template_loop_product_link_close', 15);
add_action('woocommerce_before_shop_loop_item_title', 'wayup_product_link_after', 15);

add_action('woocommerce_shop_loop_item_title', 'wayup_products__bottom_before', 5);
add_action('woocommerce_after_shop_loop_item', 'wayup_products__bottom_after', 15);

remove_action('woocommerce_shop_loop_item_title', 'woocommerce_template_loop_product_title', 10);
add_action('woocommerce_shop_loop_item_title', 'wayup_product_data', 10);

remove_action('woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_rating', 5);
remove_action('woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_price', 10);

add_action('woocommerce_before_shop_loop_item', 'wayup_show_status', 10);

// Single Product Page
function wayup_sku_custom() {
    global $product;
?>
    <div class="product__article">
        <?php echo esc_html__('SKU', 'wayup'); ?>:
        <span class="product__article-value">
            <?php echo ( $sku = $product->get_sku() ) ? $sku : esc_html__( 'N/A', 'wayup' ); ?>
        </span>
    </div>
    <div class="availability
    <?php
        $product_availability = $product->get_availability();
        $in_stock = '';
        $out_of_stock = '';
        if($product_availability['class'] == 'in-stock') {
            echo 'true';
            $in_stock = $product_availability['availability'];
        } else if($product_availability['class'] == 'out-of-stock') {
            echo '';
            $out_of_stock = $product_availability['availability'];
        } else if($product_availability['class'] == 'available-on-backorder') {
            echo '';
            $out_of_stock = $product_availability['availability'];
        }
        ?>"><!-- Если у .availability нет класса .true – товара Нет в наличии -->
        <?php
        if(empty($in_stock)) {
            $in_stock = 'In stock';
        }
        ?>
        <span class="true"><?php echo esc_html($in_stock); ?></span>
        <span class="false"><?php echo esc_html($out_of_stock); ?></span>
        
    </div>
<?php }

function wayup_template_single_title() {
    // Короткий заголовок для товара
    $short_product_title = get_field('short_product_title'); ?>
    <h1 class="product__title">
        <?php
        if($short_product_title) {
            printf(esc_html__('%1$s', 'wayup'), $short_product_title);
        } else {
            the_title();
        }
        ?>
    </h1>
    <?php if(get_the_excerpt()) { ?>
        <p class="product__desc"><?php echo get_the_excerpt(); ?></p>
    <?php }
}

function wayup_product_price_simple() {
global $product;
?>
    <div class="product__price">
        
        <?php echo $product->get_price_html(); ?>
    </div>
<?php }

function wayup_share_links() { ?>
    <div class="share">
        <p class="share__title">
            Поделиться:
        </p>
        <ul class="social">
            <?php
                // Share Data
                $share_url = get_the_permalink();
                $title = get_the_title();
                $description = wayup_excerpt(30);
            ?>
            <li class="social__item">
                <span>Fb</span>
                <a class="social__icon social__icon_fb" href="<?php echo 'https://www.facebook.com/sharer.php?u=' . $share_url; ?>" onclick="window.open(this.href, 'Share on Facebook', 'width=600, height=400'); return false;">
                    <svg  width="14" height="17">
                        <use xlink:href="#facebook"/>
                    </svg>
                </a>
            </li>
            <li class="social__item">
                <span>Tw</span>
                <a class="social__icon social__icon_tw" href="<?php echo 'https://twitter.com/intent/tweet?url=' . $share_url . '&text=' . $description; ?>" onclick="window.open(this.href, 'Share on Twitter', 'width=600, height=400'); return false;">
                    <svg  width="18" height="15">
                        <use xlink:href="#twitter"/>
                    </svg>
                </a>
            </li>
        </ul>
    </div>
<?php }

add_action('woocommerce_single_product_summary', 'wayup_sku_custom', 4);

remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_excerpt', 20);


remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_title', 5);
add_action('woocommerce_single_product_summary', 'wayup_template_single_title', 5);

remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_price', 10);
add_action('woocommerce_before_add_to_cart_button', 'wayup_product_price_simple', 5);

remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40);

add_action('woocommerce_share', 'wayup_share_links', 10);

