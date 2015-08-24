<?php 
error_reporting(E_ALL | E_STRICT);
if (isset($_COOKIE['sid']) && $_COOKIE['sid'] != session_id()) {
    session_id($_COOKIE['sid']);    
}
session_start();

if (isset($_POST['login']) && $_POST['login'] != '') {
    if (isset($_POST['remember'])) {
        setcookie('sid', session_id(), time()+60*60*24);
    }
    $_SESSION['user'] = $_POST['login'];
    header('Location: a.php');
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
