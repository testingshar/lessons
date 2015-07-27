<?php
error_reporting(0);
$firstnumber = $_POST['firstnumber'];
$secondnumber = $_POST['secondnumber'];
$action = $_POST['act'];
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Задание со звёздочкой</title>
</head>
<body>
  <form action="calc2.php" method="post">
    <input type="text" name="firstnumber" value="<?php echo $_POST['firstnumber'];?>" >
    <input type="text" name="secondnumber" value="<?php echo $_POST['secondnumber'];?>"  > =

<?php
if ($action == '+') {
   echo $firstnumber + $secondnumber;
} elseif ($action == '−') {
  echo $firstnumber - $secondnumber;
} elseif ($action == '*') {
  echo $firstnumber * $secondnumber;
} elseif ($action == '/') {
  if ($secondnumber == 0) {
    echo 'Нельзя делить на 0';
  } else {
  echo $firstnumber / $secondnumber;  
  }
  
} 
?>
      <br>
      <input type="submit" value="+" name="act">
      <input type="submit" value="−" name="act">
      <input type="submit" value="*" name="act">
      <input type="submit" value="/" name="act">
      <br><br>
  </form>
</body>
</html>
