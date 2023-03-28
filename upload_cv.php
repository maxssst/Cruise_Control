<?php
if (isset($_POST['upload_cv'])) {
    //Upload foto
    foreach ($_FILES["upload_cv"]["error"] as $key => $error) {
        if ($error == UPLOAD_ERR_OK) {
            $tmp_name = $_FILES["upload_cv"]["tmp_name"][$key];
            $name = basename($_FILES["upload_cv"]["name"][$key]);
            move_uploaded_file($tmp_name, "upload/$name");
        }
    }
}

// //Подключение шапки
require_once("header.php");
require_once("login_checkout.php");
?>
<div class="container py-8">
    <br><br><br><br><br>
    <div class="h-100 p-5 bg-light border rounded-3">
        <br>
        <h1>Подготовление Email к отправке </h1>
        <br><br>
        <h4>Прикрепленный файл: <?php echo "$name";?></h4>
        <br><br>
        <h4>Введите Имя Фамилию на английскаом языке:</h4>
        <br>
                    <div class="col-md-4">
                        <label for="validationServer01" class="form-label">NAME</label>
                        <input type="text" class="form-control is-valid" name="form_name" required>
                        <div class="valid-feedback"></div>
                    </div>
                    <div class="col-md-4">
                        <label for="validationServer01" class="form-label">SURNAME</label>
                        <input type="text" class="form-control is-valid" name="form_surname" required>
                        <div class="valid-feedback"></div>
                    </div>
                    <div class="col-md-4">
                        <label for="validationServer01" class="form-label">EMAIL на крторый будут приходить ответы</label>
                        <input type="text" class="form-control is-valid" name="form_email" required>
                        <div class="valid-feedback"></div>
                    </div>
        <p>
        </p>
        <br>
        <form class="row g-3" action="start_email_send.php" method="POST">
            <button class="btn btn-info" type="submit" name="start_email_send">Start Email Sending</button>
        </form>
        <br><br><br><br><br>

    </div>


</div>


<br><br><br>
<div class="container py-4">
    <a class="btn btn-primary display-7" href="index_cabinet.php">
        Вернуться </a>
</div>

<?php
//Подключение подвала
require_once("footer.php");
?>