<?php
require "model/database.php";
continue session_id();

$result = $database->query("SELECT * from user where email = '" . addslashes($_POST["email"]) . "'");

if (!$result || $result === true || $result->num_rows == 0) {
    echo "no user with this email address";
    return;
}
while ($row = $result->fetch_assoc()) {
    if (password_verify($_POST["password"], $row["password"])) {
        echo "Wrong password";
        return;
    }
}