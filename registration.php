<?php
session_start();
$SESSION['login'] = 'vasjatka';
//$login = $_POST['login'];
//$password = $_POST['password'];
setcookie('login', 'password', time()+86400);
echo 'Форма регистрации здесь';
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Форма регистрации на сайте</title>
</head>
<body>
<form action="registration.php" method="post">
    Логин<input type="text" name="login"><br>
    Пароль<input type="password" name="password">
    <br>
    <label>
        Запомнить меня<input type="checkbox" name="savedata" value="sv">
    </label>
    <br><br>
    <input type="submit">
</form>
</body>
</html>
