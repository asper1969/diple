<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title><?php echo get_bloginfo('name'); ?> / <?php echo get_bloginfo('description'); ?></title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="user-scalable=yes, width=1200px" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/prod/style/style.css" />
    <?php wp_head(); ?>
</head>
<body>
    <div class="promos">
        <div class="container">
            <div class="emails">
                <a href="mailto:info@diple.kz">info@diple.kz</a>
            </div>
            <div class="phones">
                <p>+7 (702) 589 98 79</p>
                <p>+7 (7212) 50-28-20</p>
            </div>
            <div class="close-btn">+</div>
        </div>
    </div>
    <header>
        <div class="container">
            <div class="logo">logo</div>
            <div class="slogan">
                <p>Профессиональная настройка</p>
                <p>контекстной рекламы</p>
            </div>
        </div>
        <?php
        wp_nav_menu(array('menu' => 2));
        ?>
        <div class="btns">
            <a href="#" class="btn btn-info">.</a>
            <a href="#" class="btn btn-call">.</a>
        </div>
    </header>