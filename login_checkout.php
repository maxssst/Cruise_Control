<?php
//Проверяем авторизован ли пользователь
// если нет, то выводим блок с ссылками на страницу регистрации и авторизации
if (!isset($_SESSION['email']) && !isset($_SESSION['password'])) {
    exit(" <br><br><br>
        <div class=\"container py-5\">
            <br><br>
                <h2>No Access</h2>
                <strong>Ошибка!</strong> 
                <p>
                    Пожалуйста Автаризируйтесь либо Зарегистрируйтесь 
                </p>
                <div class=\"mbr-section-btn\">
                        <a class=\"btn btn-primary display-4\" href=\"/form_register.php\">Регистрация</a>
                        <a class=\"btn btn-primary display-4\" href=\"/form_auth.php\">Вход</a>
                </div>
    </div>");
}
