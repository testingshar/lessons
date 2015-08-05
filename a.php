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
    echo 'Ваш логин' . $_SESSION['username'];
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
	<h1>Вход на сайт</h1>	
	<br><br><br>
	<?php echo 'Ваш логин ' . $_SESSION['username']; ?>
	<br><br><br>
	<a href="logout.php">Выход с сайта</a>
</body>
</html>
