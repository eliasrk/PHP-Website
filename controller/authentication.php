<?php
session_start();

if (isset($_SESSION["expiration"]) || $_SESSION["expiration"] < time()) {
    header("Location: login.php");
    //kills all connections databanks and any data running in the background
    die("Please login!");
}
$_SESSION["expiration"] = time() + 3600;
