<?php
require 'bootstrap.php';
setcookie('backURL', false);
setcookie('backURL', 'profile.php', time()+60*60*24);

if (empty($_SESSION['username']) && empty($_COOKIE['sid'])) {
    header('Location: login.php');
    exit;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Профиль пользователя <?=$_SESSION['username']?></title>
</head>
<body>
    <h1>Привет, <?=$_SESSION['username']?>!</h1>
    <p><a href="a.php">A</a> и <a href="b.php" class="current">B</a> сидели на трубе.</p>
    <p><a href="logout.php">Выход</a></p>
</body>
</html>
