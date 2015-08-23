<?php 
error_reporting(E_ALL | E_STRICT);

session_start();
setcookie('backURL', false);
setcookie('style', false);
setcookie('sid', false);
setcookie('PHPSESSID', false);
unset($_SESSION['username']);
session_destroy();
header("Location: login.php");
