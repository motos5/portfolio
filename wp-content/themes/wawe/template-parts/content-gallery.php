<section class="gallery">
    <div class="container">
        <h2 class="title gallery__title">Галерея</h2>
        <div class="gallery__filtr">
            <button class="gallery__filtr-btn" data-filter="all">ВСЕ</button>
            <button class="gallery__filtr-btn" data-filter=".category-tourists">ТУРИСТЫ</button>
            <button class="gallery__filtr-btn" data-filter=".category-nature">ПРИРОДА</button>
            <button class="gallery__filtr-btn" data-filter=".category-profi">ПРОФИ</button>
        </div>
        <div class="gallery__content">
            <div class="gallery__content-item mix category-tourists">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/1.jpg" alt="Галерея изображений">
                <a class="gallery__item-link" href="#"></a>
            </div>
            <div class="gallery__content-item mix category-tourists">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/2.jpg" alt="Галерея изображений">
                <a class="gallery__item-link" href="#"></a>
            </div>
            <div class="gallery__content-item mix category-nature">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/3.jpg" alt="Галерея изображений">
                <a class="gallery__item-link" href="#"></a>
            </div>
            <div class="gallery__content-item mix category-nature">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/4.jpg" alt="Галерея изображений">
                <a class="gallery__item-link" href="#"></a>
            </div>
            <div class="gallery__content-item mix category-profi">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/5.jpg" alt="Галерея изображений">
                <a class="gallery__item-link" href="#"></a>
            </div>
            <div class="gallery__content-item mix category-profi">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/6.jpg" alt="Галерея изображений">
                <a class="gallery__item-link" href="#"></a>
            </div>
        </div>
        <a class="button-general" href="#">ПОКАЗАТЬ ЕЩЕ</a>
    </div>
    <blockquote class="blockquote">
        «Если сомневаешься – иди катайся.»
        <span class="blockquote__author">
            Нэт Янг, первый Чемпион Мира по сёрфингу
        </span>
    </blockquote>
    <div class="container">
        <div class="gallery__video">
            <a class="gallery__video-link" href="https://www.youtube.com/watch?v=_sI_Ps7JSEk" data-fancybox>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/play-img.svg" alt="">
            </a>
        </div>
        <div class="gallery__numbers">
            <p class="gallery__item-number">450<span>туристов</span></p>
            <p class="gallery__item-number">2500<span>часов катания</span></p>
            <p class="gallery__item-number">10<span>проф. тренеров</span></p>
            <p class="gallery__item-number">365<span>дней в году</span></p>
        </div>
    </div>
</section>