<?php
require 'bootstrap.php';

if (empty($_SESSION['username']) && empty($_COOKIE['sid'])) {
    header('Location: login.php');
    exit;
}

if (empty($_COOKIE['backURL'])) {
    $_COOKIE['backURL'] = 'profile.php';
}

header('Location: ' . $_COOKIE['backURL']);
