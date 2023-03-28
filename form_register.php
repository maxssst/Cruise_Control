<?php
//Подключение шапки
require_once("header.php");
?>


<div class="container col-xl-10 col-xxl-8 px-4 py-5">
    <div class="row align-items-center g-lg-5 py-5">

        <div class="col-md-10 mx-auto col-lg-5">



            <?php
            //Проверяем, если пользователь не авторизован, то выводим форму регистрации, 
            //иначе выводим сообщение о том, что он уже зарегистрирован
            if (!isset($_SESSION["email"]) && !isset($_SESSION["password"])) {
            ?>
                <div id="form_register">


                    <form action="register.php" method="post" name="form_register">
                        <div class="block_for_messages">
                            <?php
                            //Если в сессии существуют сообщения об ошибках, то выводим их
                            if (isset($_SESSION["error_messages"]) && !empty($_SESSION["error_messages"])) {
                                echo $_SESSION["error_messages"];

                                //Уничтожаем чтобы не выводились заново при обновлении страницы
                                unset($_SESSION["error_messages"]);
                            }

                            //Если в сессии существуют радостные сообщения, то выводим их
                            if (isset($_SESSION["success_messages"]) && !empty($_SESSION["success_messages"])) {
                                echo $_SESSION["success_messages"];

                                //Уничтожаем чтобы не выводились заново при обновлении страницы
                                unset($_SESSION["success_messages"]);
                            }
                            ?>
                        </div>
                        <div class="form-floating mb-4">
                            <h2>Регистрация</h2>
                        </div>
                        <table>
                            <tbody>
                                <tr>
                                    <td> Имя: </td>
                                    <td>
                                        <div class="form-floating mb-2">
                                            <input type="text" class="form-control" name="first_name" required="required">
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td> Фамилия: </td>
                                    <td>
                                        <div class="form-floating mb-2">
                                            <input type="text" class="form-control" name="last_name" required="required">
                                        </div>

                                    </td>
                                </tr>

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
                                    <!-- <td> Введите капчу: </td> -->
                                    <td>

                                        <div class="form-floating mb-4">
                                            <img src="captcha.php" alt="Капча" /> <br>
                                            <input type="text" class="form-control" name="captcha" placeholder="Введите код" required="required">
                                        </div>

                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2">
                                        <div class="form-floating mb-2">
                                            <input type="submit" class="form-control" name="btn_submit_register" value="Зарегистрироватся!">
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
                    <h2>Вы уже зарегистрированы</h2>
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