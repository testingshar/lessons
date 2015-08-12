<?php
error_reporting(E_ALL | E_STRICT);
// Здесь обработка запроса страницы.
// Запомнить в куки что мы были на этой странице,
// незабыв удалить данные, о посещении предыдущей.
// Страница должна быть недоступна незареганым юзерам, 
// также как и index.php
session_start();
setcookie('pageA', 'a.php', time()+60*60*24);
$_COOKIE['name'] = $_SESSION['user'];
echo $_COOKIE['name'] . "<br>";
var_dump($_SESSION['user']);
//$sessid = session_id();
//echo $sessid;
if (empty($_COOKIE['name'])) {
	header('Location: index.php');
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
