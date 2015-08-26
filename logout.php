<?php
error_reporting(E_ALL | E_STRICT);
session_start();
unset($_SESSION['user']);
session_destroy();
setcookie('PHPSESSID', false, time()-1);
setcookie('pageA', false, time()-1);
setcookie('pageB', false, time()-1);
setcookie('sid', false, time()-1);
setcookie('BackUrl', false, time()-1);
header('Location: index.php');
