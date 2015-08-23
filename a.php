<?php
require 'bootstrap.php';
setcookie('backURL', false);
setcookie('backURL', 'a.php', time()+60*60*24);

if (empty($_SESSION['username']) && empty($_COOKIE['sid'])) {
    header('Location: login.php');
    exit;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Страница А</title>
</head>
<body>
    <h2>Страница "А"</h2>

    <p><a href="a.php" class="current">A</a> и <a href="b.php">B</a> сидели на трубе.</p>

    <p>Вы вошли как <a href="profile.php" title="Настройки"><?=$_SESSION['username'];?></a> | <a href="logout.php">Выход</a></p>
</body>
</html>
