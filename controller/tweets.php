<?php
include "model/database.php";

if (!isset($_POST["tweet"])) {
    return;
}

if (strlen($_POST["tweetfield"]) > 140) {
    $error = "the tweet length is to long";
    $erro = "<script type='text/javascript'>alert('$error');</script>";
}



echo $database;
$sql = "SELECT username, tweetId, content, comment FROM Blog.tweets";
$result = $database->query($sql);
while ($row = $result->fetch_assoc()) {
    echo " <div class = 'tweet'>"
        . "<div class = 'username'> " . $row["username"] . "</div>"
        .  " <div> " . $row["content"] . "</div>"
        . "<br></div> ";
}
$database->close();