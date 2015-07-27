<?php
error_reporting(0);
$firstnumber = $_POST['firstnumber'];
$secondnumber = $_POST['secondnumber'];
$action = $_POST['act'];
switch ($action) {
    case '+':
        $result = $firstnumber + $secondnumber;
        break;
    case '−':
        $result = $firstnumber - $secondnumber;
        break;
    case '*':
        $result = $firstnumber * $secondnumber;
        break;
    case '/':
        if ($secondnumber == 0) {
        	echo 'FATAL_ERROR!!!!! BU GA GA!!!';
        } else {
        $result = $firstnumber / $secondnumber;
        }
        break;    
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Задание со звёздочкой</title>
</head>
<body>
	<form action="calc3.php" method="post">
		<input type="text" name="firstnumber" value=" <?php echo $firstnumber; ?>" >
		<input type="text" name="secondnumber" value=" <?php echo $secondnumber; ?>" >	=
		<?php echo $result; ?>
		<br>
		<input type="submit" value="+" name="act">
		<input type="submit" value="−" name="act">
		<input type="submit" value="*" name="act">
		<input type="submit" value="/" name="act">
	</form>
</body>
</html>