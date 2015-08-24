<?php
error_reporting(E_ALL | E_STRICT);
session_start();

// Здесь обработка запроса страницы.
// Запомнить в куки что мы были на этой странице,
// незабыв удалить данные, о посещении предыдущей.
// Страница должна быть недоступна незареганым юзерам, 
// также как и index.php
if (isset($_COOKIE['sid']) && $_COOKIE['sid'] != session_id()) {
	session_id($_COOKIE['sid']);
}

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
</body>
</html>
