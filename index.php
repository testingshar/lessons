<?php
error_reporting(E_ALL | E_STRICT);
if (isset($_COOKIE['sid']) && $_COOKIE['sid'] != session_id()) {
    session_id($_COOKIE['sid']);
}
session_start();
if (empty($_COOKIE['sid']) && empty($_SESSION['user'])) {
    header('Location: login.php');
} elseif (isset($_COOKIE['BackUrl'])) {
    header('Location:' . $_COOKIE['BackUrl']);
}

