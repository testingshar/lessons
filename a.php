<?php

error_reporting(E_ALL | E_STRICT);

if (isset($_COOKIE['sid']) && $_COOKIE['sid'] != session_id()) {
    session_id($_COOKIE['sid']);
}
session_start();
setcookie('BackUrl', 'a.php', time()+60*60*24);
if (empty($_SESSION['user']) && empty($_COOKIE['sid'])) {
    header('Location: login.php');
    exit();
//require "style01.css";    

    if (isset($_COOKIE['style03'])) {
       ?> 
       <link href="style03.css" type="text/css" rel="stylesheet">
       <?php
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Страница А</title>
<!--<link href="style03.css" type="text/css" rel="stylesheet">-->
</head>
<body>

    <!-- Здесь вид, как на слайде. -->
    <h1>Страниц А</h1>
    А и <a href="b.php">Б</a> сидели на трубе
    <br>
    <a href="setting.php">Страница оформления</a>
    <br>
    Вы вошли как => <b><?php echo $_SESSION['user']; ?></b>
    <br>
    <a href="logout.php">Выход</a>
</body>
</html>
