<?php
error_reporting(E_ALL | E_STRICT);

if (
    isset($_COOKIE['sid']) &&
    $_COOKIE['sid'] != session_id()
) {
    session_id($_COOKIE['sid']);
}

session_start();
