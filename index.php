<?php
error_reporting(E_ALL | E_STRICT);
session_start();
if ($_COOKIE['sid'] == session_id()) {
	header('Location: a.php');
} else {
	header('Location: login.php');
}


