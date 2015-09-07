<?php
error_reporting(E_ALL | E_STRICT);

if (isset($_COOKIE['sid']) && $_COOKIE['sid'] != session_id()) {
    session_id($_COOKIE['sid']);
}
session_start();
setcookie('BackUrl', 'b.php', time()+60*60*24);
if (empty($_SESSION['user']) && empty($_COOKIE['sid'])) {
    header('Location: login.php');
    exit();
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Страница Б</title>
    <link rel="stylesheet" href=" <?php echo $_COOKIE['color']; ?> "> 
</head>
<body>
    <!-- Здесь вид, как на слайде. -->
    <h1>Страница Б</h1>
    <a href="a.php">А</a> и Б сидели на трубе
    <br>
    <a href="setting.php">Страница оформления</a>
    <br>
    Вы вошли как => <b><?php echo $_SESSION['user'];?></b>
    <br>
    <a href="logout.php">Выход</a>

</body>
</html>
