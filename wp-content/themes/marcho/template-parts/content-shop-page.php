<section class="shop">
    <div class="container">
        <div class="shop__inner">
            <div class="shop__filters filter">

                <div class="filter-search filter__item">
                    <h3 class="filter__title">Search</h3>
                    <form class="filter-search__form" action="#">
                        <input class="filter-search__input" type="text" placeholder="Search your keyword....">
                        <button class="filter-search__btn" type="submit">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/icons/search-white.svg" alt="Search">
                        </button>
                    </form>
                </div>
                <div class="filter-price filter__item">
                    <h3 class="filter__title">Price Filter</h3>
                    <form class="filter-price__form" action="#">
                        <input class="filter-price__input" type="text"
                            data-min="0"
                            data-max="999"
                            data-from="200"
                            data-to="800"
                        >
                        <div class="filter-price__bottom">
                            <span>
                                Price:
                                $<span class="filter-price__from"></span> -
                                $<span class="filter-price__to"></span>
                            </span>
                            <button class="filter-price__btn" type="submit">Fiter</button>
                        </div>
                    </form>
                </div>
                <div class="filter-color filter__item">
                    <h3 class="filter__title">Color Filter</h3>
                    <form class="filter-color__form" action="#">
                        <label class="filter-color__label">
                            <span class="filter-color__text">Blue (15)</span>
                            <div class="filter-color__box">
                                <input class="filter-color__input" type="checkbox">
                                <span class="filter-color__checkbox filter-color__checkbox--blue"></span>
                            </div>
                        </label>
                        <label class="filter-color__label">
                            <span class="filter-color__text">Red (09)</span>
                            <div class="filter-color__box">
                                <input class="filter-color__input" type="checkbox">
                                <span class="filter-color__checkbox filter-color__checkbox--red"></span>
                            </div>
                        </label>
                        <label class="filter-color__label">
                            <span class="filter-color__text">Green (28)</span>
                            <div class="filter-color__box">
                                <input class="filter-color__input" type="checkbox">
                                <span class="filter-color__checkbox filter-color__checkbox--green"></span>
                            </div>
                        </label>
                        <label class="filter-color__label">
                            <span class="filter-color__text">Orange (11)</span>
                            <div class="filter-color__box">
                                <input class="filter-color__input" type="checkbox">
                                <span class="filter-color__checkbox filter-color__checkbox--orange"></span>
                            </div>
                        </label>
                        <label class="filter-color__label">
                            <span class="filter-color__text">Black (05)</span>
                            <div class="filter-color__box">
                                <input class="filter-color__input" type="checkbox">
                                <span class="filter-color__checkbox filter-color__checkbox--black"></span>
                            </div>
                        </label>
                        <label class="filter-color__label">
                            <span class="filter-color__text">Purple (21)</span>
                            <div class="filter-color__box">
                                <input class="filter-color__input" type="checkbox">
                                <span class="filter-color__checkbox filter-color__checkbox--purple"></span>
                            </div>
                        </label>
                    </form>
                </div>
                <div class="filter-size filter__item">
                    <h3 class="filter__title">Size Filter</h3>
                    <form class="filter-size__form" action="#">
                        <label class="filter-size__label">
                            <input class="filter-size__input" type="checkbox">
                            <span class="filter-size__checkbox"></span>
                            <span class="filter-size__text">X-small</span>
                        </label>
                        <label class="filter-size__label">
                            <input class="filter-size__input" type="checkbox">
                            <span class="filter-size__checkbox"></span>
                            <span class="filter-size__text">Small</span>
                        </label>
                        <label class="filter-size__label">
                            <input class="filter-size__input" type="checkbox">
                            <span class="filter-size__checkbox"></span>
                            <span class="filter-size__text">Medium</span>
                        </label>
                        <label class="filter-size__label">
                            <input class="filter-size__input" type="checkbox">
                            <span class="filter-size__checkbox"></span>
                            <span class="filter-size__text">Large</span>
                        </label>
                        <label class="filter-size__label">
                            <input class="filter-size__input" type="checkbox">
                            <span class="filter-size__checkbox"></span>
                            <span class="filter-size__text">XXL</span>
                        </label>
                    </form>
                </div>
                <div class="filter-category filter__item">
                    <h3 class="filter__title">Category</h3>
                    <form class="filter-category__form" action="#">
                        <label class="filter-category__label">
                            <input class="filter-category__input" type="checkbox">
                            <div class="filter-category__checkbox">
                                <span>Woman</span>
                                <span>48</span>
                            </div>
                        </label>
                        <label class="filter-category__label">
                            <input class="filter-category__input" type="checkbox">
                            <div class="filter-category__checkbox">
                                <span>Man</span>
                                <span>30</span>
                            </div>
                        </label>
                        <label class="filter-category__label">
                            <input class="filter-category__input" type="checkbox">
                            <div class="filter-category__checkbox">
                                <span>Sale Products</span>
                                <span>92</span>
                            </div>
                        </label>
                        <label class="filter-category__label">
                            <input class="filter-category__input" type="checkbox">
                            <div class="filter-category__checkbox">
                                <span>Fashion</span>
                                <span>121</span>
                            </div>
                        </label>
                        <label class="filter-category__label">
                            <input class="filter-category__input" type="checkbox">
                            <div class="filter-category__checkbox">
                                <span>Hot Dresses</span>
                                <span>52</span>
                            </div>
                        </label>
                        <label class="filter-category__label">
                            <input class="filter-category__input" type="checkbox">
                            <div class="filter-category__checkbox">
                                <span>Accessories</span>
                                <span>88</span>
                            </div>
                        </label>
                    </form>
                </div>
                <div class="filter-tags filter__item">
                    <h3 class="filter__title">Popular Tags</h3>
                    <form class="filter-tags__form" action="#">
                        <label class="filter-tags__label">
                            <input class="filter-tags__input" type="checkbox">
                            <span class="filter-tags__checkbox">Sweetshirt</span>
                        </label>
                        <label class="filter-tags__label">
                            <input class="filter-tags__input" type="checkbox">
                            <span class="filter-tags__checkbox">Man Accessories</span>
                        </label>
                        <label class="filter-tags__label">
                            <input class="filter-tags__input" type="checkbox">
                            <span class="filter-tags__checkbox">Fashion</span>
                        </label>
                        <label class="filter-tags__label">
                            <input class="filter-tags__input" type="checkbox">
                            <span class="filter-tags__checkbox">Polo</span>
                        </label>
                        <label class="filter-tags__label">
                            <input class="filter-tags__input" type="checkbox">
                            <span class="filter-tags__checkbox">T-Shirt</span>
                        </label>
                        <label class="filter-tags__label">
                            <input class="filter-tags__input" type="checkbox">
                            <span class="filter-tags__checkbox">Jewellery</span>
                        </label>
                    </form>
                </div>
            </div>

            <div class="shop-content">
                <div class="shop-content__filter">
                    <div class="shop-content__filter-buttons">
                        <span>View</span>
                        <button class="shop-content__filter-btn shop-content__filter-btn--active button-grid">
                            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15">
                                <path fill="#8D8D8D" fill-rule="evenodd" d="M0 3.75h3.75V0H0v3.75ZM5.625 15h3.75v-3.75h-3.75V15ZM0 15h3.75v-3.75H0V15Zm0-5.625h3.75v-3.75H0v3.75Zm5.625 0h3.75v-3.75h-3.75v3.75ZM11.25 0v3.75H15V0h-3.75ZM5.625 3.75h3.75V0h-3.75v3.75Zm5.625 5.625H15v-3.75h-3.75v3.75Zm0 5.625H15v-3.75h-3.75V15Z"/>
                            </svg>
                        </button>
                        <button class="shop-content__filter-btn button-list">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="15">
                                <path fill="#8D8D8D" fill-rule="evenodd" d="M5.835 14.998v-4.171h14.159v4.171H5.835Zm0-9.585h14.159v4.172H5.835V5.413Zm0-5.413h14.159v4.172H5.835V0ZM.007 10.827h4.422v4.171H.007v-4.171Zm0-5.414h4.422v4.172H.007V5.413ZM.007 0h4.422v4.172H.007V0Z"/>
                            </svg>
                        </button>
                    </div>
                    <div class="shop-content__filter-selects">
                        <div class="shop-content__filter-box">
                            <select class="shop-content__filter-sort" name="sort">
                                <option value="default">Sort By Default</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                            </select>
                        </div>

                        <div class="shop-content__filter-box">
                            <select class="shop-content__filter-show" name="show">
                                <option value="sow-9">Show 9</option>
                                <option value="sow-2">2</option>
                                <option value="sow-3">3</option>
                                <option value="sow-4">4</option>
                            </select>
                        </div>
                        
                    </div>
                </div>
                <div class="shop-content__inner">

                    <div class="product-item">
                        <div class="product-item__img-box">
                            <img class="product-item__images" src="<?php echo get_template_directory_uri() ?>/app/images/product/1.jpg" alt="Product">
                            <div class="product-item__link-box">
                                <a class="product-item__link" href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="19" height="20">
                                        <path fill-rule="evenodd" d="m18.709 18.219-4.681-4.95a8.142 8.142 0 0 0 1.863-5.194c0-4.453-3.563-8.077-7.944-8.077C3.568-.002.005 3.622.005 8.075c0 4.454 3.563 8.078 7.942 8.078a7.756 7.756 0 0 0 4.551-1.463l4.718 4.99a1.022 1.022 0 0 0 1.464.03 1.068 1.068 0 0 0 .029-1.491ZM7.947 2.106c3.238 0 5.872 2.679 5.872 5.969 0 3.292-2.634 5.971-5.872 5.971-3.236 0-5.869-2.679-5.869-5.971 0-3.29 2.633-5.969 5.869-5.969Z"/>
                                    </svg>
                                </a>
                                <a class="product-item__link product-item__link--line" href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="20">
                                        <path fill-rule="evenodd" d="M15.999 17.294 14.854 4.396a.55.55 0 0 0-.547-.504h-2.354A3.953 3.953 0 0 0 8.005.002a3.953 3.953 0 0 0-3.948 3.89H1.703a.547.547 0 0 0-.547.504L.011 17.294c0 .017-.004.033-.004.049 0 1.469 1.345 2.663 3 2.663h9.996c1.655 0 3-1.194 3-2.663 0-.016 0-.032-.004-.049ZM8.005 1.106a2.848 2.848 0 0 1 2.844 2.786H5.161a2.848 2.848 0 0 1 2.844-2.786Zm4.998 17.796H3.007c-1.038 0-1.88-.687-1.896-1.534L2.206 5.001h1.847v1.677a.55.55 0 0 0 .552.552.55.55 0 0 0 .552-.552V5.001h5.692v1.677a.55.55 0 0 0 .552.552.55.55 0 0 0 .552-.552V5.001H13.8l1.099 12.367c-.016.847-.862 1.534-1.896 1.534Z"/>
                                    </svg>
                                </a>
                                <a class="product-item__link" href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="23" height="20">
                                        <path fill-rule="evenodd" d="M16.894-.001c-2.424 0-3.959 1.424-4.82 2.619a8.851 8.851 0 0 0-.573.914 8.522 8.522 0 0 0-.573-.914c-.86-1.195-2.395-2.619-4.82-2.619-1.724 0-3.298.698-4.433 1.965C.593 3.172-.004 4.791-.004 6.521c0 1.884.748 3.636 2.353 5.513 1.434 1.679 3.498 3.409 5.887 5.413.891.746 1.811 1.518 2.792 2.362l.029.025a.678.678 0 0 0 .888 0l.03-.025c.98-.844 1.901-1.616 2.791-2.362 2.39-2.004 4.453-3.734 5.887-5.413 1.605-1.877 2.353-3.629 2.353-5.513 0-1.73-.596-3.349-1.679-4.557C20.192.696 18.618-.001 16.894-.001Zm-3.002 16.438a301.82 301.82 0 0 0-2.391 2.018c-.833-.712-1.623-1.374-2.39-2.018-4.677-3.921-7.766-6.511-7.766-9.916 0-1.407.476-2.715 1.342-3.681a4.53 4.53 0 0 1 3.421-1.515c1.849 0 3.043 1.12 3.72 2.06a7.819 7.819 0 0 1 1.032 2.019.674.674 0 0 0 .641.458.673.673 0 0 0 .641-.458 7.819 7.819 0 0 1 1.032-2.019c.677-.94 1.872-2.06 3.72-2.06 1.331 0 2.546.538 3.422 1.515.865.966 1.342 2.274 1.342 3.681 0 3.405-3.09 5.995-7.766 9.916Z"/>
                                    </svg>
                                </a>
                            </div>
                        </div>
                        <div class="product-item__info-box">
                            <div class="product-item__info">
                                <div class="star">
                                    <img class="star__img" src="<?php echo get_template_directory_uri() ?>/app/images/icons/rating.png" alt="Rating">
                                </div>
                                <h4 class="product-item__title">White Polo Men’s T-Shirt</h4>
                                <div class="product-item__prices">
                                    <div class="product-item__new-price">$34.00</div>
                                    <div class="product-item__old-price">$27.00</div>
                                </div>
                            </div>
                            <div class="product-item__content-box">
                                <p class="product-item__text">
                                    Lorem ipsum dolor sit amet, adipiscing elit, sed de eusmod  utlitoi labore et dolore magna aliqua.
                                </p>
                                <button class="product-item__btn">Add to cart</button>
                            </div>
                        </div>
                    </div>
                    <div class="product-item product-item--sale">
                        <div class="product-item__img-box">
                            <img class="product-item__images" src="<?php echo get_template_directory_uri() ?>/app/images/product/2.jpg" alt="Product">
                            <div class="product-item__link-box">
                                <a class="product-item__link" href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="19" height="20">
                                        <path fill-rule="evenodd" d="m18.709 18.219-4.681-4.95a8.142 8.142 0 0 0 1.863-5.194c0-4.453-3.563-8.077-7.944-8.077C3.568-.002.005 3.622.005 8.075c0 4.454 3.563 8.078 7.942 8.078a7.756 7.756 0 0 0 4.551-1.463l4.718 4.99a1.022 1.022 0 0 0 1.464.03 1.068 1.068 0 0 0 .029-1.491ZM7.947 2.106c3.238 0 5.872 2.679 5.872 5.969 0 3.292-2.634 5.971-5.872 5.971-3.236 0-5.869-2.679-5.869-5.971 0-3.29 2.633-5.969 5.869-5.969Z"/>
                                    </svg>
                                </a>
                                <a class="product-item__link product-item__link--line" href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="20">
                                        <path fill-rule="evenodd" d="M15.999 17.294 14.854 4.396a.55.55 0 0 0-.547-.504h-2.354A3.953 3.953 0 0 0 8.005.002a3.953 3.953 0 0 0-3.948 3.89H1.703a.547.547 0 0 0-.547.504L.011 17.294c0 .017-.004.033-.004.049 0 1.469 1.345 2.663 3 2.663h9.996c1.655 0 3-1.194 3-2.663 0-.016 0-.032-.004-.049ZM8.005 1.106a2.848 2.848 0 0 1 2.844 2.786H5.161a2.848 2.848 0 0 1 2.844-2.786Zm4.998 17.796H3.007c-1.038 0-1.88-.687-1.896-1.534L2.206 5.001h1.847v1.677a.55.55 0 0 0 .552.552.55.55 0 0 0 .552-.552V5.001h5.692v1.677a.55.55 0 0 0 .552.552.55.55 0 0 0 .552-.552V5.001H13.8l1.099 12.367c-.016.847-.862 1.534-1.896 1.534Z"/>
                                    </svg>
                                </a>
                                <a class="product-item__link" href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="23" height="20">
                                        <path fill-rule="evenodd" d="M16.894-.001c-2.424 0-3.959 1.424-4.82 2.619a8.851 8.851 0 0 0-.573.914 8.522 8.522 0 0 0-.573-.914c-.86-1.195-2.395-2.619-4.82-2.619-1.724 0-3.298.698-4.433 1.965C.593 3.172-.004 4.791-.004 6.521c0 1.884.748 3.636 2.353 5.513 1.434 1.679 3.498 3.409 5.887 5.413.891.746 1.811 1.518 2.792 2.362l.029.025a.678.678 0 0 0 .888 0l.03-.025c.98-.844 1.901-1.616 2.791-2.362 2.39-2.004 4.453-3.734 5.887-5.413 1.605-1.877 2.353-3.629 2.353-5.513 0-1.73-.596-3.349-1.679-4.557C20.192.696 18.618-.001 16.894-.001Zm-3.002 16.438a301.82 301.82 0 0 0-2.391 2.018c-.833-.712-1.623-1.374-2.39-2.018-4.677-3.921-7.766-6.511-7.766-9.916 0-1.407.476-2.715 1.342-3.681a4.53 4.53 0 0 1 3.421-1.515c1.849 0 3.043 1.12 3.72 2.06a7.819 7.819 0 0 1 1.032 2.019.674.674 0 0 0 .641.458.673.673 0 0 0 .641-.458 7.819 7.819 0 0 1 1.032-2.019c.677-.94 1.872-2.06 3.72-2.06 1.331 0 2.546.538 3.422 1.515.865.966 1.342 2.274 1.342 3.681 0 3.405-3.09 5.995-7.766 9.916Z"/>
                                    </svg>
                                </a>
                            </div>
                        </div>
                        <div class="product-item__info-box">
                            <div class="product-item__info">
                                <div class="star">
                                    <img class="star__img" src="<?php echo get_template_directory_uri() ?>/app/images/icons/rating.png" alt="Rating">
                                </div>
                                <h4 class="product-item__title">White Polo Men’s T-Shirt</h4>
                                <div class="product-item__prices">
                                    <div class="product-item__new-price">$34.00</div>
                                    <div class="product-item__old-price">$27.00</div>
                                </div>
                            </div>
                            <div class="product-item__content-box">
                                <p class="product-item__text">
                                    Lorem ipsum dolor sit amet, adipiscing elit, sed de eusmod  utlitoi labore et dolore magna aliqua.
                                </p>
                                <button class="product-item__btn">Add to cart</button>
                            </div>
                        </div>
                    </div>
                    <div class="product-item">
                        <div class="product-item__img-box">
                            <img class="product-item__images" src="<?php echo get_template_directory_uri() ?>/app/images/product/3.jpg" alt="Product">
                            <div class="product-item__link-box">
                                <a class="product-item__link" href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="19" height="20">
                                        <path fill-rule="evenodd" d="m18.709 18.219-4.681-4.95a8.142 8.142 0 0 0 1.863-5.194c0-4.453-3.563-8.077-7.944-8.077C3.568-.002.005 3.622.005 8.075c0 4.454 3.563 8.078 7.942 8.078a7.756 7.756 0 0 0 4.551-1.463l4.718 4.99a1.022 1.022 0 0 0 1.464.03 1.068 1.068 0 0 0 .029-1.491ZM7.947 2.106c3.238 0 5.872 2.679 5.872 5.969 0 3.292-2.634 5.971-5.872 5.971-3.236 0-5.869-2.679-5.869-5.971 0-3.29 2.633-5.969 5.869-5.969Z"/>
                                    </svg>
                                </a>
                                <a class="product-item__link product-item__link--line" href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="20">
                                        <path fill-rule="evenodd" d="M15.999 17.294 14.854 4.396a.55.55 0 0 0-.547-.504h-2.354A3.953 3.953 0 0 0 8.005.002a3.953 3.953 0 0 0-3.948 3.89H1.703a.547.547 0 0 0-.547.504L.011 17.294c0 .017-.004.033-.004.049 0 1.469 1.345 2.663 3 2.663h9.996c1.655 0 3-1.194 3-2.663 0-.016 0-.032-.004-.049ZM8.005 1.106a2.848 2.848 0 0 1 2.844 2.786H5.161a2.848 2.848 0 0 1 2.844-2.786Zm4.998 17.796H3.007c-1.038 0-1.88-.687-1.896-1.534L2.206 5.001h1.847v1.677a.55.55 0 0 0 .552.552.55.55 0 0 0 .552-.552V5.001h5.692v1.677a.55.55 0 0 0 .552.552.55.55 0 0 0 .552-.552V5.001H13.8l1.099 12.367c-.016.847-.862 1.534-1.896 1.534Z"/>
                                    </svg>
                                </a>
                                <a class="product-item__link" href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="23" height="20">
                                        <path fill-rule="evenodd" d="M16.894-.001c-2.424 0-3.959 1.424-4.82 2.619a8.851 8.851 0 0 0-.573.914 8.522 8.522 0 0 0-.573-.914c-.86-1.195-2.395-2.619-4.82-2.619-1.724 0-3.298.698-4.433 1.965C.593 3.172-.004 4.791-.004 6.521c0 1.884.748 3.636 2.353 5.513 1.434 1.679 3.498 3.409 5.887 5.413.891.746 1.811 1.518 2.792 2.362l.029.025a.678.678 0 0 0 .888 0l.03-.025c.98-.844 1.901-1.616 2.791-2.362 2.39-2.004 4.453-3.734 5.887-5.413 1.605-1.877 2.353-3.629 2.353-5.513 0-1.73-.596-3.349-1.679-4.557C20.192.696 18.618-.001 16.894-.001Zm-3.002 16.438a301.82 301.82 0 0 0-2.391 2.018c-.833-.712-1.623-1.374-2.39-2.018-4.677-3.921-7.766-6.511-7.766-9.916 0-1.407.476-2.715 1.342-3.681a4.53 4.53 0 0 1 3.421-1.515c1.849 0 3.043 1.12 3.72 2.06a7.819 7.819 0 0 1 1.032 2.019.674.674 0 0 0 .641.458.673.673 0 0 0 .641-.458 7.819 7.819 0 0 1 1.032-2.019c.677-.94 1.872-2.06 3.72-2.06 1.331 0 2.546.538 3.422 1.515.865.966 1.342 2.274 1.342 3.681 0 3.405-3.09 5.995-7.766 9.916Z"/>
                                    </svg>
                                </a>
                            </div>
                        </div>
                        <div class="product-item__info-box">
                            <div class="product-item__info">
                                <div class="star">
                                    <img class="star__img" src="<?php echo get_template_directory_uri() ?>/app/images/icons/rating.png" alt="Rating">
                                </div>
                                <h4 class="product-item__title">White Polo Men’s T-Shirt</h4>
                                <div class="product-item__prices">
                                    <div class="product-item__new-price">$34.00</div>
                                    <div class="product-item__old-price">$27.00</div>
                                </div>
                            </div>
                            <div class="product-item__content-box">
                                <p class="product-item__text">
                                    Lorem ipsum dolor sit amet, adipiscing elit, sed de eusmod  utlitoi labore et dolore magna aliqua.
                                </p>
                                <button class="product-item__btn">Add to cart</button>
                            </div>
                        </div>
                    </div>
                    <div class="product-item product-item--sale">
                        <div class="product-item__img-box">
                            <img class="product-item__images" src="<?php echo get_template_directory_uri() ?>/app/images/product/4.jpg" alt="Product">
                            <div class="product-item__link-box">
                                <a class="product-item__link" href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="19" height="20">
                                        <path fill-rule="evenodd" d="m18.709 18.219-4.681-4.95a8.142 8.142 0 0 0 1.863-5.194c0-4.453-3.563-8.077-7.944-8.077C3.568-.002.005 3.622.005 8.075c0 4.454 3.563 8.078 7.942 8.078a7.756 7.756 0 0 0 4.551-1.463l4.718 4.99a1.022 1.022 0 0 0 1.464.03 1.068 1.068 0 0 0 .029-1.491ZM7.947 2.106c3.238 0 5.872 2.679 5.872 5.969 0 3.292-2.634 5.971-5.872 5.971-3.236 0-5.869-2.679-5.869-5.971 0-3.29 2.633-5.969 5.869-5.969Z"/>
                                    </svg>
                                </a>
                                <a class="product-item__link product-item__link--line" href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="20">
                                        <path fill-rule="evenodd" d="M15.999 17.294 14.854 4.396a.55.55 0 0 0-.547-.504h-2.354A3.953 3.953 0 0 0 8.005.002a3.953 3.953 0 0 0-3.948 3.89H1.703a.547.547 0 0 0-.547.504L.011 17.294c0 .017-.004.033-.004.049 0 1.469 1.345 2.663 3 2.663h9.996c1.655 0 3-1.194 3-2.663 0-.016 0-.032-.004-.049ZM8.005 1.106a2.848 2.848 0 0 1 2.844 2.786H5.161a2.848 2.848 0 0 1 2.844-2.786Zm4.998 17.796H3.007c-1.038 0-1.88-.687-1.896-1.534L2.206 5.001h1.847v1.677a.55.55 0 0 0 .552.552.55.55 0 0 0 .552-.552V5.001h5.692v1.677a.55.55 0 0 0 .552.552.55.55 0 0 0 .552-.552V5.001H13.8l1.099 12.367c-.016.847-.862 1.534-1.896 1.534Z"/>
                                    </svg>
                                </a>
                                <a class="product-item__link" href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="23" height="20">
                                        <path fill-rule="evenodd" d="M16.894-.001c-2.424 0-3.959 1.424-4.82 2.619a8.851 8.851 0 0 0-.573.914 8.522 8.522 0 0 0-.573-.914c-.86-1.195-2.395-2.619-4.82-2.619-1.724 0-3.298.698-4.433 1.965C.593 3.172-.004 4.791-.004 6.521c0 1.884.748 3.636 2.353 5.513 1.434 1.679 3.498 3.409 5.887 5.413.891.746 1.811 1.518 2.792 2.362l.029.025a.678.678 0 0 0 .888 0l.03-.025c.98-.844 1.901-1.616 2.791-2.362 2.39-2.004 4.453-3.734 5.887-5.413 1.605-1.877 2.353-3.629 2.353-5.513 0-1.73-.596-3.349-1.679-4.557C20.192.696 18.618-.001 16.894-.001Zm-3.002 16.438a301.82 301.82 0 0 0-2.391 2.018c-.833-.712-1.623-1.374-2.39-2.018-4.677-3.921-7.766-6.511-7.766-9.916 0-1.407.476-2.715 1.342-3.681a4.53 4.53 0 0 1 3.421-1.515c1.849 0 3.043 1.12 3.72 2.06a7.819 7.819 0 0 1 1.032 2.019.674.674 0 0 0 .641.458.673.673 0 0 0 .641-.458 7.819 7.819 0 0 1 1.032-2.019c.677-.94 1.872-2.06 3.72-2.06 1.331 0 2.546.538 3.422 1.515.865.966 1.342 2.274 1.342 3.681 0 3.405-3.09 5.995-7.766 9.916Z"/>
                                    </svg>
                                </a>
                            </div>
                        </div>
                        <div class="product-item__info-box">
                            <div class="product-item__info">
                                <div class="star">
                                    <img class="star__img" src="<?php echo get_template_directory_uri() ?>/app/images/icons/rating.png" alt="Rating">
                                </div>
                                <h4 class="product-item__title">White Polo Men’s T-Shirt</h4>
                                <div class="product-item__prices">
                                    <div class="product-item__new-price">$34.00</div>
                                    <div class="product-item__old-price">$27.00</div>
                                </div>
                            </div>
                            <div class="product-item__content-box">
                                <p class="product-item__text">
                                    Lorem ipsum dolor sit amet, adipiscing elit, sed de eusmod  utlitoi labore et dolore magna aliqua.
                                </p>
                                <button class="product-item__btn">Add to cart</button>
                            </div>
                        </div>
                    </div>
                    <div class="product-item">
                        <div class="product-item__img-box">
                            <img class="product-item__images" src="<?php echo get_template_directory_uri() ?>/app/images/product/5.jpg" alt="Product">
                            <div class="product-item__link-box">
                                <a class="product-item__link" href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="19" height="20">
                                        <path fill-rule="evenodd" d="m18.709 18.219-4.681-4.95a8.142 8.142 0 0 0 1.863-5.194c0-4.453-3.563-8.077-7.944-8.077C3.568-.002.005 3.622.005 8.075c0 4.454 3.563 8.078 7.942 8.078a7.756 7.756 0 0 0 4.551-1.463l4.718 4.99a1.022 1.022 0 0 0 1.464.03 1.068 1.068 0 0 0 .029-1.491ZM7.947 2.106c3.238 0 5.872 2.679 5.872 5.969 0 3.292-2.634 5.971-5.872 5.971-3.236 0-5.869-2.679-5.869-5.971 0-3.29 2.633-5.969 5.869-5.969Z"/>
                                    </svg>
                                </a>
                                <a class="product-item__link product-item__link--line" href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="20">
                                        <path fill-rule="evenodd" d="M15.999 17.294 14.854 4.396a.55.55 0 0 0-.547-.504h-2.354A3.953 3.953 0 0 0 8.005.002a3.953 3.953 0 0 0-3.948 3.89H1.703a.547.547 0 0 0-.547.504L.011 17.294c0 .017-.004.033-.004.049 0 1.469 1.345 2.663 3 2.663h9.996c1.655 0 3-1.194 3-2.663 0-.016 0-.032-.004-.049ZM8.005 1.106a2.848 2.848 0 0 1 2.844 2.786H5.161a2.848 2.848 0 0 1 2.844-2.786Zm4.998 17.796H3.007c-1.038 0-1.88-.687-1.896-1.534L2.206 5.001h1.847v1.677a.55.55 0 0 0 .552.552.55.55 0 0 0 .552-.552V5.001h5.692v1.677a.55.55 0 0 0 .552.552.55.55 0 0 0 .552-.552V5.001H13.8l1.099 12.367c-.016.847-.862 1.534-1.896 1.534Z"/>
                                    </svg>
                                </a>
                                <a class="product-item__link" href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="23" height="20">
                                        <path fill-rule="evenodd" d="M16.894-.001c-2.424 0-3.959 1.424-4.82 2.619a8.851 8.851 0 0 0-.573.914 8.522 8.522 0 0 0-.573-.914c-.86-1.195-2.395-2.619-4.82-2.619-1.724 0-3.298.698-4.433 1.965C.593 3.172-.004 4.791-.004 6.521c0 1.884.748 3.636 2.353 5.513 1.434 1.679 3.498 3.409 5.887 5.413.891.746 1.811 1.518 2.792 2.362l.029.025a.678.678 0 0 0 .888 0l.03-.025c.98-.844 1.901-1.616 2.791-2.362 2.39-2.004 4.453-3.734 5.887-5.413 1.605-1.877 2.353-3.629 2.353-5.513 0-1.73-.596-3.349-1.679-4.557C20.192.696 18.618-.001 16.894-.001Zm-3.002 16.438a301.82 301.82 0 0 0-2.391 2.018c-.833-.712-1.623-1.374-2.39-2.018-4.677-3.921-7.766-6.511-7.766-9.916 0-1.407.476-2.715 1.342-3.681a4.53 4.53 0 0 1 3.421-1.515c1.849 0 3.043 1.12 3.72 2.06a7.819 7.819 0 0 1 1.032 2.019.674.674 0 0 0 .641.458.673.673 0 0 0 .641-.458 7.819 7.819 0 0 1 1.032-2.019c.677-.94 1.872-2.06 3.72-2.06 1.331 0 2.546.538 3.422 1.515.865.966 1.342 2.274 1.342 3.681 0 3.405-3.09 5.995-7.766 9.916Z"/>
                                    </svg>
                                </a>
                            </div>
                        </div>
                        <div class="product-item__info-box">
                            <div class="product-item__info">
                                <div class="star">
                                    <img class="star__img" src="<?php echo get_template_directory_uri() ?>/app/images/icons/rating.png" alt="Rating">
                                </div>
                                <h4 class="product-item__title">White Polo Men’s T-Shirt</h4>
                                <div class="product-item__prices">
                                    <div class="product-item__new-price">$34.00</div>
                                    <div class="product-item__old-price">$27.00</div>
                                </div>
                            </div>
                            <div class="product-item__content-box">
                                <p class="product-item__text">
                                    Lorem ipsum dolor sit amet, adipiscing elit, sed de eusmod  utlitoi labore et dolore magna aliqua.
                                </p>
                                <button class="product-item__btn">Add to cart</button>
                            </div>
                        </div>
                    </div>
                    <div class="product-item product-item--sale">
                        <div class="product-item__img-box">
                            <img class="product-item__images" src="<?php echo get_template_directory_uri() ?>/app/images/product/6.jpg" alt="Product">
                            <div class="product-item__link-box">
                                <a class="product-item__link" href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="19" height="20">
                                        <path fill-rule="evenodd" d="m18.709 18.219-4.681-4.95a8.142 8.142 0 0 0 1.863-5.194c0-4.453-3.563-8.077-7.944-8.077C3.568-.002.005 3.622.005 8.075c0 4.454 3.563 8.078 7.942 8.078a7.756 7.756 0 0 0 4.551-1.463l4.718 4.99a1.022 1.022 0 0 0 1.464.03 1.068 1.068 0 0 0 .029-1.491ZM7.947 2.106c3.238 0 5.872 2.679 5.872 5.969 0 3.292-2.634 5.971-5.872 5.971-3.236 0-5.869-2.679-5.869-5.971 0-3.29 2.633-5.969 5.869-5.969Z"/>
                                    </svg>
                                </a>
                                <a class="product-item__link product-item__link--line" href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="20">
                                        <path fill-rule="evenodd" d="M15.999 17.294 14.854 4.396a.55.55 0 0 0-.547-.504h-2.354A3.953 3.953 0 0 0 8.005.002a3.953 3.953 0 0 0-3.948 3.89H1.703a.547.547 0 0 0-.547.504L.011 17.294c0 .017-.004.033-.004.049 0 1.469 1.345 2.663 3 2.663h9.996c1.655 0 3-1.194 3-2.663 0-.016 0-.032-.004-.049ZM8.005 1.106a2.848 2.848 0 0 1 2.844 2.786H5.161a2.848 2.848 0 0 1 2.844-2.786Zm4.998 17.796H3.007c-1.038 0-1.88-.687-1.896-1.534L2.206 5.001h1.847v1.677a.55.55 0 0 0 .552.552.55.55 0 0 0 .552-.552V5.001h5.692v1.677a.55.55 0 0 0 .552.552.55.55 0 0 0 .552-.552V5.001H13.8l1.099 12.367c-.016.847-.862 1.534-1.896 1.534Z"/>
                                    </svg>
                                </a>
                                <a class="product-item__link" href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="23" height="20">
                                        <path fill-rule="evenodd" d="M16.894-.001c-2.424 0-3.959 1.424-4.82 2.619a8.851 8.851 0 0 0-.573.914 8.522 8.522 0 0 0-.573-.914c-.86-1.195-2.395-2.619-4.82-2.619-1.724 0-3.298.698-4.433 1.965C.593 3.172-.004 4.791-.004 6.521c0 1.884.748 3.636 2.353 5.513 1.434 1.679 3.498 3.409 5.887 5.413.891.746 1.811 1.518 2.792 2.362l.029.025a.678.678 0 0 0 .888 0l.03-.025c.98-.844 1.901-1.616 2.791-2.362 2.39-2.004 4.453-3.734 5.887-5.413 1.605-1.877 2.353-3.629 2.353-5.513 0-1.73-.596-3.349-1.679-4.557C20.192.696 18.618-.001 16.894-.001Zm-3.002 16.438a301.82 301.82 0 0 0-2.391 2.018c-.833-.712-1.623-1.374-2.39-2.018-4.677-3.921-7.766-6.511-7.766-9.916 0-1.407.476-2.715 1.342-3.681a4.53 4.53 0 0 1 3.421-1.515c1.849 0 3.043 1.12 3.72 2.06a7.819 7.819 0 0 1 1.032 2.019.674.674 0 0 0 .641.458.673.673 0 0 0 .641-.458 7.819 7.819 0 0 1 1.032-2.019c.677-.94 1.872-2.06 3.72-2.06 1.331 0 2.546.538 3.422 1.515.865.966 1.342 2.274 1.342 3.681 0 3.405-3.09 5.995-7.766 9.916Z"/>
                                    </svg>
                                </a>
                            </div>
                        </div>
                        <div class="product-item__info-box">
                            <div class="product-item__info">
                                <div class="star">
                                    <img class="star__img" src="<?php echo get_template_directory_uri() ?>/app/images/icons/rating.png" alt="Rating">
                                </div>
                                <h4 class="product-item__title">White Polo Men’s T-Shirt</h4>
                                <div class="product-item__prices">
                                    <div class="product-item__new-price">$34.00</div>
                                    <div class="product-item__old-price">$27.00</div>
                                </div>
                            </div>
                            <div class="product-item__content-box">
                                <p class="product-item__text">
                                    Lorem ipsum dolor sit amet, adipiscing elit, sed de eusmod  utlitoi labore et dolore magna aliqua.
                                </p>
                                <button class="product-item__btn">Add to cart</button>
                            </div>
                        </div>
                    </div>
                    <div class="product-item">
                        <div class="product-item__img-box">
                            <img class="product-item__images" src="<?php echo get_template_directory_uri() ?>/app/images/product/7.jpg" alt="Product">
                            <div class="product-item__link-box">
                                <a class="product-item__link" href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="19" height="20">
                                        <path fill-rule="evenodd" d="m18.709 18.219-4.681-4.95a8.142 8.142 0 0 0 1.863-5.194c0-4.453-3.563-8.077-7.944-8.077C3.568-.002.005 3.622.005 8.075c0 4.454 3.563 8.078 7.942 8.078a7.756 7.756 0 0 0 4.551-1.463l4.718 4.99a1.022 1.022 0 0 0 1.464.03 1.068 1.068 0 0 0 .029-1.491ZM7.947 2.106c3.238 0 5.872 2.679 5.872 5.969 0 3.292-2.634 5.971-5.872 5.971-3.236 0-5.869-2.679-5.869-5.971 0-3.29 2.633-5.969 5.869-5.969Z"/>
                                    </svg>
                                </a>
                                <a class="product-item__link product-item__link--line" href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="20">
                                        <path fill-rule="evenodd" d="M15.999 17.294 14.854 4.396a.55.55 0 0 0-.547-.504h-2.354A3.953 3.953 0 0 0 8.005.002a3.953 3.953 0 0 0-3.948 3.89H1.703a.547.547 0 0 0-.547.504L.011 17.294c0 .017-.004.033-.004.049 0 1.469 1.345 2.663 3 2.663h9.996c1.655 0 3-1.194 3-2.663 0-.016 0-.032-.004-.049ZM8.005 1.106a2.848 2.848 0 0 1 2.844 2.786H5.161a2.848 2.848 0 0 1 2.844-2.786Zm4.998 17.796H3.007c-1.038 0-1.88-.687-1.896-1.534L2.206 5.001h1.847v1.677a.55.55 0 0 0 .552.552.55.55 0 0 0 .552-.552V5.001h5.692v1.677a.55.55 0 0 0 .552.552.55.55 0 0 0 .552-.552V5.001H13.8l1.099 12.367c-.016.847-.862 1.534-1.896 1.534Z"/>
                                    </svg>
                                </a>
                                <a class="product-item__link" href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="23" height="20">
                                        <path fill-rule="evenodd" d="M16.894-.001c-2.424 0-3.959 1.424-4.82 2.619a8.851 8.851 0 0 0-.573.914 8.522 8.522 0 0 0-.573-.914c-.86-1.195-2.395-2.619-4.82-2.619-1.724 0-3.298.698-4.433 1.965C.593 3.172-.004 4.791-.004 6.521c0 1.884.748 3.636 2.353 5.513 1.434 1.679 3.498 3.409 5.887 5.413.891.746 1.811 1.518 2.792 2.362l.029.025a.678.678 0 0 0 .888 0l.03-.025c.98-.844 1.901-1.616 2.791-2.362 2.39-2.004 4.453-3.734 5.887-5.413 1.605-1.877 2.353-3.629 2.353-5.513 0-1.73-.596-3.349-1.679-4.557C20.192.696 18.618-.001 16.894-.001Zm-3.002 16.438a301.82 301.82 0 0 0-2.391 2.018c-.833-.712-1.623-1.374-2.39-2.018-4.677-3.921-7.766-6.511-7.766-9.916 0-1.407.476-2.715 1.342-3.681a4.53 4.53 0 0 1 3.421-1.515c1.849 0 3.043 1.12 3.72 2.06a7.819 7.819 0 0 1 1.032 2.019.674.674 0 0 0 .641.458.673.673 0 0 0 .641-.458 7.819 7.819 0 0 1 1.032-2.019c.677-.94 1.872-2.06 3.72-2.06 1.331 0 2.546.538 3.422 1.515.865.966 1.342 2.274 1.342 3.681 0 3.405-3.09 5.995-7.766 9.916Z"/>
                                    </svg>
                                </a>
                            </div>
                        </div>
                        <div class="product-item__info-box">
                            <div class="product-item__info">
                                <div class="star">
                                    <img class="star__img" src="<?php echo get_template_directory_uri() ?>/app/images/icons/rating.png" alt="Rating">
                                </div>
                                <h4 class="product-item__title">White Polo Men’s T-Shirt</h4>
                                <div class="product-item__prices">
                                    <div class="product-item__new-price">$34.00</div>
                                    <div class="product-item__old-price">$27.00</div>
                                </div>
                            </div>
                            <div class="product-item__content-box">
                                <p class="product-item__text">
                                    Lorem ipsum dolor sit amet, adipiscing elit, sed de eusmod  utlitoi labore et dolore magna aliqua.
                                </p>
                                <button class="product-item__btn">Add to cart</button>
                            </div>
                        </div>
                    </div>
                    <div class="product-item">
                        <div class="product-item__img-box">
                            <img class="product-item__images" src="<?php echo get_template_directory_uri() ?>/app/images/product/8.jpg" alt="Product">
                            <div class="product-item__link-box">
                                <a class="product-item__link" href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="19" height="20">
                                        <path fill-rule="evenodd" d="m18.709 18.219-4.681-4.95a8.142 8.142 0 0 0 1.863-5.194c0-4.453-3.563-8.077-7.944-8.077C3.568-.002.005 3.622.005 8.075c0 4.454 3.563 8.078 7.942 8.078a7.756 7.756 0 0 0 4.551-1.463l4.718 4.99a1.022 1.022 0 0 0 1.464.03 1.068 1.068 0 0 0 .029-1.491ZM7.947 2.106c3.238 0 5.872 2.679 5.872 5.969 0 3.292-2.634 5.971-5.872 5.971-3.236 0-5.869-2.679-5.869-5.971 0-3.29 2.633-5.969 5.869-5.969Z"/>
                                    </svg>
                                </a>
                                <a class="product-item__link product-item__link--line" href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="20">
                                        <path fill-rule="evenodd" d="M15.999 17.294 14.854 4.396a.55.55 0 0 0-.547-.504h-2.354A3.953 3.953 0 0 0 8.005.002a3.953 3.953 0 0 0-3.948 3.89H1.703a.547.547 0 0 0-.547.504L.011 17.294c0 .017-.004.033-.004.049 0 1.469 1.345 2.663 3 2.663h9.996c1.655 0 3-1.194 3-2.663 0-.016 0-.032-.004-.049ZM8.005 1.106a2.848 2.848 0 0 1 2.844 2.786H5.161a2.848 2.848 0 0 1 2.844-2.786Zm4.998 17.796H3.007c-1.038 0-1.88-.687-1.896-1.534L2.206 5.001h1.847v1.677a.55.55 0 0 0 .552.552.55.55 0 0 0 .552-.552V5.001h5.692v1.677a.55.55 0 0 0 .552.552.55.55 0 0 0 .552-.552V5.001H13.8l1.099 12.367c-.016.847-.862 1.534-1.896 1.534Z"/>
                                    </svg>
                                </a>
                                <a class="product-item__link" href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="23" height="20">
                                        <path fill-rule="evenodd" d="M16.894-.001c-2.424 0-3.959 1.424-4.82 2.619a8.851 8.851 0 0 0-.573.914 8.522 8.522 0 0 0-.573-.914c-.86-1.195-2.395-2.619-4.82-2.619-1.724 0-3.298.698-4.433 1.965C.593 3.172-.004 4.791-.004 6.521c0 1.884.748 3.636 2.353 5.513 1.434 1.679 3.498 3.409 5.887 5.413.891.746 1.811 1.518 2.792 2.362l.029.025a.678.678 0 0 0 .888 0l.03-.025c.98-.844 1.901-1.616 2.791-2.362 2.39-2.004 4.453-3.734 5.887-5.413 1.605-1.877 2.353-3.629 2.353-5.513 0-1.73-.596-3.349-1.679-4.557C20.192.696 18.618-.001 16.894-.001Zm-3.002 16.438a301.82 301.82 0 0 0-2.391 2.018c-.833-.712-1.623-1.374-2.39-2.018-4.677-3.921-7.766-6.511-7.766-9.916 0-1.407.476-2.715 1.342-3.681a4.53 4.53 0 0 1 3.421-1.515c1.849 0 3.043 1.12 3.72 2.06a7.819 7.819 0 0 1 1.032 2.019.674.674 0 0 0 .641.458.673.673 0 0 0 .641-.458 7.819 7.819 0 0 1 1.032-2.019c.677-.94 1.872-2.06 3.72-2.06 1.331 0 2.546.538 3.422 1.515.865.966 1.342 2.274 1.342 3.681 0 3.405-3.09 5.995-7.766 9.916Z"/>
                                    </svg>
                                </a>
                            </div>
                        </div>
                        <div class="product-item__info-box">
                            <div class="product-item__info">
                                <div class="star">
                                    <img class="star__img" src="<?php echo get_template_directory_uri() ?>/app/images/icons/rating.png" alt="Rating">
                                </div>
                                <h4 class="product-item__title">White Polo Men’s T-Shirt</h4>
                                <div class="product-item__prices">
                                    <div class="product-item__new-price">$34.00</div>
                                    <div class="product-item__old-price">$27.00</div>
                                </div>
                            </div>
                            <div class="product-item__content-box">
                                <p class="product-item__text">
                                    Lorem ipsum dolor sit amet, adipiscing elit, sed de eusmod  utlitoi labore et dolore magna aliqua.
                                </p>
                                <button class="product-item__btn">Add to cart</button>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="pagination">
                    <a class="pagination__arrows pagination__prev" href="#">
                        Previous
                    </a>

                    <ul class="pagination__list">
                        <li class="pagination__item"><a class="pagination__link" href="#">1</a></li>
                        <li class="pagination__item"><a class="pagination__link" href="#">2</a></li>
                        <li class="pagination__item"><a class="pagination__link pagination__link--active" href="#">3</a></li>
                        <li class="pagination__item"><span class="pagination__dots">....</span></li>
                        <li class="pagination__item"><a class="pagination__link" href="#">10</a></li>
                    </ul>
                    
                    <a class="pagination__arrows pagination__next" href="#">
                        Next
                    </a>
                </div>

            </div>
        </div>
    </div>
</section>