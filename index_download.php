<?php
//Подключение шапки
require_once("header.php");
require_once("autorisation/login_checkout.php");
?>

<br><br><br>
<div class="container py-4">


    <div class="p-5 mb-4 bg-light rounded-3">
        <div class="container-fluid py-5">
            <h1 class="display-5 fw-bold">Все прошло успешно!</h1>
            <p class="col-md-8 fs-4">Теперь вы можете скачать свой файл по ссылке ниже. </p>
            <p class="col-md-8 fs-4">Либо вы можете заказать рассылку. </p>
            <p class="col-md-8 fs-4"> </p>
            <p class="col-md-8 fs-4"> </p>
            <p class="col-md-8 fs-4"> </p>

        </div>

    </div>


    <div class="mbr-section-btn">

        <a class="btn btn-primary display-7" href="index_pdf.php">
            Скачать CV</a>
        <a class="btn btn-primary display-7" href="">
            Заказать рассылку CV Бесплатно</a>

    </div>
    <br><br><br><br><br><br><br><br><br><br><br><br>

    <a class="btn btn-primary display-7" href="index.php">
        Вернуться в Личны кабинет </a>


</div>
<br><br><br>



<?php
//Подключение подвала
require_once("footer.php");
?>