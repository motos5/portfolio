<section class="getting">
    <div class="container">
        <h2 class="title getting__title">В ШКОЛЕ ВЫ ПОЛУЧИТЕ</h2>
        <div class="getting__items">
            <div class="getting__item">
                <h4 class="getting__item-title" style="background-image: url('<?php the_field('getting_residence', 'option'); ?>'); background-repeat: no-repeat;">
                    ПРОЖИВАНИЕ
                </h4>
                <p class="getting__item-text">
                    Наша школа серфинга находится в 100 м от океанского побережья. К услугам гостей открытый бассейн и бесплатный Wi-Fi. Из верхней террасы открывается вид на океан. Расстояние до центра города 15 мин.
                </p>
            </div>
            <div class="getting__item">
                <h4 class="getting__item-title" style="background-image: url('<?php the_field('getting_flight', 'option'); ?>'); background-repeat: no-repeat;">
                    ПЕРЕЛЕТ И СТРАХОВКУ
                </h4>
                <p class="getting__item-text">
                    Все участники программы застрахованы страховой компанией Allianz.<br /> Перелет из Тенерифе до острова Лансароте и обратно входит в стоимость программы
                </p>
            </div>
            <div class="getting__item">
                <h4 class="getting__item-title" style="background-image: url('<?php the_field('getting_training', 'option'); ?>'); background-repeat: no-repeat;">
                    ОБУЧЕНИЕ И ЭКИПИРОВКУ
                </h4>
                <p class="getting__item-text">
                    Все оборудование и экипировка известных производителей и предоставляется на весь курс программы. Тренировочный процесс начинается с определения вашего уровня катания
                </p>
            </div>
        </div>
        <div class="getting__info">
            <div class="getting__info-items">
                <?php
                    $arrived = get_field('arrived', 'option');
                    $learned = get_field('learned', 'option');
                    $satisfied = get_field('satisfied', 'option');
                ?>
                <div class="getting__info-item">
                    <div class="getting__info-line">
                        <img
                            class="getting__info-img"
                            src="<?php the_field('info_line', 'option'); ?>"
                            style="width: calc(100% - <?php echo $arrived ?>%);"
                            alt=""
                        />
                        <span><?php echo 100 - $arrived; ?>%</span>
                    </div>
                    Приехали второй раз
                </div>
                <div class="getting__info-item">
                    <div class="getting__info-line">
                        <img
                            class="getting__info-img"
                            src="<?php the_field('info_line', 'option'); ?>"
                            style="width: calc(100% - <?php echo $learned ?>%)"
                            alt=""
                        />
                        <span><?php echo 100 - $learned; ?>%</span>
                    </div>
                    Научились кататься
                </div>
                <div class="getting__info-item">
                    <div class="getting__info-line">
                        <img
                            class="getting__info-img"
                            src="<?php the_field('info_line', 'option'); ?>"
                            style="width: calc(100% - <?php echo $satisfied ?>%)"
                            alt=""
                        />
                        <span><?php echo 100 - $satisfied; ?>%</span>
                    </div>
                    Довольных клиентов
                </div>
            </div>
            <div class="getting__info-text">
                <p>
                    Огромным преимуществом нашей школы является собственная методика
                    обучения. Мы разработали собственный стиль обучения серфингу,
                    который позволяет новичкам максимально быстро встать на доску.
                </p>
                <p>
                    Именно наша методика и наши преподаватели позволили нам пройти
                    аттестацию Федерации серфинга Канарских островов - FEDERACIÓN
                    CANARIA DE SURF. Это означает, что наша школа соответствует всем
                    мировым стандартам. Переаттестация производится ежегодно и это
                    позволяет нам всегда стремиться к улучшению обучения.
                </p>
            </div>
        </div>
    </div>
</section>