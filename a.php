<?php
error_reporting(E_ALL | E_STRICT);
// Здесь обработка запроса страницы.
// Запомнить в куки что мы были на этой странице,
// незабыв удалить данные, о посещении предыдущей.
// Страница должна быть недоступна незареганым юзерам, 
// также как и index.php
session_start();
if (isset($_POST['login'])) {
    $_SESSION['username'] = $_POST['login'];
    $_COOKIE['username'] = $_POST['login'];
} 
if (empty($_COOKIE['username'])) {
    header("Location: index.php");
    exit();
} else {
    setcookie("pageA", "a.php", time()+86400);
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
	<?php echo 'Вы вошли как ' . $_SESSION['username']; ?>
	<br><br><br>
	А и <a href="b.php">Б </a>сидели на трубе
	<br><br>
	<a href="logout.php">Выход с сайта</a>
</body>
</html>
