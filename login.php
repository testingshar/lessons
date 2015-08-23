<?php 
require 'bootstrap.php';

if (isset($_SESSION['username'])) {
    header('Location: index.php');
    exit;
}

if (isset($_POST['login']) && $_POST['login'] != '') {

    if (isset($_POST['remember'])) {
        setcookie('sid', session_id(), time()+60*60*24*30);
    }

    $_SESSION['username'] = $_POST['login'];
    header('Location: index.php');
    exit;
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
