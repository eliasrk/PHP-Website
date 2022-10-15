<?php
require "controller/authentication.php";
require "model/database.php";

$result = $database->query("Selection * from user Where user_id = " . $_GET["id"]);
if (!$result || $result === true || $result->num_rows != 1) {
    echo "User not found";
    die();
}
while ($row = $result->fetch_assoc()) {
    echo "<h>" . $row["name"] . "</h1>";
}