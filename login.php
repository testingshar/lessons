<?php 
error_reporting(E_ALL | E_STRICT);

if (isset($_POST['login']) && $_POST['login'] != '') {
    // Здесь логика авторизации
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Вход</title>
</head>
<body>
    <h1>Вход на сайт</h1>

    <form method="post">
        <label for="nickName">Введите имя:</label>
        <br>
        <input type="text" name="login" id="nickName">
        <br>
        <label>
            <input type="checkbox" name="remember" checked> Запомнить меня
        </label>
        <br>
        <input type="submit" value="Войти">
    </form>
</body>
</html>
