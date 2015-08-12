<?php 
error_reporting(E_ALL | E_STRICT);
// здесь логика выхода(чистка кук и сессии)
session_start();
unset($_SESSION['user']);
session_destroy();
header('Location: index.php');