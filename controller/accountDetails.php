<?php
require "model/database.php";
session_start();

if (!isset($_POST["name"])) {
    return;
}
if (!isset($_POST["email"])) {
    return;
}
if (!isset($_POST["password"])) {
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
// check whether email exists
if ($result !== true && $result->num_rows != 0) {

    while ($row = $result->fetch_assoc()) {
        $name = $row["name"];
    }
    $error = "An account with this email address alread exist. Please the login page to login in! P.S the username is " . $name . "";
    return;
}
// check whether email exists
if ($result !== true && $result->num_rows != 0) {

    while ($row = $result->fetch_assoc()) {
        $name = $row["name"];
    }
    $error = "An account with this name address alread exist. Please the login page to login in! P.S the username is " . $name . "";
    return;
}
//update email
// why is this not working
if (isset($_POST["email"])) {
    require "model/database.php";
    $query = "UPDATE user set email = '" . $_POST["email"] . "' WHERE email = '" . $_SESSION["email"] . "'";
    $result = $database->query($sql);
    $_SESSION["name"] = $_POST["email"];
}
//update name
if (isset($_POST["name"])) {
    echo $_POST["name"];
    require "model/database.php";
    $query = "UPDATE user set name = '" . $_POST["name"] . "' WHERE name = '" . $_SESSION["name"] . "'";
    $result = $database->query($sql);
    var_dump($result);
    $_SESSION["name"] = $_POST["name"];
}
//update password
if (isset($_POST["password"])) {
    $query = "UPDATE password FROM user set password = '" . password_hash($_POST["password"], PASSWORD_DEFAULT) . "' WHERE sessionId = '" . session_id() . "'";
}