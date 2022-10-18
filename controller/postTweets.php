<?php

require "model/database.php";
if (isset($_POST['tweet'])) {
    $sql = "INSERT INTO Blog.tweets (username,content,comment,upvote) 
    values ('elias','" . $_POST["tweetfield"] . "' ,'comment',0)";
    $result = $database->query($sql);
}