<?php
error_reporting(E_ALL | E_STRICT);
// Здесь обработка запроса страницы.
// Запомнить в куки что мы были на этой странице,
// незабыв удалить данные, о посещении предыдущей.
// Страница должна быть недоступна незареганым юзерам, 
// также как и index.php

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
	<?php
	if (!empty($_COOKIE['login'])) {
		echo 'Вы вошли сюда как ' . $_COOKIE['login'];
	}
	
	?>

<a href="logout.php">Выход</a>
	
</body>
</html>
