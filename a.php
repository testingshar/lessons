<?php
error_reporting(E_ALL | E_STRICT); 
// Здесь обработка запроса страницы.
// Запомнить в куки что мы были на этой странице,
// незабыв удалить данные, о посещении предыдущей.
// Страница должна быть недоступна незареганым юзерам, 
// также как и index.php
session_start(); 
if (empty($_SESSION['username'])) {
	header("Location: index.php");
}
setcookie("pageA", "a.php", time()+60*60*24);
echo $_COOKIE['pageA'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Страница А</title>
</head>
<body>
	<!-- Здесь вид, как на слайде. -->
	<h1>Страница А</h1>
	А и <a href="b.php"> Б </a> сидели на трубе
	<br><br>
	Вы вошли как <b><?php echo $_SESSION['username']; ?></b>
	<br>
	<a href="logout.php">Выход</a>
</body>
</html>
