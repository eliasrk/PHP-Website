<?php
session_start();
session_regenerate_id(true);
if (!isset($_POST["login"])) {
    return;
}

if (!isset($_POST["email"]) || empty($_POST["email"])) {
    $error = "Please enter a valid email";
    return;
}

if (strlen($_POST["email"]) > 250) {
    $error = "the email length is longer than 250 characters";
}

if (!isset($_POST["password"]) || empty($_POST["password"])) {
    $error = "Please enter a valid password";
    return;
}

require "model/database.php";

$query = "SELECT * FROM user WHERE email = '" . $_POST["email"] . "'";

$result = $database->query($query);
if (!$result) {
    $error = "An interal error occured. Please contact the webmaster!";
    return;
}

if (!$result) {
    $error = "An interal error occured. Please contact the webmaster!";
    return;
}


$_SESSION["expiration"] = time() + 3600;
echo " the session will expire at " . date("Y-m-d H:i:s", $_SESSION["expiration"]);