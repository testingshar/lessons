<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Задание со звёздочкой</title>
</head>
<body>
  <form action="calc2.php" method="post">
      <input type="text" name="firstnumber">
      <input type="text" name="secondnumber"> =

<?php
error_reporting(0);
$firstnumber = $_POST['firstnumber'];
$secondnumber = $_POST['secondnumber'];
$action = $_POST['act'];
switch ($action) {
  case '+':
    echo $firstnumber + $secondnumber;
    break;
  case '−':
      echo $firstnumber - $secondnumber;
      break;  
  case '*':
      echo $firstnumber * $secondnumber;
      break;  
  case '/':
      echo $firstnumber / $secondnumber;
        break;    
}
?>

      <br>
      <input type="submit" value="+" name="act">
      <input type="submit" value="−" name="act">
      <input type="submit" value="*" name="act">
      <input type="submit" value="/" name="act">
      <br><br>
      <input type="reset" value="очистить поля">
  </form>
</body>
</html>
