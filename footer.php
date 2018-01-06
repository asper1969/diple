<footer>
    <div class="wrapper">
        <div class="clients">
            <?php
            $post = get_post(27);?>
            <h4 class="title"><?php echo $post->post_title;?></h4>
            <div class="content"><?php echo $post->post_content;?></div>
        </div>
        <div class="container">
            <div class="col col-1">
                <p>
                    Наш адрес:
                </p>
                <p>
                    Казахстан, г. Караганда,
                </p>
                <p>
                    ул. Мустафина, 26
                </p>
                <p>
                    Карта Проезда
                </p>
            </div>
            <div class="col col-2">
                <p>
                    Контакты:
                </p>
                <p>
                    +7 (7212) 50-28-20
                </p>
                <p>
                    +7 (701) 589-98-79
                </p>
                <p>
                    <a href="#call" class="call fancybox">Заказать бесплатный звонок!</a>
                </p>
            </div>
            <div class="col col-3">
                <p>
                    Остались вопросы?
                </p>
                <p>
                    <a href="#consultation" class="consultation fancybox">
                        Получите бесплатную консультацию!
                    </a>
                </p>
                <p>
                    <a href="mailto:info@diple.kz" class="mail">info@diple.kz</a>
                </p>
            </div>
            <div class="col col-4">
                <div class="copyright">
                    <p>Победитель номинации!</p>
                    <p>© 2003- 2017 Diple</p>
                </div>
                <div class="sticker">
                    <img src="" alt="">
                </div>
            </div>
        </div>
    </div>
    <div class="hidden-region">
        <form enctype="multipart/form-data" id="call" class="has-validation-callback pop-up">
            <p class="title">ЗАКАЖИТЕ ЗВОНОК</p>
            <p class="subtitle">и наш менеджер свяжется с Вами</p>
            <fieldset class="inputs">
                <input data-validation="required" data-validation-allowing=" " data-validation-error-msg="Введите имя!" type="text" name="name" placeholder="Ваше имя*">
                <input data-validation-error-msg="Введите верный email!" data-validation="required email" type="email" name="email" placeholder="E-mail*">
                <input data-validation="custom" data-validation-regexp="^((8|\+\d)[\- ]?)?(\(?\d{3,4}\)?[\- ]?)?[\d\- ]{5,10}$" data-validation-error-msg="Введите телефон!" type="tel" name="phone" placeholder="Телефон*">
                <input type="hidden" name="type" value="Заказать звонок">
            </fieldset>
            <button type="submit" >Отправить</button>
        </form>
        <form enctype="multipart/form-data" id="consultation" class="has-validation-callback pop-up">
            <p class="title">Заполните форму</p>
            <p class="subtitle">и получите бесплатную консультацию</p>
            <fieldset class="inputs">
                <input data-validation="required" data-validation-allowing=" " data-validation-error-msg="Введите имя!" type="text" name="name" placeholder="Ваше имя*">
                <input data-validation-error-msg="Введите верный email!" data-validation="required email" type="email" name="email" placeholder="E-mail*">
                <input data-validation="custom" data-validation-regexp="^((8|\+\d)[\- ]?)?(\(?\d{3,4}\)?[\- ]?)?[\d\- ]{5,10}$" data-validation-error-msg="Введите телефон!" type="tel" name="phone" placeholder="Телефон*">
                <input type="hidden" name="type" value="Заказать звонок">
            </fieldset>
            <button type="submit" >Отправить</button>
        </form>
        <div id="success">
            <p class="title">Спасибо за заявку</p>
            <p class="subtitle">мы обязательно свяжемся с вами в ближайшее время!</p>
        </div>
    </div>
</footer>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/prod/style/jquery.fancybox.min.css">
<script src="<?php echo get_template_directory_uri(); ?>/prod/js/bundle.js"></script>
<?php wp_footer(); ?>
</body>
</html>