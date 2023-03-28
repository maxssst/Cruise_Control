<?php
//Запускаем сессию
session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <title>Sender App</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/styles.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            "use strict";
            //================ Проверка email ==================

            //регулярное выражение для проверки email
            var pattern = /^[a-z0-9][a-z0-9\._-]*[a-z0-9]*@([a-z0-9]+([a-z0-9-]*[a-z0-9]+)*\.)+[a-z]+/i;
            var mail = $('input[name=email]');

            mail.blur(function() {
                if (mail.val() != '') {

                    // Проверяем, если введенный email соответствует регулярному выражению
                    if (mail.val().search(pattern) == 0) {
                        // Убираем сообщение об ошибке
                        $('#valid_email_message').text('');

                        //Активируем кнопку отправки
                        $('input[type=submit]').attr('disabled', false);
                    } else {
                        //Выводим сообщение об ошибке
                        $('#valid_email_message').text('Не правильный Email');

                        // Дезактивируем кнопку отправки
                        $('input[type=submit]').attr('disabled', true);
                    }
                } else {
                    $('#valid_email_message').text('Введите Ваш email');
                }
            });

            //================ Проверка длины пароля ==================
            var password = $('input[name=password]');

            password.blur(function() {
                if (password.val() != '') {

                    //Если длина введенного пароля меньше шести символов, то выводим сообщение об ошибке
                    if (password.val().length < 6) {
                        //Выводим сообщение об ошибке
                        $('#valid_password_message').text('Минимальная длина пароля 6 символов');

                        // Дезактивируем кнопку отправки
                        $('input[type=submit]').attr('disabled', true);

                    } else {
                        // Убираем сообщение об ошибке
                        $('#valid_password_message').text('');

                        //Активируем кнопку отправки
                        $('input[type=submit]').attr('disabled', false);
                    }
                } else {
                    $('#valid_password_message').text('Введите пароль');
                }
            });
        });
    </script>

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="generator" content="Mobirise v5.3.5, mobirise.com">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
    <link rel="shortcut icon" href="assets/images/logo.png" type="image/x-icon">
    <meta name="description" content="">


    <title>Home</title>
    <link rel="stylesheet" href="assets/web/assets/mobirise-icons2/mobirise2.css">
    <link rel="stylesheet" href="assets/tether/tether.min.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="assets/dropdown/css/style.css">
    <link rel="stylesheet" href="assets/socicon/css/styles.css">
    <link rel="stylesheet" href="assets/theme/css/style.css">
    <link rel="preload" href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,400;0,700;1,400;1,700&display=swap&display=swap" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,400;0,700;1,400;1,700&display=swap&display=swap">
    </noscript>
    <link rel="preload" as="style" href="assets/mobirise/css/mbr-additional.css">
    <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">

</head>

<body>
    <section class="menu menu1 cid-sx2mwDkJY4" once="menu" id="menu1-7">
        <nav class="navbar navbar-dropdown navbar-fixed-top navbar-expand-lg">
            <div class="container">
                <div class="navbar-brand">

                    <span class="navbar-caption-wrap"><a class="navbar-caption text-black display-2" href="#">SenderApp</a></span>
                </div>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <div class="hamburger">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav nav-dropdown" data-app-modern-menu="true">
                        <li class="nav-item"><a class="nav-link link text-black display-4" href="/index.php">
                                Главная</a></li>
                        <li class="nav-item"><a class="nav-link link text-black display-4" href="index_cabinet.php">
                                Личный кабинет </a></li>
                    </ul>

                    <div class="navbar-buttons mbr-section-btn">

                        <!-- <div id="auth_block"> -->
                        <?php
                        //Проверяем авторизован ли пользователь
                        if (!isset($_SESSION['email']) && !isset($_SESSION['password'])) {
                            // если нет, то выводим блок с ссылками на страницу регистрации и авторизации
                        ?>

                            <div id="link_register">
                                <a class="btn btn-primary display-4" href="/form_register.php">Регистрация</a>
                            </div>

                            <div id="link_auth">
                                <a class="btn btn-primary display-4" href="/form_auth.php">Вход</a>
                            </div>

                        <?php
                        } else {
                            //Если пользователь авторизован, то выводим ссылку Выход
                        ?>
                            <div id="link_logout">
                                <a class="btn btn-primary display-4" href="/logout.php">Выход</a>
                            </div>
                        <?php
                        }
                        ?>
                        <!-- </div> -->


                    </div>
                </div>
            </div>
        </nav>
    </section>