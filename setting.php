<?php
error_reporting(E_ALL | E_STRICT);

if (isset($_COOKIE['sid']) && $_COOKIE['sid'] != session_id()) {
    session_id($_COOKIE['sid']);
}
session_start();

setcookie('BackUrl', 'setting.php', time()+60*60*24);

if (empty($_SESSION['user']) && empty($_COOKIE['sid'])) {
    header('Location: login.php');
    exit();
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Файл настроек</title>
    <!--<link href="style.css" type="text/css" rel="stylesheet">-->
</head>
<body>
<form action="setting.php">
    <h1>Выбирете  стиль оформления</h1>
    <label>
    <input type="radio" name="butt" value="st01">Стиль оформления 1
    </label>
    <br>

    <label>
    <input type="radio" name="butt" value="st02">Стиль оформления 2
    </label>
    <br>

    <label>
    <input type="radio" name="butt"  value="st03">Стиль оформления 3
    </label>
    <br><br>
    <a href="a.php">А</a> и <a href="b.php">Б</a> сидели на трубе
    <br><br>
    Вы вошли как <b><?php echo $_SESSION['user'];?></b>
    <br><br>
    <a href="logout.php">Выход</a>
</form>
</body>
</html>