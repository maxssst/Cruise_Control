<?php
//Подключение шапки
require_once("header.php");
require_once("login_checkout.php");
?>


<main>
    <div class="container py-4">
        <br><br><br>

        <div class="p-5 mb-4 bg-light rounded-3">
            <div class="container-fluid py-4">
                <h1 class="display-5 fw-bold">Добро пожаловать в личный кабинет</h1>
                <h4 class="display-4 fw-bold">Вы вошли в кабинет как: <?php echo "$_SESSION[email]"; ?> </h4>

                <!-- <p class="col-md-8 fs-4">Тут вы можете выбрать подходящий для вас вариан рассылки вашей CV. </p> -->
            </div>


            <div class="col-md-8">
                <div class="h-100 p-5 bg-light border rounded-3">
                    <h2>Потдержите Разработчиков</h2>
                    <p>Платная рассылка по Украинским крюингам включающих в себя более 580 крюингов, а так же 650 Email's.
                        Все это может быть Вам доступно всего за 50грн.
                        Потдеожите проект! </p>
                    <div class="mbr-section-btn">

                        <a class="btn btn-primary display-7" href="index_coast.php">
                            50грн за 650 Email's</a>
                    </div>
                </div>
            </div>
            <br>

            <div class="col-md-8">
                <div class="h-100 p-5 bg-light border rounded-3">
                    <h2>Бесплатная рассылка </h2>
                    <p>Бесплатная рассылка включает в себя 50 Украинских крюингов, а так же более 50 Email's по которым будет отправленно ваше CV.</p>
                    <div class="mbr-section-btn">
                        <a class="btn btn-primary display-7" href="index_1.php">
                            &nbsp; &nbsp; &nbsp;Free Apply&nbsp; &nbsp; &nbsp;</a>
                    </div>
                </div>
            </div>




            <br>
            <div class="col-md-8">
                <div class="h-100 p-5  bg-light border rounded-3">
                    <h2>Заполни и Скачай CV</h2>
                    <p>В данном разделе Вы можете Заполнить онлайн Вашу CV и сразу же скачать.</p>
                    <div class="mbr-section-btn">
                        <a class="btn btn-primary display-7" href="index_fill.php">
                            Заполнить CV Онлайн и Скачать</a>
                    </div>
                </div>
            </div>
            <br><br><br><br><br>
        </div>
    </div>
</main>

<section class="header15 cid-sx2jSuv21o" id="header15-2">

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md">
                <div class="text-wrapper">
                    <h3 class="mbr-section-title mb-3 mbr-fonts-style ">
                        <strong>Как активировать рассылку?</strong>
                    </h3>
                    <p class="mbr-text mb-3 mbr-fonts-style display-7">
                        В данном видео кратко пассказываеться как заказать
                        рассылку вашей Application Form либо CV по Email
                        адрессам Украинских крюингов бессплатно
                    </p>
                    <div class="mbr-section-btn">
                        <a class="btn btn-primary display-4" href="https://youtube.com">Ссылка на видео в Youtube</a>
                    </div>
                </div>
            </div>
            <div class="mbr-figure col-12 col-md-7"><iframe class="mbr-embedded-video" src="https://www.youtube.com/embed/HujDEPAWboE?rel=0&amp;amp;showinfo=0&amp;autoplay=0&amp;loop=0" width="1280" height="720" frameborder="0" allowfullscreen></iframe></div>
        </div>
    </div>
</section>


<?php
//Подключение подвала
require_once("footer.php");
?>