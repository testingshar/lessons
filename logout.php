<?php 
error_reporting(E_ALL | E_STRICT);
// здесь логика выхода(чистка кук и сессии)
unset($_SESSION['username']);
session_destroy();
header("Location: index.php");
