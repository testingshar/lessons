<?php

$firstnumber = $_POST['firstnumber'];
$secondnumber = $_POST['secondnumber'];
if (empty($firstnumber) && empty($secondnumber)) {
    echo 'По ходу кто то что то да где то и когда то забыл во что то вписать ...';
} elseif ($firstnumber == 0 || $secondnumber == 0) {
	echo 'Ни одно из чисел не должно быть равным 0, математически это не совсем правильно';
} elseif ($_POST['operations'] == 'plus') {
    echo $firstnumber + $secondnumber;
} elseif ($_POST['operations'] == 'minus') {
    echo $firstnumber - $secondnumber;
} elseif ($_POST['operations'] == 'multiply') {
    echo $firstnumber * $secondnumber;
} elseif ($_POST['operations'] == 'division') {
    echo $firstnumber / $secondnumber;
}
