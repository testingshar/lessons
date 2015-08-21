<?php
error_reporting(E_ALL | E_STRICT);

session_start();
setcookie('pageA', 'a.php', time()+60*60*24);
if (empty($_SESSION['user'])) {
	header('Location: login.php');
}

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
	<br>
	А и <a href="b.php">Б</a> сидели на трубе
	<br><br>
	Вы вошли как <?php echo $_SESSION['user']; ?>
	<br><br>
	<a href="logout.php">Выход</a>
</body>
</html>
