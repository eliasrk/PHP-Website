<?php
session_start();
require "model/database.php";
$name = "SELECT name FROM `user` WHERE sessionId = '" . session_id() . "'";
$username = $database->query($name);
$username = $username->fetch_assoc()["name"];

if (isset($_POST['tweet'])) {


    $sql = "INSERT INTO Blog.tweets (username,content,comment,upvote) 
    values ('$username','" . $_POST["tweetfield"] . "' ,'comment',0)";
    $result = $database->query($sql);
}