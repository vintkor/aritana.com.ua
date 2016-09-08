<!--
  __  __            _  _          ____                   _
 |  \/  |          | |(_)        / __ \                 (_)
 | \  / |  ___   __| | _   __ _ | |  | | _ __    ___     _  _ __     _   _   __ _
 | |\/| | / _ \ / _` || | / _` || |  | || '_ \  / _ \   | || '_ \   | | | | / _` |
 | |  | ||  __/| (_| || || (_| || |__| || | | ||  __/ _ | || | | | _| |_| || (_| |
 |_|  |_| \___| \__,_||_| \__,_| \____/ |_| |_| \___|(_)|_||_| |_|(_)\__,_| \__,_|

-->

<!DOCTYPE html>
<html lang="<?php echo get_bloginfo('language'); ?>">
<head>
    <meta charset="<?php echo get_bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo get_bloginfo('name'); ?> - <?php echo get_bloginfo('description'); ?></title>
    <?php wp_head(); ?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/app/css/libs.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/app/css/main.css">
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body <?php body_class(); ?>>
<div class="main-wrapper">
    <div class="content">
        <header>
            <div class="container">
                <div class="row flex">
                    <div class="col-md-4">
                        <a href="/">
                            <img src="<?php echo get_template_directory_uri(); ?>/app/img/Logo.svg" alt="<?php echo get_bloginfo('name'); ?> - <?php echo get_bloginfo('description'); ?>">
                        </a>
                    </div>
                    <div class="col-md-8 align-right">
                        <p class="phone"><img src="<?php echo get_template_directory_uri(); ?>/app/img/phone.svg">(044) 227-20-07</p>
                        <p class="phone"><img src="<?php echo get_template_directory_uri(); ?>/app/img/phone.svg">(095) 076-08-20</p>
                        <p class="phone"><img src="<?php echo get_template_directory_uri(); ?>/app/img/phone.svg">(067) 324-23-03</p>
                        <p class="phone"><img src="<?php echo get_template_directory_uri(); ?>/app/img/mail.svg">aritana@ukr.net</p>
                    </div>
                </div>
            </div>
        </header>

        <nav class="top-nav">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <ul>
                            <li class="current-menu-item"><a href="#">Главная</a></li>
                            <li><a href="#">О нас</a></li>
                            <li><a href="#">Услуги</a>
                                <ul>
                                    <li><a href="#">Some menu 1</a></li>
                                    <li><a href="#">Some menu 2 Some menu 2</a></li>
                                    <li><a href="#">Some menu 3</a></li>
                                    <li><a href="#">Some menu 4</a></li>
                                    <li><a href="#">Some menu 5</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Наши клиенты</a></li>
                            <li><a href="#">Новости</a></li>
                            <li><a href="#">Блог</a></li>
                            <li><a href="#">Контакты</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>