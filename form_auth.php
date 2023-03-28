<?php
//Подключение шапки
require_once("header.php");
?>

<div class="container col-xl-10 col-xxl-8 px-4 py-5">
    <div class="row align-items-center g-lg-5 py-5">

        <div class="col-md-10 mx-auto col-lg-5">


            <!-- Блок для вывода сообщений -->
            <div class="block_for_messages">
                <?php

                if (isset($_SESSION["error_messages"]) && !empty($_SESSION["error_messages"])) {
                    echo $_SESSION["error_messages"];

                    //Уничтожаем чтобы не появилось заново при обновлении страницы
                    unset($_SESSION["error_messages"]);
                }

                if (isset($_SESSION["success_messages"]) && !empty($_SESSION["success_messages"])) {
                    echo $_SESSION["success_messages"];

                    //Уничтожаем чтобы не появилось заново при обновлении страницы
                    unset($_SESSION["success_messages"]);
                }
                ?>
            </div>
            <?php
            //Проверяем, если пользователь не авторизован, то выводим форму авторизации, 
            //иначе выводим сообщение о том, что он уже авторизован
            if (!isset($_SESSION["email"]) && !isset($_SESSION["password"])) {
            ?>
                <div id="form_auth">
                    <div class="form-floating mb-4">
                        <h2>Форма авторизации</h2>
                    </div>
                    <form action="auth.php" method="post" method="post" name="form_auth">
                        <table>

                            <tbody>
                                <tr>
                                    <td> Email: </td>
                                    <td>
                                        <div class="form-floating mb-2">
                                            <input type="email" class="form-control" name="email" required="required"><br>
                                            <span id="valid_email_message" class="mesage_error"></span>
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td> Пароль: </td>
                                    <td>
                                        <div class="form-floating mb-2">
                                            <input type="password" class="form-control" name="password" placeholder="6 символов" required="required"><br>
                                            <span id="valid_password_message" class="mesage_error"></span>
                                        </div>
                                    </td>
                                </tr>

                                <tr>

                                    <td>

                                        <div class="form-floating mb-2">
                                            <img src="captcha.php" alt="Изображение капчи" /> <br>
                                            <input type="text" class="form-control" name="captcha" placeholder="Введите код">
                                        </div>

                                    </td>
                                </tr>

                                <tr>
                                    <td colspan="2">
                                        <div class="form-floating mb-2">
                                            <input type="submit" class="form-control" name="btn_submit_auth" value="Войти">
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </form>
                </div>
            <?php
            } else {
            ?>
                <div id="authorized">
                    <h2>Вы уже авторизованы</h2>
                </div>

            <?php
            }
            ?>



        </div>
    </div>
</div>


<?php
//Подключение подвала
require_once("footer.php");
?>