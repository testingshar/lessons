<?php

$firstnumber = $_POST['firstnumber'];
$secondnumber = $_POST['secondnumber'];
if (empty($_POST['firstnumber']) && empty($_POST['secondnumber'])) {
    echo 'По ходу кто то что то да где то и когда то забыл во что то вписать ...';
} elseif($_POST['operations'] == 'plus') {
    echo $firstnumber + $secondnumber;
} elseif ($_POST['operations'] == 'minus') {
    echo $firstnumber - $secondnumber;
} elseif ($_POST['operations'] == 'multiply') {
    echo $firstnumber * $secondnumber;
} elseif ($_POST['operations'] == 'division') {
    if($secondnumber == 0) {
        echo 'Ты поделил на 0 - за это я отрублю тебе руку которой ты посмел нажать клавишу деления ))))';
    } else {
        echo $firstnumber / $secondnumber;
    }
}
