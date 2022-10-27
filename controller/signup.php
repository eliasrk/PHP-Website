<?php

if (!isset($_POST["submit"])) {
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

// Database connection
require "model/database.php";

$query = "SELECT * FROM user WHERE email = '" . $_POST["email"] . "'";

$result = $database->query($query);
if (!$result) {
    $error = "An interal error occured. Please contact the webmaster!";
    return;
}
// check whether email exists
if ($result !== true && $result->num_rows != 0) {

    while ($row = $result->fetch_assoc()) {
        $name = $row["name"];
    }
    $error = "An account with this email address alread exist. Please the login page to login in! P.S the username is " . $name . "";
    return;
}

session_start();
session_regenerate_id(true);
//inserts your details into account
$sesh = session_id();
$_SESSION['sessionId'] = $sesh;
$sessionId = session_id();
echo $sessionId;

$query = "INSERT into user(email,password,name,sessionId) VALUES('" . $_POST["email"] . "',
 '" . password_hash($_POST["password"], PASSWORD_DEFAULT) . "',
  '" . strip_tags($_POST["name"]) . "','$sessionId')";
$result = $database->query($query);
if (!$result) {
    $error = "An interal error occured. Please contact the webmaster!";
    return;
}
echo $query;

$_SESSION["expiration"] = time() + 3600;
echo " the session will expire at " . date("Y-m-d H:i:s", $_SESSION["expiration"]);
header("location: Main.php");