<?php get_header(); ?>

<div class="packages">
    <div class="wrapper">
        <div class="package active">
            <div class="container">
                <h2 class="title">
                    <strong>создаем уникальные web-сайты, <br>
                        интернет -магазины, landing page без шаблонов</strong>
                </h2>
                <div class="pager-wrapper"></div>
                <div class="slider">
                    <div class="slide">
                        <div class="sub-title">Бесплатно</div>
                        <div class="text">Если Ваш планируемый ежемесячный бюджет привышает 30 000 тг, мы бесплатно сделаем полноценную настройку контекстной рекламы!</div>
                        <a href="#" class="btn btn-more">Смотрите подробнее</a>
                    </div>
                    <div class="slide">
                        <div class="sub-title">Бесплатно</div>
                        <div class="text">Если Ваш планируемый ежемесячный бюджет привышает 30 000 тг, мы бесплатно сделаем полноценную настройку контекстной рекламы!</div>
                        <a href="#" class="btn btn-more">Смотрите подробнее</a>
                    </div>
                    <div class="slide">
                        <div class="sub-title">Бесплатно</div>
                        <div class="text">Если Ваш планируемый ежемесячный бюджет привышает 30 000 тг, мы бесплатно сделаем полноценную настройку контекстной рекламы!</div>
                        <a href="#" class="btn btn-more">Смотрите подробнее</a>
                    </div>
                    <div class="slide">
                        <div class="sub-title">Бесплатно</div>
                        <div class="text">Если Ваш планируемый ежемесячный бюджет привышает 30 000 тг, мы бесплатно сделаем полноценную настройку контекстной рекламы!</div>
                        <a href="#" class="btn btn-more">Смотрите подробнее</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="img">
        <img src="<?php echo get_template_directory_uri(); ?>/prod/images/content/package-dev.png" alt="">
    </div>
</div>
<div class="details">
    <div class="container">
        <div class="wrapper">
            <div class="package active">
                <div class="package-img">
                    <img src="<?php echo get_template_directory_uri(); ?>/prod/images/content/web-dev.jpg" alt="">
                </div>
                <div class="info">
                    <div class="title">
                        <p>Мы делаем прибыльнее бизнес наших клиентов,</p>
                        <p>где сайт - не конечная цель, а инструмент, для</p>
                        <p>решения поставленной задачи!</p>
                    </div>
                    <div class="text">
                        <ul>
                            <li>Прототип, дизайн-макет и копирайт, оптимизированный для <br>
                                SEO продвижения!
                            </li>
                            <li>Верстка под все популярные браузеры, с адаптацией для <br>
                                мобильных устройств
                            </li>
                            <li>Подключение счетчиков и дополнительных модулей: CRM <br>
                                система, Online-чат, CallBack и др.
                            </li>
                            <li>Удобное администрирование с возможностью <br>
                                подключения лучших CMS систем</li>
                        </ul>
                    </div>
                    <div class="btns">
                        <a href="#" class="btn btn-calc">Калькулятор расчета</a>
                        <a href="#" class="btn btn-how">Как это работает</a>
                        <div class="swipe-btn">+</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="calculators">
    <h4 class="title">
        <p>
            Рассчитайте стоимость
        </p>
        <p>
            продвижения по минимальной цене
        </p>
    </h4>
    <div class="swipe-btn">Закрыть</div>
    <div class="wrapper">
        <div class="package active">
            <div class="img">
                <img src="<?php echo get_template_directory_uri(); ?>/prod/images/content/yandex-glitch.jpg" alt="">
            </div>
            <div class="form-wrapper">
                <form class="calc">
                    <div class="fieldset">
                        <div class="field-title">У вас</div>
                        <div class="type fields">
                            <div class="field">
                                <input type="radio" id="type-product-yandex" name="type" value="product" checked>
                                <label for="type-product">Продукт</label>
                            </div>
                            <div class="field">
                                <input type="radio" id="type-service-yandex" name="type" value="service">
                                <label for="type-service">Услуга</label>
                            </div>
                        </div>
                    </div>
                    <div class="fieldset">
                        <div class="field-title">Дополнительное описание</div>
                        <div class="text fields">
                            <input type="text" id="calc-text-yandex" name="text">
                        </div>
                    </div>
                    <div class="fieldset">
                        <div class="field-title">
                            <p>Дополнительная продукция</p>
                            <p>к основному товару или услуге</p>
                        </div>
                        <div class="extras fields">
                            <select name="extras">
                                <option value="value1">Value 1</option>
                                <option value="value2" selected>Value 2</option>
                                <option value="value3">Value 3</option>
                            </select>
                        </div>
                    </div>
                    <div class="fieldset">
                        <div class="field-title">
                            <p>Регион для</p>
                            <p>продвижения</p>
                        </div>
                        <div class="region fields">
                            <div class="field">
                                <input type="radio" id="all-yandex" name="area" value="all" checked>
                                <label for="type-product">Весь Казахстан</label>
                            </div>
                            <div class="field">
                                <input type="radio" id="selected-yandex" name="area" value="selected">
                                <label for="type-service">Один или<br> несколько регионов</label>
                            </div>
                        </div>
                    </div>
                    <div class="fieldset">
                        <div class="field-title">Ежемесячный бюджет</div>
                        <div class="budget fields">
                            <select name="budget">
                                <option value="value1">Value 1</option>
                                <option value="value2" selected>Value 2</option>
                                <option value="value3">Value 3</option>
                            </select>
                        </div>
                    </div>
                    <div class="fieldset">
                        <div class="field-title">E-mail</div>
                        <div class="email fields">
                            <input type="email" id="email-yandex" name="email">
                        </div>
                    </div>
                    <div class="fieldset">
                        <div class="field-title">Контактный телефон</div>
                        <div class="phone fields">
                            <input type="text" id="phone-yandex" name="phone">
                        </div>
                    </div>
                    <div class="fieldset">
                        <div class="field-title"></div>
                        <button type="submit">Расчитать</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="presentations">
    <div class="container">
        <div class="triggers">
            <h2 class="title">Как это работает</h2>
            <div class="triggers-directions">
                <p class="direction active">
                    Прототипирование
                </p>
                <p class="direction">
                    Разработка дизайн-макета
                </p>
                <p class="direction">
                    Верстка сайта и размещение на хостинге
                </p>
            </div>
            <div class="swipe-btn">Закрыть</div>
        </div>
    </div>
    <div class="wrapper">
        <div class="package development active">
            <div class="presentation active">
                <div class="slide slide-1" data-index="1">
                    <ul class="points">
                        <li class="point"><strong>1</strong> Одна - две строки, информации <br>
                            вторая строка как оно там будет</li>
                        <li class="point"><strong>2</strong> Одна - две строки, информации <br>
                            вторая строка как оно там будет</li>
                        <li class="point"><strong>3</strong> Одна - две строки, информации <br>
                            вторая строка как оно там будет</li>
                        <li class="point"><strong>4</strong> Одна - две строки, информации <br>
                            вторая строка как оно там будет</li>
                    </ul>
                </div>
                <div class="slide slide-2" data-index="2">
                    <ul class="points">
                        <li class="point"><strong>1</strong> Согласовываем дизайн с лого и <br>
                            корпоративным стилем</li>
                        <li class="point"><strong>2</strong> Учитываем Ваши пожелания и <br>
                            предпочтения в цыете</li>
                        <li class="point"><strong>3</strong> Используем уникальную продающую <br>
                            структуру</li>
                        <li class="point"><strong>4</strong> Разрабатываем анимацию <br>
                            и интерактивные части сайта</li>
                        <li class="point"><strong>5</strong> Вы получаете полноценный, <br>
                            уникальный PSD макет сайта </li>
                    </ul>
                </div>
                <div class="slide slide-3" data-index="3">
                    <ul class="points">
                        <li class="point">Верстка под основные браузеры</li>
                        <li class="point">Адаптация под мобильные устройства</li>
                        <li class="point">Полноценное наполнение контентом</li>
                        <li class="point">Подключение и настройка хостинга</li>
                    </ul>
                    <ul class="icons">
                        <li class="icon">Подключение счетчиков метрики</li>
                        <li class="icon">Анализ и корректировка сайта <br>
                            по тепловым картам после запуска</li>
                        <li class="icon">Подключение дополнительных <br>
                            модулей для повышения конверсии </li>
                        <li class="icon">Интеграция сайта с CRM системой, <br>
                            для обработки входящих заявок</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="special">
    <div class="wrapper">
        <div class="container">
            <h4 class="title">Заполните форму и получите бесплатно <br>
                специальный пакет по продвижению <span>?</span></h4>
            <div class="text">Lorem ipsum... какой-то текст по наведению на знак вопроса</div>
        </div>
        <form id="development" class="form-special">
            <input type="text" placeholder="Ваше имя*">
            <input type="text" placeholder="Ваш телефон*">
            <button type="submit">Получить пакет</button>
        </form>
    </div>
</div>
<div class="about-us">
    <div class="container">
        <h2 class="title"><span>Diple</span></h2>
        <div class="text">Крупнейшая компания в Казахстане <br>
            по настройке и продвижению контекстной рекламы</div>
    </div>
</div>

<div class="benefits development">
    <div class="container">
        <ul class="points">
            <li class="point">
                <strong>1</strong>Прописываем показатели в договоре, <br>
                работая по CPC и CPA
                <em>Возвращаем деньги при отсутствии <br> результата!</em>
            </li>
            <li class="point"><strong>2</strong>Сертифицированное агентство <br>
                контекстной рекламы Яндекс и Google
                <em><span>Сертфикаты Яндекс и Google</span>
                    Сертифкаты агентства</em>
            </li>
            <li class="point"><strong>3</strong>Уникальный опыт по реализации <br>
                сложнейших проктов “под ключ”
                <em>Более 300 успешно реализванных проектов !</em>
                <em><span>Маркетинговое Digital агентство полного <br>
                        цикла!</span></em>
            </li>
            <li class="point"><strong>4</strong>Предоставляем полный доступ и <br>
                бесплатную аналитику рекламы
                <em>Бесплатный медиаплан, анализ сайта и <br>
                    контекстной рекламы!</em>
            </li>
            <li class="point"><strong>5</strong>Используем уникальное <br>
                программное обеспечение по <br>
                работе с Яндекс и Google
                <em>Снижаем стоимость <br>
                    рекламы от 15% - до 50%!</em>
            </li>
            <li class="point"><strong>6</strong>Собираем и прорабатываем обширную <br>
                семантику поисковых запросов
                <em><span>Собираем и прорабатываем обширную семантику поисковых запросов</span></em>
                <em><span>Увеличиваем показатель CTR=снижаем <br> стоимость клика!</span></em>
            </li>
        </ul>
    </div>
</div>

<?php get_footer(); ?>
