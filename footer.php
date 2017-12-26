<footer>
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
                <a href="#" class="call">Заказать бесплатный звонок!</a>
            </p>
        </div>
        <div class="col col-3">
            <p>
                Остались вопросы?
            </p>
            <p>
                <a href="#">
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
</footer>
<script src="<?php echo get_template_directory_uri(); ?>/prod/js/bundle.js"></script>
<?php wp_footer(); ?>
</body>
</html>