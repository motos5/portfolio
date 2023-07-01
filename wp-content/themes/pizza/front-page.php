<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <!-- section-top -->
    <section class="section-top">
        <div class="container section-top__container">
            <div class="section-top__inner">
                <p class="section-top__info">from an Italian chef</p>
                <h1 class="section-top__title">The best pizza in the city of Dnipro</h1>
                <div class="section-top__btn">
                    <button class="btn" type="button">Choose</button>
                </div>
            </div>
        </div>
    </section>
	<!-- End section-top -->

    <!-- Section Catalog -->
    <section class="section catalog">
        <div class="container catalog__container">
            <header class="catalog-header">
                <h2 class="catalog-header__title">Menu</h2>
                <nav class="catalog-nav">
                    <ul class="catalog-nav__list">
                        <li class="catalog-nav__item">
                            <button class="catalog-nav__btn catalog-nav__btn--active" type="button">all</button>
                        </li>
                        <li class="catalog-nav__item">
                            <button class="catalog-nav__btn" type="button">mushroom</button>
                        </li>
                        <li class="catalog-nav__item">
                            <button class="catalog-nav__btn" type="button">meat</button>
                        </li>
                        <li class="catalog-nav__item">
                            <button class="catalog-nav__btn" type="button">cheese</button>
                        </li>
                    </ul>
                </nav>
            </header>
            <div class="catalog-content">
                <div class="catalog-content__item">
                    <div class="product catalog-content__product">
                        <img class="product__img" src="<?php echo get_template_directory_uri() ?>/assets/img/catalog/1.png" alt="Product">
                        <div class="product__content">
                            <h3 class="product__title">Салями</h3>
                            <p class="product__description">
                                Салями, картофель и морковь, огурцы маринованные, моцарелла, цыпленок, ветчина и французский соус.
                            </p>
                        </div>
                        <div class="product__footer">
                            <div class="product__sizes">
                                <button class="product__size product__size--active" type="button">35см</button>
                                <button class="product__size" type="button">30см</button>
                                <button class="product__size" type="button">25см</button>
                            </div>
                            <div class="product__bottom">
                                <div class="product__price">
                                    <span class="product__price-value">350</span>
                                    <span class="product__price-currency">&#8372;</span>
                                </div>
                                <button class="btn product__btn" type="button">заказать</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="catalog-content__item">
                    <div class="product catalog-content__product">
                        <img class="product__img" src="<?php echo get_template_directory_uri() ?>/assets/img/catalog/2.png" alt="Product">
                        <div class="product__content">
                            <h3 class="product__title">Хит</h3>
                            <p class="product__description">
                            Картофель и морковь, огурцы маринованные, моцарелла, цыпленок, ветчина и французский соус.
                            </p>
                        </div>
                        <div class="product__footer">
                            <div class="product__sizes">
                                <button class="product__size product__size--active" type="button">35см</button>
                                <button class="product__size" type="button">30см</button>
                                <button class="product__size" type="button">25см</button>
                            </div>
                            <div class="product__bottom">
                                <div class="product__price">
                                    <span class="product__price-value">450</span>
                                    <span class="product__price-currency">&#8372;</span>
                                </div>
                                <button class="btn product__btn" type="button">заказать</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="catalog-content__item">
                    <div class="product catalog-content__product">
                        <img class="product__img" src="<?php echo get_template_directory_uri() ?>/assets/img/catalog/3.png" alt="Product">
                        <div class="product__content">
                            <h3 class="product__title">Ветчина-грибы</h3>
                            <p class="product__description">
                                Салями, картофель и морковь, огурцы маринованные, моцарелла, цыпленок, ветчина и французский соус.
                            </p>
                        </div>
                        <div class="product__footer">
                            <div class="product__sizes">
                                <button class="product__size product__size--active" type="button">35см</button>
                                <button class="product__size" type="button">30см</button>
                                <button class="product__size" type="button">25см</button>
                            </div>
                            <div class="product__bottom">
                                <div class="product__price">
                                    <span class="product__price-value">380</span>
                                    <span class="product__price-currency">&#8372;</span>
                                </div>
                                <button class="btn product__btn" type="button">заказать</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="catalog-content__item">
                    <div class="product catalog-content__product">
                        <img class="product__img" src="<?php echo get_template_directory_uri() ?>/assets/img/catalog/4.png" alt="Product">
                        <div class="product__content">
                            <h3 class="product__title">Карбонара</h3>
                            <p class="product__description">
                            Салями, курица, моцарелла, говядина, ветчина и французский соус.
                            </p>
                        </div>
                        <div class="product__footer">
                            <div class="product__sizes">
                                <button class="product__size product__size--active" type="button">35см</button>
                                <button class="product__size" type="button">30см</button>
                                <button class="product__size" type="button">25см</button>
                            </div>
                            <div class="product__bottom">
                                <div class="product__price">
                                    <span class="product__price-value">620</span>
                                    <span class="product__price-currency">&#8372;</span>
                                </div>
                                <button class="btn product__btn" type="button">заказать</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="catalog-content__item">
                    <div class="product catalog-content__product">
                        <img class="product__img" src="<?php echo get_template_directory_uri() ?>/assets/img/catalog/5.png" alt="Product">
                        <div class="product__content">
                            <h3 class="product__title">Фирменная</h3>
                            <p class="product__description">
                                Томатно-сливочный соус, бекон, моцарелла.
                            </p>
                        </div>
                        <div class="product__footer">
                            <div class="product__sizes">
                                <button class="product__size product__size--active" type="button">35см</button>
                                <button class="product__size" type="button">30см</button>
                                <button class="product__size" type="button">25см</button>
                            </div>
                            <div class="product__bottom">
                                <div class="product__price">
                                    <span class="product__price-value">490</span>
                                    <span class="product__price-currency">&#8372;</span>
                                </div>
                                <button class="btn product__btn" type="button">заказать</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="catalog-content__item">
                    <div class="product catalog-content__product">
                        <img class="product__img" src="<?php echo get_template_directory_uri() ?>/assets/img/catalog/6.png" alt="Product">
                        <div class="product__content">
                            <h3 class="product__title">Ассорти</h3>
                            <p class="product__description">
                                Салями, картофель и морковь, огурцы маринованные, моцарелла, цыпленок, ветчина и французский соус.
                            </p>
                        </div>
                        <div class="product__footer">
                            <div class="product__sizes">
                                <button class="product__size product__size--active" type="button">35см</button>
                                <button class="product__size" type="button">30см</button>
                                <button class="product__size" type="button">25см</button>
                            </div>
                            <div class="product__bottom">
                                <div class="product__price">
                                    <span class="product__price-value">450</span>
                                    <span class="product__price-currency">&#8372;</span>
                                </div>
                                <button class="btn product__btn" type="button">заказать</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="catalog-content__item">
                    <div class="product catalog-content__product">
                        <img class="product__img" src="<?php echo get_template_directory_uri() ?>/assets/img/catalog/7.png" alt="Product">
                        <div class="product__content">
                            <h3 class="product__title">Л-01</h3>
                            <p class="product__description">
                            Томаты, моцарелла, цыпленок, ветчина и французский соус, секректныйингредиент 
                            </p>
                        </div>
                        <div class="product__footer">
                            <div class="product__sizes">
                                <button class="product__size product__size--active" type="button">35см</button>
                                <button class="product__size" type="button">30см</button>
                                <button class="product__size" type="button">25см</button>
                            </div>
                            <div class="product__bottom">
                                <div class="product__price">
                                    <span class="product__price-value">520</span>
                                    <span class="product__price-currency">&#8372;</span>
                                </div>
                                <button class="btn product__btn" type="button">заказать</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="catalog-content__item">
                    <div class="product catalog-content__product">
                        <img class="product__img" src="<?php echo get_template_directory_uri() ?>/assets/img/catalog/8.png" alt="Product">
                        <div class="product__content">
                            <h3 class="product__title">Три сыра</h3>
                            <p class="product__description">
                                Чеддер, камамбер, эдам.
                            </p>
                        </div>
                        <div class="product__footer">
                            <div class="product__sizes">
                                <button class="product__size product__size--active" type="button">35см</button>
                                <button class="product__size" type="button">30см</button>
                                <button class="product__size" type="button">25см</button>
                            </div>
                            <div class="product__bottom">
                                <div class="product__price">
                                    <span class="product__price-value">590</span>
                                    <span class="product__price-currency">&#8372;</span>
                                </div>
                                <button class="btn product__btn" type="button">заказать</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="catalog-content__item">
                    <div class="product catalog-content__product">
                        <img class="product__img" src="<?php echo get_template_directory_uri() ?>/assets/img/catalog/9.png" alt="Product">
                        <div class="product__content">
                            <h3 class="product__title">Мясная</h3>
                            <p class="product__description">
                                Курица, говядина, сливочный соус, салями, огурцы маринованные, томаты, грибы, бекон.
                            </p>
                        </div>
                        <div class="product__footer">
                            <div class="product__sizes">
                                <button class="product__size product__size--active" type="button">35см</button>
                                <button class="product__size" type="button">30см</button>
                                <button class="product__size" type="button">25см</button>
                            </div>
                            <div class="product__bottom">
                                <div class="product__price">
                                    <span class="product__price-value">650</span>
                                    <span class="product__price-currency">&#8372;</span>
                                </div>
                                <button class="btn product__btn" type="button">заказать</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- End Section Catalog -->



<?php endwhile; else: ?>
	<p><?php echo esc_html__('Content not found.', 'wawe_setup'); ?></p>
<?php endif; ?>

<?php get_footer();