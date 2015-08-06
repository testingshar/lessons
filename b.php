<?php
error_reporting(E_ALL | E_STRICT);
// Здесь обработка запроса страницы.
// Запомнить в куки что мы были на этой странице,
// незабыв удалить данные, о посещении предыдущей.
// Страница должна быть недоступна незареганым юзерам, 
// также как и index.php
session_start();
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
	<a href="a.php"> A</a> и Б сидели на трубе
	<br><br>
	Вы вошли как <b><?php echo $_SESSION['username'];?></b>
	<br>
	<a href="logout.php">Выход</a>
</body>
</html>
