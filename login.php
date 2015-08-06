<?php 
error_reporting(E_ALL | E_STRICT);
session_start();
if (!empty($_POST['login']) && !empty($_POST['passwrd'])) {
    $_SESSION['username'] = $_POST['login'];
}
if (isset($_POST['login']) && $_POST['login'] != '') {
    if (isset($_POST['passwrd']) && $_POST['passwrd'] != '') {
    setcookie($_POST['login'], $_POST['passwrd'], time()+60*60*24);
    $_COOKIE['login'] = $_POST['login'];
    header("Location: a.php");
    }
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
        <label for="passwrd">Введите пароль:</label>
        <br>
        <input type="password" name="passwrd" id="passwrd">
        <br>
        <label>
            <input type="checkbox" name="remember" checked> Запомнить меня
        </label>
        <br>
        <input type="submit" value="Войти">
    </form>
</body>
</html>
