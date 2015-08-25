<?php
error_reporting(E_ALL | E_STRICT);
// Здесь обработка запроса страницы.
// Запомнить в куки что мы были на этой странице,
// незабыв удалить данные, о посещении предыдущей.
// Страница должна быть недоступна незареганым юзерам, 
// также как и index.php
if (isset($_COOKIE['sid']) && $_COOKIE['sid'] != session_id()) {
	session_id($_COOKIE['sid']);
}
session_start();
setcookie('pageB', 'b.php', time()+60*60*24);
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
</head>
<body>
	<!-- Здесь вид, как на слайде. -->
	<h1>Страница Б</h1>
	<a href="a.php">А</a> и Б сидели на трубе
	<br>
	Вы вошли как => <b><?php echo $_SESSION['user'];?></b>
	<br>
	<a href="logout.php">Выход</a>

</body>
</html>
