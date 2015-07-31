<?php 
session_start();
$SESSION['login'] = 'vasja';
if (isset($_COOKIE['count'])) {
    $counter = ++$_COOKIE['count'];
} else {
    $counter = 1;
}
setcookie('count', $counter, time()+86400);
if ($counter == 1) {
    echo 'Вы посетили наш cайт ' . $counter . 'раз! Рекомендуем Вам зарегаться' . "<br>";
    echo 'Вы будете перенаправлены через 5 сек на страницу регистрации';
    header('Refresh: 5; registration.php');
} else {
    echo 'Вы были здесь ' . $counter . ' раз';
}
