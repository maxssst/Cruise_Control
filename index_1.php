<?php
//Подключение шапки
require_once("header.php");
require_once("login_checkout.php");
?>

<main>

    <div class="container py-4"><br><br><br>
        <div class="p-5 mb-4 bg-light rounded-3">
            <br>
            <div class="h-100 p-4 bg-light border rounded-3">
                <h2>Загрузить CV</h2>
                <p>Выбирите одну из готовых CV и загрузите ее для рассылки</p>
                <p>Если у Вас нет готовой CV для рассылки то вы можете ниже </p>
                <p>перейти по ссылке и заполнить онлайн</p>
                <form action="upload_cv.php" method="POST" enctype="multipart/form-data">
                    <input type="file" class="form-control" name="upload_cv[]" />
                    <br><br>
                    <button class="btn btn-info" type="submit" name="upload_cv">Продолжить</button>
                </form>
            </div>

            <br><br>
            <div class="h-100 p-4 bg-light border rounded-3">
                <h2>Заполни Онлайн</h2>
                <p>В данном разделе Вы можете Заполнить онлайн Вашу CV и сразу же скачать</p>
                <p>в формате PDF, после чего загрузить для дальнейшей рассылки выше</p>
                <div class="mbr-section-btn">
                    <a class="btn btn-info" href="index_fill.php">
                        Заполнить CV Онлайн и скачать PDF</a>
                </div>
            </div>


            <!-- Back to cabinet -->
            <div class="container py-4">
                <a class="btn btn-primary display-7" href="index_cabinet.php">
                    Вернуться </a>
            </div>
        </div>

    </div>
</main>

<?php
//Подключение подвала
require_once("footer.php");
?>