<?php
session_start();

if (!isset($_SESSION['current'])) {
    $_SESSION['current'] = time();
} else if (time() - $_SESSION['current'] > 1800) {
    die("Please login!");
    header("location: Login.php");
}