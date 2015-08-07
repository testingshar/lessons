<?php 
error_reporting(E_ALL | E_STRICT);
// здесь логика выхода(чистка кук и сессии)
session_start(); 
unset($_SESSION['username']);
session_destroy();
setcookie("pageA", false, time()-1);
setcookie("pageB", false, time()-1);
header("Location: index.php"); 
