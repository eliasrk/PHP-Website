<?php
include "model/database.php";

$database;
$sql = "SELECT username, tweetId, content, comment FROM Blog.tweets ORDER BY tweetId DESC";
$result = $database->query($sql);
while ($row = $result->fetch_assoc()) {
    echo " <div class = 'tweet'>"
        . "<div class = 'username'> " . $row["username"] . "</div>"
        .  " <div> " . $row["content"] . "</div>"
        . "<br></div> ";
}
$database->close();