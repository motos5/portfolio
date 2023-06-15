<?php global $product; ?>
<div id="one-click" class="click mfp-hide">
    <form action="#" id="popupOrder" class="click__form log order-form">
        <div class="click__half">
            <p class="click__head">Купить в один клик</p>
            <p class="click__text">Оставьте свои контакнтые данные и мы свяжемся с вами в ближайшее время для уточнения заказа</p>
            <div class="log__group">
                <label>Имя</label>
                <input type="text" name="name" class="log__input">
            </div>
            <div class="log__group">
                <label>Телефон</label>
                <input type="tel" name="tel" class="log__input">
            </div>
            <div class="log__btn">
                <input id="ordered" type="submit" data-submit value="Отправить" class="btn"/>
            </div>
        </div>
        <div class="click__half">
            <p class="click__info">Информация о заказе</p>
            <div class="result">
                <div class="result__block">
                    <a href="<?php the_permalink(); ?>" class="result__image">
                        <?php echo get_the_post_thumbnail(get_the_ID(), 'medium'); ?>
                    </a>
                    <div class="result__desc">
                        <a href="<?php the_permalink(); ?>" class="result__title">
                        <?php 
                            $short_product_title = get_field('short_product_title');

                            if($short_product_title) {
                                printf(esc_html__('%1$s', 'wayup'), $short_product_title);
                            } else {
                                the_title();
                            }
                        ?>
                        </a>
                        <div class="result__price">
                            <?php echo $product->get_price_html(); ?>
                        </div>
                        <div class="quantity">
                            <span class="minus-popup" data-link="<?php the_permalink(); ?>?add-to-cart=<?php echo get_the_ID(); ?>" data-price="<?php echo $product->get_price(); ?>">-</span>
                            <input type="text" step="1" min="1" name="quantity" value="1" size="4" pattern="[0-9]*"/>
                            <span class="plus-popup" data-link="<?php the_permalink(); ?>?add-to-cart=<?php echo get_the_ID(); ?>" data-price="<?php echo $product->get_price(); ?>">+</span>
                        </div>
                    
                        <div class="result__cost">
                            <p>Итого:</p> <?php echo get_woocommerce_currency_symbol(); ?><span id="final-popup-price"><?php echo $product->get_price(); ?></span>
                        </div>
                        <a href="<?php the_permalink(); ?>?add-to-cart=<?php echo get_the_ID(); ?>" class="click__link link-more" id="add_popup_cart">
                            <svg width="18" height="20">
                                <use xlink:href="#nav-right"/>
                            </svg>
                            Перейти в корзину
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>

<!-- Order -->
<div id="taken" class="sub mfp-hide">
    <p class="sub__thank">Спасибо!</p>
    <p class="sub__text">Ваша заявка принята. Наши специалисты свяжутся с вами в ближайшее время.</p>
</div>



		