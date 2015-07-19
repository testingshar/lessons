<?php

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
