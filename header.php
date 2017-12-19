<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title><?php echo get_bloginfo('name'); ?> / <?php echo get_bloginfo('description'); ?></title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/prod/style/style.css" />
    <?php wp_head(); ?>
</head>
<body>
    <div class="promos">
        <div class="container">
            <div class="emails">emails</div>
            <div class="phones">phones</div>
        </div>
    </div>
    <header>
        <div class="container">
            <div class="logo">logo</div>
            <div class="slogan">slogan</div>
        </div>
        <div class="main-menu">
            <?php
            wp_nav_menu(array('menu' => 2));
            ?>
        </div>
        <div class="btns">
            <div class="btn">.</div>
            <div class="btn">.</div>
        </div>
    </header>